<?php
/**
 * 2008 - 2020 Presto-Changeo
 *
 * MODULE Authorize.net (API / DPM)
 *
 * @author    Presto-Changeo <info@presto-changeo.com>
 * @copyright Copyright (c) permanent, Presto-Changeo
 * @license   Addons PrestaShop license limitation
 * @version   2.0.3
 * @link      http://www.presto-changeo.com
 *
 * NOTICE OF LICENSE
 *
 * Don't use this module on several shops. The license provided by PrestaShop Addons
 * for all its modules is valid only once for a single shop.
 */

/* SSL Management */
$useSSL = true;

include(dirname(__FILE__) . '/../../config/config.inc.php');
include(dirname(__FILE__) . '/../../init.php');
include(dirname(__FILE__) . '/authorizedotnet.php');

$orderId = Tools::getValue('orderId');
$adminOrder = Tools::getValue('adminOrder');
$trxId = Tools::getValue('trxId');
$card = Tools::getValue('card');
$auth_code = Tools::getValue('auth_code');
$amt = (float) (Tools::getValue('amt'));
$type = (int) (Tools::getValue('type'));
$id_employee = (int) (Tools::getValue('id_employee'));
$adn_capture_status = (int) (Tools::getValue('adn_capture_status'));
$adn_refund_status = (int) (Tools::getValue('adn_refund_status'));
$adn = new AuthorizeDotNet();
$order = new Order($orderId);

$secure_key = Tools::getValue('secure_key');

if (trim($secure_key) != $adn->_adn_secure_key) {
    $html = '
        <div class="columns">
            <div class="left_column">
            </div>
            <div class="right_column">
				' . $adn->l('Your transaction was not processed - Authentication Error') . '
			</div>
		</div>
		';

    die($html);
}

$html = '
	<table cellspacing="10" width="100%">
    <tr> ' . ( $adminOrder != 1 ? '<td align="left" width="155px" style="font-weight:bold;font-size:12px" nowrap>
        	&nbsp;
		</td>' : '');

if ($type == 1) /* Do Capture */
{
    if ($trxId != '' && $card != '' && $auth_code != '')
    {
        $auth_api = new AuthorizedotnetAPI($adn);
        $response =  $auth_api->captureAuthorizedAmount([
            'amount' => $amt,
            'refTransId' => $trxId
        ]);

        if (!$response)
        {
            $html .= '<td align="left" style="font-weight:bold;font-size:12px;color:Red;" nowrap>'.$adn->l('The transaction Capture failed.').' | '.$auth_api->getLastError().'</td>';
        }
        else
        {
            Db::getInstance()->Execute('UPDATE `'._DB_PREFIX_.'authorizedotnet_refunds` SET captured = 1 WHERE `id_order` = '.(int) $orderId);

            $html .= '<td align="left" style="font-weight:bold;font-size:12px;color:Green;" nowrap>'.$adn->l('The transaction Capture was successful.').'</td>';

            $message = new Message();
            $message->message = $adn->l('Transaction Capture of').' $'.$amt;
            $message->id_customer = $order->id_customer;
            $message->id_order = $order->id;
            $message->private = 1;
            $message->id_employee = $id_employee;
            $message->id_cart = $order->id_cart;
            $message->add();

            if ($adn_capture_status != 0)
            {
                $history = new OrderHistory();
                $history->id_order = $orderId;
                $history->changeIdOrderState($adn_capture_status, (int) ($orderId));
                $history->id_employee = $id_employee;

                $carrier = new Carrier((int) $order->id_carrier, (int) $order->id_lang);
                $templateVars = array('{followup}' => ($history->id_order_state == _PS_OS_SHIPPING_ && $order->shipping_number) ? str_replace('@', $order->shipping_number, $carrier->url) : '');
                $history->addWithemail(true, $templateVars);
                Configuration::updateValue('ADN_CAPTURE_STATUS', $adn_capture_status);
            }
        }
    }
}
else if ($type == 2) /* Do Refund */
{
    if ($trxId != '' && $card != '')
    {
        $auth_api = new AuthorizedotnetAPI($adn);

        $payment_profile = $auth_api->getCustomerPaymentProfileByCard($card, $order->id_customer);
        if (empty($payment_profile))
        {
            $html .= '<td align="left" style="font-weight:bold;font-size:12px;color:Red;" nowrap>'.$adn->l('Payment not found.').'</td>';
        }
        else
        {
            $response =  $auth_api->refundTransaction([
                'amount' => $amt,
                'refTransId' => $trxId,
                'payment' => [
                    'creditCard' => [
                        'cardNumber' => $card,
                        'expirationDate' => $payment_profile['exp_date']
                    ]
                ]
            ]);

            if (!$response)
            {
                $html .= '<td align="left" style="font-weight:bold;font-size:12px;color:Red;" nowrap>'.$adn->l('Refund failed.').' | '.$auth_api->getLastError().'</td>';
            }
            else
            {
	$myFile = dirname(__FILE__)."/1import_log.txt";
	$fh = fopen($myFile, 'a') or die("can't open file");
	fwrite($fh, "response = ".print_r($response,true)."\n\r");
	fclose($fh);
	
                if ($response['transactionResponse']['responseCode'] == 1)
                {
                    Db::getInstance()->Execute('INSERT INTO `' . _DB_PREFIX_ . "authorizedotnet_refund_history` (id_order, `amount`, `details`, `date`) VALUES('".(int)$orderId."','".$amt."','".pSQL('Credit - ID: ' . $response['transactionResponse']['transId']) . "',NOW())");
                    $html .= '<td align="left" style="font-weight:bold;font-size:12px;color:Green;" nowrap>';

                    $html .= $adn->l('The transaction "Credit" was successful.') . ' (Transaction ID :' . Tools::safeOutput($response['transactionResponse']['transId']) . ')';
                    $message = new Message();
                    if ($response['transactionResponse']['responseCode'] == 1)
                      $message->message = $adn->l('Transaction "Credit" of').' $'.$amt.' (Transaction ID :'.Tools::safeOutput($response['transactionResponse']['transId']).')';

                    $message->id_customer = $order->id_customer;
                    $message->id_order = $order->id;
                    $message->private = 1;
                    $message->id_employee = $id_employee;
                    $message->id_cart = $order->id_cart;
                    $message->add();

                    if ($adn_refund_status != 0)
                    {
                        $history = new OrderHistory();
                        $history->id_order = $orderId;
                        $history->changeIdOrderState($adn_refund_status, (int) $orderId);
                        $history->id_employee = $id_employee;
                        $carrier = new Carrier((int) $order->id_carrier, (int) $order->id_lang);
                        $templateVars = array('{followup}' => ($history->id_order_state == _PS_OS_SHIPPING_ && $order->shipping_number) ? str_replace('@', $order->shipping_number, $carrier->url) : '');
                        $history->addWithemail(true, $templateVars);
                        Configuration::updateValue('ADN_REFUND_STATUS', $adn_refund_status);
                    }
                }
                else
                {
                    $messages = [];
                    $void = false;
                    foreach ($response['transactionResponse']['errors'] as $message)
                    {
                        $messages[] = $message['errorCode'].' '.$message['errorText'];
                        if ($message['errorCode'] == 54)
                          $void = true;
                    }
                    if ($void)
                    {
                      $response =  $auth_api->voidTransaction([
                          'refTransId' => $trxId,
                      ]);

                      if (!$response)
                      {
                        $html .= '<td align="left" style="font-weight:bold;font-size:12px;color:Red;" nowrap>'.$adn->l('Refund failed.').' | '.$auth_api->getLastError().'</td>';
                      }
                      else
                      {
                        if ($response['transactionResponse']['responseCode'] == 1)
                        {
                          Db::getInstance()->Execute('INSERT INTO `' . _DB_PREFIX_ . "authorizedotnet_refund_history` (id_order, `amount`, `details`, `date`) VALUES('".(int)$orderId."','".$amt."','".pSQL('Void - ID: ' . $response['transactionResponse']['transId']) . "',NOW())");
                          $html .= '<td align="left" style="font-weight:bold;font-size:12px;color:Green;" nowrap>';
                          $html .= $adn->l('The transaction "Void" was successful.') . ' (Transaction ID :' . Tools::safeOutput($response['transactionResponse']['transId']) . ')';
                          $message = new Message();
                          if ($response['transactionResponse']['responseCode'] == 1)
                            $message->message = $adn->l('Transaction "Void" of').' $'.$amt.' (Transaction ID :'.Tools::safeOutput($response['transactionResponse']['transId']).')';
                          $message->id_customer = $order->id_customer;
                          $message->id_order = $order->id;
                          $message->private = 1;
                          $message->id_employee = $id_employee;
                          $message->id_cart = $order->id_cart;
                          $message->add();
                          if ($adn_refund_status != 0)
                          {
                              $history = new OrderHistory();
                              $history->id_order = $orderId;
                              $history->changeIdOrderState($adn_refund_status, (int) $orderId);
                              $history->id_employee = $id_employee;
                              $carrier = new Carrier((int) $order->id_carrier, (int) $order->id_lang);
                              $templateVars = array('{followup}' => ($history->id_order_state == _PS_OS_SHIPPING_ && $order->shipping_number) ? str_replace('@', $order->shipping_number, $carrier->url) : '');
                              $history->addWithemail(true, $templateVars);
                              Configuration::updateValue('ADN_REFUND_STATUS', $adn_refund_status);
                          }
                        }
                        else
                        {
                          $messages = [];
                          foreach ($response['transactionResponse']['messages'] as $message)
                              $messages[] = $message['code'].' '.$message['description'];
                          $messages = implode('<br>', $messages);
                          $html .= '<td align="left" style="font-weight:bold;font-size:12px;color:Red;" nowrap>'.$adn->l('Refund failed.').' | '.$messages.'</td>';
                        }
                      }
                    }
                    else
                    {
                      $messages = implode('<br>', $messages);
                      $html .= '<td align="left" style="font-weight:bold;font-size:12px;color:Red;" nowrap>'.$adn->l('Refund failed.').' | '.$messages.'</td>';
                    }
                }
            }
        }
    }
}

$html .= '
		</td>
	</tr>
	</table>';

die($html);
