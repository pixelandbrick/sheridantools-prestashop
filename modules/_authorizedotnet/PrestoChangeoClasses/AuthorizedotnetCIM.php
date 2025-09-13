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

class AuthorizedotnetCIM
{

    protected $mode;
    public $rawMode;
    protected $loginname;
    protected $transactionkey;
    protected $delimiterDirectResponse = ',';
    protected $_errors = array();
    protected $_returnData = array();

    const API_HOST_TEST = 'apitest.authorize.net';
    const API_HOST_LIVE = 'api2.authorize.net';
    const API_PATH = '/xml/v1/request.api';

    protected $billToFields = array(
        'firstname' => 'firstName',
        'lastname' => 'lastName',
        'company' => 'company',
        'address' => 'address',
        'city' => 'city',
        'state' => 'state',
        'zip' => 'zip',
        'country' => 'country',
        'phoneNumber' => 'phoneNumber'
    );

    public function __construct($loginname, $transactionkey, $mode)
    {
        $this->loginname = $loginname;
        $this->transactionkey = $transactionkey;
        $this->mode = $mode == 2 ? 'test' : 'live';
        $this->rawMode = $mode;
    }

    public function getErrors()
    {
        return $this->_errors;
    }

    public function getReturnData()
    {
        return $this->_returnData;
    }

    public function getCustomerShippingAddressRequest($data)
    {
        /* $xml = '<?xml version="1.0" encoding="utf-8"?>'.
          '<getCustomerShippingAddressRequest xmlns="AnetApi/xml/v1/schema/AnetApiSchema.xsd">'.
          $this->merchantAuthenticationBlock().
          '<customerProfileId>'.$data['customerProfileId'].'</customerProfileId>'.
          '<customerAddressId>'.$data['customerShippingAddressId'].'</customerAddressId>'.
          //"<validationMode>".$this->getModeName()."</validationMode>".
          '</getCustomerShippingAddressRequest>';

          $response = $this->sendXmlRequest($xml);

          if ($response->messages->resultCode == 'Ok')
          $responseA['refId'] = (int)$response->refId;
          else
          $responseA['refId'] = null;
          //var_dump($xml, $response); */

        $sql = 'SELECT * FROM ' . _DB_PREFIX_ . 'authorizedotnet_cim_address WHERE id_address  = ' . (int) $data['id_address'] . ' AND customer_profile_id = ' . (int) ($data['customerProfileId']);
        $resp = Db::getInstance()->getRow($sql);
        $responseA = array();
        if (isset($resp) && !empty($resp)) {
            $responseA['refId'] = (int) $resp['id_address_adn'];
        } else {
            $responseA['refId'] = null;
        }
        return $responseA;
    }

    public function createCustomerShippingAddressRequest($data)
    {
        $xml = '<?xml version="1.0" encoding="utf-8"?>
            <createCustomerShippingAddressRequest xmlns="AnetApi/xml/v1/schema/AnetApiSchema.xsd">
                    ' . $this->merchantAuthenticationBlock() . '
                    <customerProfileId>' . $data['customerProfileId'] . '</customerProfileId>
                    <address>
                            <firstName>' . $data['firstName'] . '</firstName>
                            <lastName>' . $data['lastName'] . '</lastName>
                            <company>' . $data['company'] . '</company>
                            <address>' . $data['address'] . '</address>
                            <city>' . $data['city'] . '</city>
                            <state>' . $data['state'] . '</state>
                            <zip>' . $data['zip'] . '</zip>
                            <country>' . $data['country'] . '</country>
                            <phoneNumber>' . $data['phoneNumber'] . '</phoneNumber>
                            <faxNumber></faxNumber>
                    </address>
            </createCustomerShippingAddressRequest>';

        $response = $this->sendXmlRequest($xml);

        $response = $this->parseApiResponse($response);
        //var_dump($xml, $response);
        //print_r($response);
        if ($response->messages->resultCode == 'Ok') {
            $valsProfile = array(
                'id_address' => (int) $data['id_address_delivery'],
                'id_address_adn' => pSQL($response->customerAddressId),
                'customer_profile_id' => pSQL($data['customerProfileId'])
            );
            //print_r($valsProfile);
            Db::getInstance()->insert('authorizedotnet_cim_address', $valsProfile);

            return $response->customerAddressId;
        } else {
            return null;
        }
    }

    public function createProfile($data)
    {
        $xml = '<?xml version="1.0" encoding="utf-8"?>' .
            '<createCustomerProfileRequest xmlns="AnetApi/xml/v1/schema/AnetApiSchema.xsd">' .
            $this->merchantAuthenticationBlock() .
            '<profile>' .
            '<merchantCustomerId>' . $data['id_customer'] . '</merchantCustomerId>' .
            '<description>' . $data['description'] . '</description>' .
            '<email>' . $data['email'] . '</email>' .
            '</profile>' .
            //"<validationMode>".$this->getModeName()."</validationMode>".
            '</createCustomerProfileRequest>';

        $response = $this->sendXmlRequest($xml);

        //var_dump($xml, $response);

        return $this->parseApiResponse($response);
    }

    public function createBillToXML($data)
    {
        $billToRet = '';
        foreach ($this->billToFields as $k => $v) {
            if (!empty($data['bill_' . $k])) {
                $billToRet .= '<' . $v . '>' . $data['bill_' . $k] . '</' . $v . '>';
            }
        }

        return $billToRet;
    }

    public function createPaymentProfile($data)
    {
        $xml = '<?xml version="1.0" encoding="utf-8"?>' .
            '<createCustomerPaymentProfileRequest xmlns="AnetApi/xml/v1/schema/AnetApiSchema.xsd">' .
            $this->merchantAuthenticationBlock() .
            '<customerProfileId>' . $data['customer_profile_id'] . '</customerProfileId>' .
            '<paymentProfile>' .
            '<billTo>' .
            $this->createBillToXML($data) .
            '</billTo>' .
            '<payment>' .
            '<creditCard>' .
            '<cardNumber>' . $data['card_number'] . '</cardNumber>' .
            '<expirationDate>' . $data['exp_date'] . '</expirationDate>' .
            '</creditCard>' .
            '</payment>' .
            '</paymentProfile>' .
            '<validationMode>' . $this->getModeName() . '</validationMode>' .
            '</createCustomerPaymentProfileRequest>';

        $response = $this->sendXmlRequest($xml);

        return $this->parseApiResponse($response);
    }

    public function updatePaymentProfile($data)
    {
        $xml = '<?xml version="1.0" encoding="utf-8"?>' .
            '<updateCustomerPaymentProfileRequest xmlns="AnetApi/xml/v1/schema/AnetApiSchema.xsd">' .
            $this->merchantAuthenticationBlock() .
            '<customerProfileId>' . $data['customer_profile_id'] . '</customerProfileId>' .
            '<paymentProfile>' .
            '<billTo>' .
            $this->createBillToXML($data) .
            '</billTo>' .
            '<payment>' .
            '<creditCard>' .
            '<cardNumber>' . $data['card_number'] . '</cardNumber>' .
            '<expirationDate>' . $data['exp_date'] . '</expirationDate>' .
            '</creditCard>' .
            '</payment>' .
            '<customerPaymentProfileId>' . $data['customer_payment_profile_id'] . '</customerPaymentProfileId>' .
            '</paymentProfile>' .
            '<validationMode>' . $this->getModeName() . '</validationMode>' .
            '</updateCustomerPaymentProfileRequest>';

        $response = $this->sendXmlRequest($xml);

        return $this->parseApiResponse($response);
    }

    public function doPayment($data)
    {
        $xml = '<?xml version="1.0" encoding="utf-8"?>' .
            '<createCustomerProfileTransactionRequest xmlns="AnetApi/xml/v1/schema/AnetApiSchema.xsd">' .
            $this->merchantAuthenticationBlock() .
            '<transaction>' .
            ($data['trx_type'] == 'AUTH_ONLY' ? '<profileTransAuthOnly>' : '<profileTransAuthCapture>') .
            '<amount>' . $data['amount'] . '</amount>' .
            '<tax>' .
            '<amount>' . $data['tax'] . '</amount>' .
            '</tax>' .
            '<shipping>' .
            '<amount>' . $data['shipping']['amount'] . '</amount>' .
            // "<name>Free Shipping</name>".
            // "<description>Free UPS Ground shipping. Ships in 5-10 days.</description>".
            '</shipping>';

        foreach ($data['lineItems'] as $p) {
            $xml .= '<lineItems>' .
                '<itemId>' . $p['itemId'] . '</itemId>' .
                '<name>' . Tools::substr(urlencode($p['name']), 0, 30) . '</name>' .
                // "<description>".$p['description']."</description>".
                '<quantity>' . $p['quantity'] . '</quantity>' .
                '<unitPrice>' . $p['unitPrice'] . '</unitPrice>' .
                '<taxable>false</taxable>' .
                '</lineItems>';
        };
        $xml .= '<customerProfileId>' . $data['customerProfileId'] . '</customerProfileId>' .
            '<customerPaymentProfileId>' . $data['customerPaymentProfileId'] . '</customerPaymentProfileId>' .
            '' . (isset($data['shippingId']) && !empty($data['shippingId']) ? '<customerShippingAddressId>' . $data['shippingId'] . '</customerShippingAddressId>' : '' ) . '' .
            // "<customerShippingAddressId>" . $_POST["customerShippingAddressId"] . "</customerShippingAddressId>".
            //"<solution><id>AAA100302</id></solution>".
            '<order>' .
            ((!empty($data['cartId'])) ? '<invoiceNumber>Cart #' . $data['cartId'] . '</invoiceNumber>' : '') .
            ((!empty($data['orderId'])) ? '<invoiceNumber>Order #' . $data['orderId'] . '</invoiceNumber>' : '') .
            '</order>' .
            ($data['trx_type'] == 'AUTH_ONLY' ? '</profileTransAuthOnly>' : '</profileTransAuthCapture>') .
            '</transaction>' .
            //"<validationMode>".$this->getModeName()."</validationMode>".
            '<extraOptions><![CDATA[x_solution_id=AAA100831]]></extraOptions>' .
            '</createCustomerProfileTransactionRequest>';

        $response = $this->sendXmlRequest($xml);

        /* $f = fopen(dirname(__FILE__) . '/../log.txt', 'a+');
          fwrite($f,"\n\n" . '$xml = ' . $xml . "\n\n" . '$response = ' . $response);
          fclose($f); */

        $orderReference = '';
        $respNew = array('order_reference' => $orderReference,
            'post_response' => $this->parseApiResponse($response));
        return $respNew;

        //return $this->parseApiResponse($response);
    }

    public function deleteCustomerPaymentProfileRequest($data)
    {
        $xml = '<?xml version="1.0" encoding="utf-8"?>' .
            '<deleteCustomerPaymentProfileRequest xmlns="AnetApi/xml/v1/schema/AnetApiSchema.xsd">' .
            $this->merchantAuthenticationBlock() .
            '<customerProfileId>' . $data['customer_profile_id'] . '</customerProfileId>' .
            '<customerPaymentProfileId>' . $data['customer_payment_profile_id'] . '</customerPaymentProfileId>' .
            '</deleteCustomerPaymentProfileRequest>';

        $response = $this->sendXmlRequest($xml);

        return $this->parseApiResponse($response);
    }

    public function getCustomerPaymentProfileByCard($last4, $id_customer)
    {
        $sql = 'SELECT * FROM ' . _DB_PREFIX_ . 'authorizedotnet_cim_payment_profile WHERE id_customer = ' . (int) $id_customer . ' AND last4digit LIKE "%' . pSQL($last4) . '"';
        return Db::getInstance()->getRow($sql);
    }

    public function getProfileByCustomerId($id_customer)
    {
        $sql = 'SELECT * FROM ' . _DB_PREFIX_ . 'authorizedotnet_cim_profile WHERE id_customer = ' . (int) $id_customer;
        return Db::getInstance()->getRow($sql);
    }

    public function getPaymentProfileById($payment_profile_id, $id_customer)
    {
        $sql = 'SELECT * FROM ' . _DB_PREFIX_ . 'authorizedotnet_cim_payment_profile WHERE customer_payment_profile_id  = ' . (int) $payment_profile_id . ' AND id_customer = ' . (int) $id_customer;
        return Db::getInstance()->getRow($sql);
    }

    public function deleteCustomerPaymentProfile($payment_profile_id, $id_customer)
    {
        $sql = 'SELECT * FROM ' . _DB_PREFIX_ . 'authorizedotnet_cim_payment_profile WHERE customer_payment_profile_id  = ' . (int) $payment_profile_id . ' AND id_customer = ' . (int) $id_customer;
        $data = Db::getInstance()->getRow($sql);

        $parsedDeleteResponse = $this->deleteCustomerPaymentProfileRequest($data);

        if ($parsedDeleteResponse->messages->resultCode == 'Ok') {
            $sql = 'DELETE FROM ' . _DB_PREFIX_ . 'authorizedotnet_cim_payment_profile WHERE customer_payment_profile_id  = ' . (int) $payment_profile_id . ' AND id_customer = ' . (int) $id_customer;
            Db::getInstance()->Execute($sql);

            return true;
        }
    }

    public function getDuplicateCard($vals, $id_customer)
    {
        $sql = 'SELECT * FROM ' . _DB_PREFIX_ . 'authorizedotnet_cim_payment_profile WHERE '
            . 'bill_firstname  = \'' . pSQL($vals['firstName']) . '\' AND '
            . 'bill_lastname  = \'' . pSQL($vals['lastName']) . '\' AND '
            . 'last4digit  = \'' . pSQL($vals['accountNumber']) . '\' AND '
            . 'card_type  = \'' . pSQL($vals['cardType']) . '\' AND '
            . 'id_customer = ' . (int) $id_customer;
        return Db::getInstance()->getRow($sql);
    }

    public function saveProfile($data)
    {
        $this->_errors = array();

        $valsProfile = $this->getProfileByCustomerId($data['id_customer']);

        if (!$valsProfile) {
            $parsedProfileResponse = $this->createProfile($data);

            // If request was successful save it to DB
            if ($parsedProfileResponse->messages->resultCode == 'Ok') {
                $valsProfile = array(
                    'id_customer' => (int) $data['id_customer'],
                    'description' => pSQL($data['description']),
                    'email' => pSQL($data['email']),
                    'customer_profile_id' => (int) $parsedProfileResponse->customerProfileId
                );
                $ret = Db::getInstance()->insert('authorizedotnet_cim_profile', $valsProfile);
            } else {
                $this->_errors[] = $parsedProfileResponse->messages->message->code . ' ' . $parsedProfileResponse->messages->message->text;
            }
        }

        if (!count($this->_errors)) {
            $data['customer_profile_id'] = $valsProfile['customer_profile_id'];

            if (empty($data['customer_payment_profile_id'])) {
                $parsedPaymentProfileResponse = $this->createPaymentProfile($data);
            } else {
                $parsedPaymentProfileResponse = $this->updatePaymentProfile($data);
            }
            if ($parsedPaymentProfileResponse->messages->resultCode == 'Error' && $parsedPaymentProfileResponse->messages->message->code == 'E00039') {
                $duplicateData = $this->parceDirectResponse($parsedPaymentProfileResponse->validationDirectResponse, $this->getModeName());
                $duplicateCard = $this->getDuplicateCard($duplicateData, $data['id_customer']);

                if (!empty($duplicateCard) && $duplicateCard['customer_payment_profile_id'] > 0) {
                    if ($duplicateCard['is_hidden'] == 0) {
                        $data['is_hidden'] = 0;
                    }

                    $data['customer_payment_profile_id'] = $duplicateCard['customer_payment_profile_id'];
                    $parsedPaymentProfileResponse = $this->updatePaymentProfile($data);
                }
            }

            if ($parsedPaymentProfileResponse->messages->resultCode == 'Ok') {
                $arrParsedPaymentProfileResponse = self::parceDirectResponse($parsedPaymentProfileResponse->validationDirectResponse, $this->getModeName());

                $cardLast4Digit = Tools::substr($data['card_number'], -4);

                $valsPaymentProfile = array(
                    'customer_payment_profile_id' =>
                    empty($data['customer_payment_profile_id']) ? (int) $parsedPaymentProfileResponse->customerPaymentProfileId : (int) $data['customer_payment_profile_id'],
                    'id_customer' => (int) $data['id_customer'],
                    'id_address' => (int) $data['id_address'],
                    'customer_profile_id' => (int) $valsProfile['customer_profile_id'],
                    'title' => pSQL($arrParsedPaymentProfileResponse['cardType']), //$data['title'],
                    'last4digit' => pSQL('XXXX' . $cardLast4Digit), //$arrParsedPaymentProfileResponse['accountNumber'],
                    'exp_date' => pSQL($data['exp_date']),
                    'is_hidden' => pSQL($data['is_hidden']),
                    'card_type' => pSQL($arrParsedPaymentProfileResponse['cardType']),
                    'bill_firstname' => pSQL($arrParsedPaymentProfileResponse['firstName']),
                    'bill_lastname' => pSQL($arrParsedPaymentProfileResponse['lastName']),
                    'tx_id' => pSQL($arrParsedPaymentProfileResponse['transactionID']),
                );

                if (empty($data['customer_payment_profile_id'])) {
                    $ret = Db::getInstance()->insert('authorizedotnet_cim_payment_profile', $valsPaymentProfile);
                } else {
                    $ret = Db::getInstance()->update('authorizedotnet_cim_payment_profile', $valsPaymentProfile, 'customer_payment_profile_id = ' . (int) $data['customer_payment_profile_id']);
                }
            } else {
                $this->_errors[] = $parsedPaymentProfileResponse->messages->message->code . ' ' . $parsedPaymentProfileResponse->messages->message->text;
            }
        }


        if (count($this->_errors)) {
            return false;
        } else {
            $this->_returnData['customer_profile_id'] = $valsProfile['customer_profile_id'];
            $this->_returnData['customer_payment_profile_id'] = $valsPaymentProfile['customer_payment_profile_id'];

            return true;
        }
    }

    public function getCardsListByCustomerId($id_customer)
    {
        $sql = 'SELECT * FROM ' . _DB_PREFIX_ . 'authorizedotnet_cim_payment_profile WHERE id_customer = ' . (int) $id_customer . ' AND is_hidden = 0';
        return Db::getInstance()->executeS($sql);
    }

    public static function parceDirectResponse($responseA, $mode)
    {
        $response = explode(',', $responseA);

        $response['responseCode'] = $response[0];
        $response['responseCode'] = $response[1];
        $response['responseReasonCode'] = $response[2];
        $response['responseReasonText'] = $response[3];
        $response['authorizationCode'] = $response[4];
        $response['AVSResponse'] = $response[5];
        $response['transactionID'] = $response[6];
        $response['invoiceNumber'] = $response[7];
        $response['description'] = $response[8];
        $response['amount'] = $response[9];
        $response['method'] = $response[10];
        $response['transactionType'] = $response[11];

        $response['firstName'] = $response[13];
        $response['lastName'] = $response[14];
        $response['accountNumber'] = $response[51];
        $response['cardType'] = $response[52];

        if ($mode == 'testMode') {
            $response['accountNumber'] = $response[50];
            $response['cardType'] = $response[51];
        } else {
            $response['accountNumber'] = $response[51];
            $response['cardType'] = $response[52];
        }

        return $response;
    }

    public function getAPIHost()
    {
        return $this->mode == 'live' ? self::API_HOST_LIVE : self::API_HOST_TEST;
    }

    public function getModeName()
    {
        return $this->rawMode == 0 ? 'liveMode' : 'testMode';
    }

    public function sendXmlRequest($xml)
    {
        return $this->sendRequestViaFsockopen($this->getAPIHost(), self::API_PATH, $xml);
    }

    public function sendRequestViaFsockopen($host, $path, $content)
    {
        $out = '';
        $posturl = 'ssl://' . $host;
        $header = "Host: $host\r\n";
        $header .= "User-Agent: PHP Script\r\n";
        $header .= "Content-Type: text/xml\r\n";
        $header .= 'Content-Length: ' . Tools::strlen($content) . "\r\n";
        $header .= "Connection: close\r\n\r\n";
        $fp = fsockopen($posturl, 443, $errno, $errstr, 30);
        if (!$fp) {
            $body = false;
        } else {
            error_reporting(E_ERROR);
            fputs($fp, "POST $path  HTTP/1.1\r\n");
            fputs($fp, $header . $content);
            fwrite($fp, $out);
            $response = '';
            while (!feof($fp)) {
                $response = $response . fgets($fp, 128);
            }
            fclose($fp);
            error_reporting(E_ALL ^ E_NOTICE);

            $len = Tools::strlen($response);
            $bodypos = strpos($response, "\r\n\r\n");
            if ($bodypos <= 0) {
                $bodypos = strpos($response, "\n\n");
            }
            while ($bodypos < $len && $response[$bodypos] != '<') {
                $bodypos++;
            }

            $body = substr($response, $bodypos); /* Tools::substr does not work properly */
        }
        return $body;
    }

    public function sendRequestViaCurl($host, $path, $content)
    {
        $posturl = 'https://' . $host . $path;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $posturl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $response = curl_exec($ch);
        return $response;
    }

    public function parseApiResponse($content)
    {
        $parsedresponse = simplexml_load_string($content, 'SimpleXMLElement', LIBXML_NOWARNING);
        return $parsedresponse;
    }

    public function merchantAuthenticationBlock()
    {
        return '<merchantAuthentication>' .
            '<name>' . $this->loginname . '</name>' .
            '<transactionKey>' . $this->transactionkey . '</transactionKey>' .
            '</merchantAuthentication>';
    }
}
