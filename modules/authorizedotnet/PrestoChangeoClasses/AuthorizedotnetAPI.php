<?php
/**
 * 2008 - 2017 Presto-Changeo
 *
 * MODULE Authorize.net (AIM / DPM)
 *
 * @author    Presto-Changeo <info@presto-changeo.com>
 * @copyright Copyright (c) permanent, Presto-Changeo
 * @license   Addons PrestaShop license limitation
 * @version   2.0.0
 * @link      http://www.presto-changeo.com
 *
 * NOTICE OF LICENSE
 *
 * Don't use this module on several shops. The license provided by PrestaShop Addons
 * for all its modules is valid only once for a single shop.
 */

class AuthorizedotnetAPI
{
    const LOG_DEBUG = 10;
    const LOG_INFO = 20;
    const LOG_WARNING = 30;
    const LOG_ERROR = 40;

    protected $log_level = self::LOG_INFO;
    protected $log_dir;
    protected $log_name;
    protected $log_handler;
    protected $log_initialized = false;

    /** @var Authorizedotnet */
    protected $module;
    protected $env;
    const ENV_LIVE = 'liveMode';
    const ENV_TEST = 'testMode';

    const ENV_LIVE_URL = 'https://api.authorize.net/xml/v1/request.api';
    const ENV_TEST_URL = 'https://apitest.authorize.net/xml/v1/request.api';

    protected $auth_id;
    protected $auth_key;

    /** @var String[] Last API call response messages */
    protected $error_message = [];

    /** @var String[] Last API call response error codes */
    protected $error_code = [];

    protected $last_request_response = [];

    /**
     * AuthorizedotnetAPI constructor.
     * @param Authorizedotnet $module
     */
    public function __construct($module)
    {
        $this->log_dir = $module->getLocalPath().'logs/';
        $this->log_initialized = false;
        $this->module = $module;
        $this->env = $module->_adn_demo_mode == 1 ? self::ENV_TEST : self::ENV_LIVE;
        $this->auth_id = $module->_adn_id;
        $this->auth_key = $module->_adn_key;
    }

    public function getLastError()
    {
        $messages = [];
        foreach ($this->error_message as $key => $message)
        {
            $code = 0;
            if (isset($this->error_code[$key]))
            {
                $code = $this->error_code[$key];
            }

            $messages[] = $code.' '.$message;
        }

        return implode('<br>', $messages);
    }

    public function cleanError()
    {
        $this->error_message = [];
        $this->error_code = [];
    }

    public function getLastResponse()
    {
        return $this->last_request_response;
    }

    /* Local methods */

    /**
     * Use this method to authorize and capture a credit card payment.
     *
     * @param $data
     * @return false|mixed
     */
    public function chargeCreditCart($data)
    {
        return $this->doPaymentRequest('authCaptureTransaction', $data);
    }

    /**
     * Use this method to authorize a credit card payment. To actually charge the funds you will need to follow up with a capture transaction.
     *
     * @param $data
     * @return false|mixed
     */
    public function authorizeCreditCart($data)
    {
        return $this->doPaymentRequest('authOnlyTransaction', $data);
    }

    public function getCardsListByCustomerId($id_customer)
    {
        $sql = 'SELECT * FROM ' . _DB_PREFIX_ . 'authorizedotnet_cim_payment_profile WHERE id_customer = ' . (int) $id_customer . ' AND is_hidden = 0';
        return Db::getInstance()->executeS($sql);
    }

    public function getCustomerPaymentProfileByCard($last4, $id_customer)
    {
        $sql = 'SELECT * FROM ' . _DB_PREFIX_ . 'authorizedotnet_cim_payment_profile WHERE id_customer = ' . (int) $id_customer . ' AND last4digit LIKE "%' . pSQL($last4) . '"';
        return Db::getInstance()->getRow($sql);
    }

    public function getPaymentProfileById($payment_profile_id, $id_customer)
    {
        $sql = 'SELECT * FROM ' . _DB_PREFIX_ . 'authorizedotnet_cim_payment_profile WHERE customer_payment_profile_id  = ' . (int) $payment_profile_id . ' AND id_customer = ' . (int) $id_customer;
        return Db::getInstance()->getRow($sql);
    }

    public function deleteCustomerPaymentProfile($id_customer, $payment_profile_id)
    {
        $sql = 'SELECT * FROM ' . _DB_PREFIX_ . 'authorizedotnet_cim_payment_profile WHERE customer_payment_profile_id  = ' . (int) $payment_profile_id . ' AND id_customer = ' . (int) $id_customer;
        $data = Db::getInstance()->getRow($sql);

        $response = $this->deleteCustomerPaymentProfileRequest($data);
        if ($response)
        {
            $sql = 'DELETE FROM ' . _DB_PREFIX_ . 'authorizedotnet_cim_payment_profile WHERE customer_payment_profile_id  = ' . (int) $payment_profile_id . ' AND id_customer = ' . (int) $id_customer;
            Db::getInstance()->Execute($sql);
            return true;
        }

        return false;
    }

    public function getDuplicateCard($data, $id_customer)
    {
        $sql = 'SELECT * FROM ' . _DB_PREFIX_ . 'authorizedotnet_cim_payment_profile WHERE '
            . 'bill_firstname  = "' . pSQL($data['firstName']) . '" AND '
            . 'bill_lastname  = "' . pSQL($data['lastName']) . '" AND '
            . 'last4digit  = "' . pSQL($data['accountNumber']) . '" AND '
            . 'card_type  = "' . pSQL($data['cardType']) . '" AND '
            . 'id_customer = ' . (int) $id_customer;
        return Db::getInstance()->getRow($sql);
    }

    public function captureAuthorizedAmount($data)
    {
        return $this->captureAuthorizedAmountRequest($data);
    }

    public function refundTransaction($data)
    {
        $response = $this->refundTransactionRequest($data);
	      if (!$response)
        {
            $original_response = $this->getLastResponse();
            if (!empty($original_response['transactionResponse']['errors']))
            {
                $this->cleanError();
                foreach ($original_response['transactionResponse']['errors'] as $message)
                {
                    $this->error_message[] = $message['errorText'];
                    $this->error_code[] = $message['errorCode'];
                }
            }
            return $original_response;
        }
        return $response;
    }

    public function voidTransaction($data)
    {
        $response = $this->voidTransactionRequest($data);
        if (!$response)
        {
            $original_response = $this->getLastResponse();
            if (!empty($original_response['transactionResponse']['errors']))
            {
                $this->cleanError();
                foreach ($original_response['transactionResponse']['errors'] as $message)
                {
                    $this->error_message[] = $message['errorText'];
                    $this->error_code[] = $message['errorCode'];
                }
            }
            return $original_response;
        }
        return $response;
    }

    public function getProfileByCustomerId($id_customer)
    {
        $sql = 'SELECT * FROM ' . _DB_PREFIX_ . 'authorizedotnet_cim_profile WHERE id_customer = ' . (int) $id_customer;
        return Db::getInstance()->getRow($sql);
    }

    public function saveProfile($data)
    {
        $profile = $this->getProfileByCustomerId($data['id_customer']);
        if (empty($profile))
        {
            $response = $this->createCustomerProfileRequest($data);
            if (!$response && in_array('E00039', array_map('strval', $this->error_code)))
            {
                $message = '';
                if (count($this->error_message) == 1)
                {
                    $message = $this->error_message[0];
                }

                $pattern = '/A duplicate record with ID (\d+) already exists/';
                if (preg_match($pattern, $message, $groups))
                {
                    if (isset($groups[1]))
                    {
                        $response['customerProfileId'] = $groups[1];
                        $this->cleanError();
                    }
                }
            }

            if ($response)
            {
                $profile = [
                    'id_customer' => (int) $data['id_customer'],
                    'description' => pSQL($data['description']),
                    'email' => pSQL($data['email']),
                    'customer_profile_id' => (int) $response['customerProfileId']
                ];

                Db::getInstance()->insert('authorizedotnet_cim_profile', $profile);
            }
        }

        if (!empty($this->getLastError()))
        {
            return false;
        }

        $data['customer_profile_id'] = $profile['customer_profile_id'];
        if (empty($data['customer_payment_profile_id']))
        {
            $payment_profile_response = $this->createCustomerPaymentProfileRequest($data);
        }
        else
        {
            $payment_profile_response = $this->updateCustomerPaymentProfileRequest($data);
        }

        if (!$payment_profile_response && in_array('E00039', array_map('strval', $this->error_code)))
        {
            $payment_data = $this->parseDirectResponse($this->last_request_response['validationDirectResponse']);
            $duplicate_card = $this->getDuplicateCard($payment_data, $data['id_customer']);

            if (!empty($duplicate_card) && $duplicate_card['customer_payment_profile_id'] > 0)
            {
                if ($duplicate_card['is_hidden'] == 0)
                {
                    $data['is_hidden'] = 0;
                }

                $data['customer_payment_profile_id'] = $duplicate_card['customer_payment_profile_id'];

                $payment_profile_response = $this->updateCustomerPaymentProfileRequest($data);
            }
        }

        if (!$payment_profile_response)
        {
            return false;
        }

        $payment_data = $this->parseDirectResponse($payment_profile_response['validationDirectResponse']);
        $card_last_digits = Tools::substr($data['card_number'], -4);

        $payment_profile = [
            'customer_payment_profile_id' => (empty($data['customer_payment_profile_id']) ? (int) $payment_profile_response['customerPaymentProfileId'] : (int) $data['customer_payment_profile_id']),
            'id_customer' => (int) $data['id_customer'],
            'id_address' => (int) $data['id_address'],
            'customer_profile_id' => (int) $profile['customer_profile_id'],
            'title' => pSQL($payment_data['cardType']),
            'last4digit' => pSQL('XXXX' . $card_last_digits),
            'exp_date' => pSQL($data['exp_date']),
            'is_hidden' => (isset($data['is_hidden']) ? pSQL($data['is_hidden']) : 0),
            'card_type' => pSQL($payment_data['cardType']),
            'bill_firstname' => pSQL($payment_data['firstName']),
            'bill_lastname' => pSQL($payment_data['lastName']),
            'tx_id' => pSQL($payment_data['transactionID']),
        ];

        if (empty($data['customer_payment_profile_id']))
        {
            Db::getInstance()->insert('authorizedotnet_cim_payment_profile', $payment_profile);
        } else
        {
            Db::getInstance()->update('authorizedotnet_cim_payment_profile', $payment_profile, 'customer_payment_profile_id = ' . (int) $data['customer_payment_profile_id']);
        }

        return [
            'customer_profile_id' => $profile['customer_profile_id'],
            'customer_payment_profile_id' => $payment_profile['customer_payment_profile_id'],
        ];
    }

    /* API requests */

    /**
     * Use this method to capture funds reserved with a previous authOnlyTransaction transaction request.
     *
     * @param $data
     * @return false|mixed
     */
    protected function captureAuthorizedAmountRequest($data)
    {
        $request = [
            'transactionRequest' => [
                'transactionType' => 'priorAuthCaptureTransaction',
                'amount' => $data['amount'],
                'refTransId' => $data['refTransId']
            ]
        ];

        return $this->exec('createTransactionRequest', $request);
    }

    /**
     * This transaction type is used to refund a customer for a transaction that was successfully settled through the payment gateway.
     * Note that credit card information and bank account information are mutually exclusive, so you should not submit both.
     *
     * @param $data
     * @return false|mixed
     */
    protected function refundTransactionRequest($data)
    {
        $request = [
            'transactionRequest' => [
                'transactionType' => 'refundTransaction',
                'amount' => $data['amount'],
                'payment' => $data['payment'],
                'refTransId' => $data['refTransId']
            ]
        ];

        if (isset($data['payment']))
        {
            $request['transactionRequest']['payment'] = $data['payment'];
        }

        return $this->exec('createTransactionRequest', $request);
    }

    protected function voidTransactionRequest($data)
    {
        $request = [
            'transactionRequest' => [
                'transactionType' => 'voidTransaction',
                'refTransId' => $data['refTransId']
            ]
        ];
        return $this->exec('createTransactionRequest', $request);
    }

       /**
     * Use this function to create a new customer profile including any customer payment profiles and customer shipping addresses.
     *
     * @param $data
     * Required indexed:
     *  - id_customer
     *  - description
     *  - email
     *
     * @return false|mixed
     */
    protected function createCustomerProfileRequest($data)
    {
        $request = [
            'profile' => [
                'merchantCustomerId' => $data['id_customer'],
                'description' => $data['description'],
                'email' => $data['email'],
            ],
        ];

        if (!empty($data['paymentProfiles']['customerType']))
        {
            $request['profile']['paymentProfiles']['customerType'] = $data['paymentProfiles']['customerType'];
        }

        if (!empty($data['paymentProfiles']['customerType']))
        {
            $request['profile']['paymentProfiles']['payment'] = $data['paymentProfiles']['payment'];
        }

        if (!empty($request['profile']['paymentProfiles']['payment']))
        {
            $request['validationMode'] = $this->getEnv();
        }

        return $this->exec('createCustomerProfileRequest', $request);
    }

    /**
     * Use this function to delete a customer payment profile from an existing customer profile.
     *
     * @param $data
     * Required indexed:
     *  - customer_profile_id
     *  - customer_payment_profile_id
     *
     * @return false|mixed
     */
    protected function deleteCustomerPaymentProfileRequest($data)
    {
        $request = [
            'customerProfileId' => $data['customer_profile_id'],
            'customerPaymentProfileId' => $data['customer_payment_profile_id'],
        ];

        return $this->exec('deleteCustomerPaymentProfileRequest', $request);
    }

    protected function doPaymentRequest($transaction_type, $data)
    {
        $request = [
            'transactionRequest' => [
                'transactionType' => $transaction_type,
                'amount' => (string) round($data['amount'], 2),
                'payment' => (!empty($data['payment']) ? $data['payment'] : []),
                'order' => (!empty($data['order']) ? $data['order'] : []),
                'lineItems' => [],
                'tax' => [
                    'amount' => (string) round($data['tax'], 2),
                ],
                'shipping' => [
                    'amount' => (string) round($data['shipping']['amount'], 2),
                ],
                'poNumber' => (!empty($data['poNumber']) ? $data['poNumber'] : ''),
                'customer' => [
                    'id' => (!empty($data['customerProfileId']) ? $data['customerProfileId'] : '')
                ],
                'billTo' => $this->createAddressArray($data['bill'], 'bill'),
                'shipTo' => $this->createAddressArray($data['ship'], 'ship'),
                'customerIP' => (!empty($data['customerIP']) ? $data['customerIP'] : ''),
            ]
        ];

        if (isset($data['lineItems']))
        {
            $items = [
                'lineItem' => []
            ];

            foreach ($data['lineItems'] as $product)
            {
                $items['lineItem'][] = [
                    'itemId' => $product['itemId'],
                    'name' => Tools::substr($product['name'], 0, 30),
                    'description' => '',
                    'quantity' => $product['quantity'],
                    'unitPrice' => number_format($product['unitPrice'], 2, '.', ''),
                    'taxable' => 'false'
                ];
            }
            $request['transactionRequest']['lineItems'] = $items;
        }

        return $this->exec('createTransactionRequest', $request);
    }

    /**
     * Use this function to create a new customer payment profile for an existing customer profile.
     *
     * @param $data
     * Required indexed:
     *  - customer_profile_id
     *  - card_number
     *  - exp_date
     *
     * @return mixed
     */
    protected function createCustomerPaymentProfileRequest($data)
    {
        $request = [
            'customerProfileId' => $data['customer_profile_id'],
            'paymentProfile' => [
                'billTo' => $this->createAddressArray($data['bill'], 'bill'),
                'payment' => [
                    'creditCard' => [
                        'cardNumber' => $data['card_number'],
                        'expirationDate' => $data['exp_date']
                    ]
                ]
            ],
            'validationMode' => $this->getEnv()
        ];

        return $this->exec('createCustomerPaymentProfileRequest', $request);
    }

    /**
     * Use this function to update a payment profile for an existing customer profile.
     *
     * Note: If some fields in this request are not submitted or are submitted with a blank value,
     * the values in the original profile are removed. As a best practice to prevent this from happening,
     * call getCustomerPaymentProfileRequest to receive all current information including masked payment information.
     * Change the field or fields that you wish to update, and then reuse all the fields you received,
     * with updates, in a call to updateCustomerPaymentProfileRequest.
     *
     * To test the validity of new payment information,
     * call validateCustomerPaymentProfileRequest after successfully updating the payment profile.
     *
     * @param $data
     * Required indexed:
     *  - customer_profile_id
     *  - card_number
     *  - exp_date
     *  - customer_payment_profile_id
     *
     * @return mixed
     */
    public function updateCustomerPaymentProfileRequest($data)
    {
        $request = [
            'customerProfileId' => $data['customer_profile_id'],
            'paymentProfile' => [
                'billTo' => $this->createAddressArray($data['bill'], 'bill'),
                'payment' => [
                    'creditCard' => [
                        'cardNumber' => $data['card_number'],
                        'expirationDate' => $data['exp_date']
                    ]
                ],
                'defaultPaymentProfile' => false,
                'customerPaymentProfileId' => $data['customer_payment_profile_id']
            ],
            'validationMode' => $this->getEnv()
        ];

        return $this->exec('updateCustomerPaymentProfileRequest', $request);
    }

    /* Protected methods */

    protected function createAddressArray($data, $prefix)
    {
        $address_fields = [
            'firstname' => 'firstName',
            'lastname' => 'lastName',
            'company' => 'company',
            'address' => 'address',
            'city' => 'city',
            'state' => 'state',
            'zip' => 'zip',
            'country' => 'country'
        ];

        $address_array = [];

        foreach ($address_fields as $k => $v)
        {
            if (!empty($data[(empty($prefix) ? $prefix : $prefix.'_').$k]))
            {
                $address_array[$v] = $data[(empty($prefix) ? $prefix : $prefix.'_').$k];
            }
        }

        return $address_array;
    }

    protected function getURL()
    {
        return $this->env == self::ENV_LIVE ? self::ENV_LIVE_URL : self::ENV_TEST_URL;
    }

    protected function getEnv()
    {
        return $this->env;
    }

    protected function exec($action, $data)
    {
        $data = [
            $action => array_merge(
                [
                    'merchantAuthentication' => [
                        'name' => $this->auth_id,
                        'transactionKey' => $this->auth_key
                    ]
                ],
                $data
            )
        ];
        try
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $this->getURL());
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
            curl_setopt($ch, CURLOPT_ENCODING ,'UTF-8');
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 300);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $this->env == self::ENV_LIVE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, ($this->env == self::ENV_LIVE ? 2 : 0));
            curl_setopt($ch, CURLOPT_DNS_USE_GLOBAL_CACHE, false);

            $this->log_debug('Sending request', [
                'request' => $data
            ]);

            $this->cleanError();
            $this->last_request_response = [];

            $response_raw = curl_exec($ch);
            $response_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

            $this->log_debug('Received response', [
                'request' => $response_raw
            ]);

            if ($response_status != 200)
            {
                $this->log_error('Failed send request to server', [
                    'response' => $response_raw,
                    'error' => curl_error($ch). '; Code: '. curl_errno($ch)
                ]);

                $this->error_message[] = 'Failed send request to server. Error: '.curl_error($ch). '; Code: '. curl_errno($ch);
                $this->error_code[] = $response_status;
                curl_close($ch);

                return false;
            }

            curl_close($ch);

            $response_raw = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $response_raw);
            if (!$response = json_decode($response_raw, true))
            {
                $this->log_error('Failed decode response', [
                    'response' => $response_raw
                ]);

                $this->error_message[] = 'Failed decode response';
                $this->error_code[] = 500;

                return false;
            }
        }
        catch (Exception $e)
        {
            $this->log_error('Exception', [
                'request' => $data,
                'message' => $e->getMessage()
            ]);

            $this->error_message[] = $e->getMessage();
            $this->error_code[] = $e->getCode();

            return false;
        }

        $this->log_debug('Successfully received request form server', [
            'response_formatted' => $response
        ]);

        if (!isset($response['messages']['resultCode']) || $response['messages']['resultCode'] !== 'Ok')
        {
            $this->log_warning('Request received with error message',[
                'request' => $data,
                'response' => $response
            ]);

            foreach ($response['messages']['message'] as $message)
            {
                $this->error_message[] = $message['text'];
                $this->error_code[] = $message['code'];
                $this->last_request_response = $response;
            }

            return false;
        }

        return $response;
    }

    protected function parseDirectResponse($response_raw)
    {
        $response_data = explode(',', $response_raw);

        return [
            'responseCode' => $response_data[1],
            'responseReasonCode' => $response_data[2],
            'responseReasonText' => $response_data[3],
            'authorizationCode' => $response_data[4],
            'AVSResponse' => $response_data[5],
            'transactionID' => $response_data[6],
            'invoiceNumber' => $response_data[7],
            'description' => $response_data[8],
            'amount' => $response_data[9],
            'method' => $response_data[10],
            'transactionType' => $response_data[11],
            'firstName' => $response_data[13],
            'lastName' => $response_data[14],
            // TODO: Check if new API return correct data
            'accountNumber' => ($this->env == self::ENV_LIVE ? $response_data[51] : $response_data[50]),
            'cardType' => ($this->env == self::ENV_LIVE ? $response_data[52] : $response_data[51]),
        ];
    }

    /* Logging functionality */

    protected function log_debug($message = null, $context = null)
    {
        $this->log(self::LOG_DEBUG, $message, $context);
    }

    protected function log_info($message = null, $context = null)
    {
        $this->log(self::LOG_INFO, $message, $context);
    }

    protected function log_warning($message = null, $context = null)
    {
        $this->log(self::LOG_WARNING, $message, $context);
    }

    protected function log_error($message = null, $context = null)
    {
        $this->log(self::LOG_ERROR, $message, $context);
    }

    protected function log($level, $message = null, $context = null)
    {
        if ($level < $this->log_level)
        {
            return;
        }

        if (!$this->log_initialized)
        {
            if (!file_exists($this->log_dir) && !mkdir($this->log_dir, 0755, true) && !is_dir($this->log_dir))
            {
                throw new RuntimeException('Could not create directory to store logs. Check permissions and log path.');
            }

            $this->log_name = 'authorizeddotnet_api_'.date('Y-m-d');
            $this->log_handler = fopen($this->log_dir.$this->log_name, 'a');
            if (!$this->log_handler)
            {
                throw new RuntimeException('Could not create log file. Check permissions.');
            }

            $this->log_initialized = true;
        }

        $line = date('H:i:s');
        $line .= !is_null($message) ? ' '.$message : '';
        $line .= !is_null($context) ? ' '.json_encode((array) $context) : '';
        $line .= PHP_EOL;

        if (!fwrite($this->log_handler, $line))
        {
            throw new RuntimeException('Can\'t write to file. Check permissions of file.');
        }

        fflush($this->log_handler);
    }

    public function __destruct()
    {
        if ($this->log_handler)
        {
            fclose($this->log_handler);
        }
    }
}