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

/* SSL Management */
$useSSL = true;

include(dirname(__FILE__) . '/../../config/config.inc.php');
include(dirname(__FILE__) . '/../../init.php');
include(dirname(__FILE__) . '/authorizedotnet.php');

$id_shop = (int) Tools::getValue('id_shop');

$orderId = Tools::getValue('orderId');
$adminOrder = Tools::getValue('adminOrder');
$type = (int) (Tools::getValue('type'));
$secure_key = Tools::getValue('secure_key');
$id_employee = (int) (Tools::getValue('id_employee'));
$adn = new AuthorizeDotNet();
$order = new Order((int) ($orderId));
$id = $order->id;
$date = $order->date_add;
$total = Tools::ps_round($order->total_paid, 2);
$id_lang = (int) (Tools::getValue('id_lang'));
$states = OrderState::getOrderStates((int) ($id_lang));

if ($secure_key != $adn->_adn_secure_key) {
    $html = '
        <div class="columns">
            <div class="left_column">
            </div>
            <div class="right_column">
				' . $adn->l('Your transaction was not processed - Authentication Error') . '
			</div>
		</div>
		';
} else {
    $result = Db::getInstance()->ExecuteS('SELECT * FROM ' . _DB_PREFIX_ . 'authorizedotnet_refunds WHERE id_order=' . (int) $orderId);
    if (is_array($result) && count($result) == 1) {
        $trxId = $result[0]['id_trans'];
        $card = $result[0]['card'];
        $auth_code = $result[0]['auth_code'];
        $captured = $result[0]['captured'];
    } else {
        $trxId = '';
        $card = '';
        $auth_code = '';
        $captured = '';
    }

    if (($type == 1 && ($trxId == '' || $card == '' || $auth_code == '')) || ($type == 2 && ($trxId == '' || $card == ''))) {
        $html = '
            <div class="columns">
                <div class="left_column">
                </div>
                <div class="right_column">
                    ' . $adn->l('This order was not processed using Authorize.net.') . '
                </div>
            </div>
        ';
    } else if ($type == 1 && $captured == 1) {
        $html = '
            <div class="columns">
                <div class="left_column">
                </div>
                <div class="right_column">
                    ' . $adn->l('A capture transaction was already processed for this order.') . '
                </div>
            </div>
        ';
    } else if ($id == $orderId) {
        $html = '
			<script type="text/javascript">
    		function ajax_call(type) {
	        	var orderId = "";
				var decimal_char =  ".";
				if (type == 1)
				{
					var amt = $("#adn_capture_amt").val();
					if ((amt == "") || (!$("#adn_capture_amt").val().match(/^\d+(?:\.\d+)?$/)))
					{
						alert("' . $adn->l('Please enter a valid capture amount') . '");
						$("#adn_capture_amt").focus();
						return false;
					}
					$.ajax({
						type: "POST",
						url: baseDir + "authorizedotnet-trans-ajax.php",
						async: false,
						cache: false,
						data: "secure_key=' . Tools::safeOutput($secure_key) . '&id_shop=' . (int) $id_shop . '&orderId=' . (int) $orderId . '&trxId=' . Tools::safeOutput($trxId) . '&id_employee=' . (int) $id_employee . '&adminOrder=' . Tools::safeOutput($adminOrder) . '&auth_code=' . Tools::safeOutput($auth_code) . '&card=' . Tools::safeOutput($card) . '&adn_capture_status="+ $("#adn_capture_status").val() + "&type="+ type + "&amt="+ amt,
						success: function(html){ $("#capture_order_details").html(html); },
						error: function() {alert("ERROR:");}
					});
					$("#capture_order_id").val("");
				}
				if (type == 2)
				{
                    $( "input[name=\'submitRefund\']" ).val("Please Wait...");
                    setTimeout(function(){

                        var amt = $("#adn_refund_amt").val();
                        if ((amt == "") || (!$("#adn_refund_amt").val().match(/^\d+(?:\.\d+)?$/)))
                        {
                            alert("' . $adn->l('Please enter a valid refund amount') . '");
                            $("#adn_refund_amt").focus();
                            //$( "input[name=\'submitRefund\']" ).val("Refund");
                            return false;
                        }

                        var vars = new Object();
                        vars["id_shop"] = "' . (int) $id_shop . '";
                        vars["orderId"] = "' . (int) $orderId . '";
                        vars["trxId"] = "' . Tools::safeOutput($trxId) . '";
                        vars["id_employee"] = "' . (int) $id_employee . '";
                        vars["auth_code"] = "' . Tools::safeOutput($auth_code) . '";
                        vars["adminOrder"] = "' . Tools::safeOutput($adminOrder) . '";
                        vars["card"] = "' . Tools::safeOutput($card) . '";
                        vars["adn_refund_status"] = $("#adn_refund_status").val();
                        vars["type"] = type;
                        vars["amt"] = amt;
						vars["secure_key"] = "' . Tools::safeOutput($secure_key) . '";

                        $.ajax({
                            type: "POST",
                            url: baseDir + "authorizedotnet-trans-ajax.php",
                            async: false,
                            cache: false,
                            data: vars,
                            success: function(html){ $( "input[name=\'submitRefund\']" ).val("Refund"); $("#refund_order_details").html(html); },
                            error: function() {alert("ERROR:");}
                        });
                        $("#refund_order_id").val("");

                    }, 1000);
            	}
        	}
        	</script>';
        if ($type == 1) {
            $html .= '<div id="capture_order_details">';
        }
        if ($type == 2) {
            $html .= '<div id="refund_order_details">';
        }
        $html .= '
            <div class="columns">
                <div class="left_column">
                    ' . $adn->l('Order Date') . ':
                </div>
                <div class="right_column">
                    ' . Tools::safeOutput($date) . '
                </div>
            </div>
			';
        if ($type == 1) {
            $html .= '
                <div class="columns">
                    <div class="left_column">
                        ' . $adn->l('Order Amount') . ':
                    </div>
                    <div class="right_column">
                        $' . (float) $total . '
                    </div>
                </div>
                 <div class="columns">
                    <div class="left_column">
                       ' . $adn->l('Change Order Status') . ':
                    </div>
                    <div class="right_column">
                       <select name="adn_capture_status" id="adn_capture_status" style="width:170px;display:inline;">
						<option value="0" ' . ($adn->_adn_capture_status == 0 ? 'selected="selected"' : '') . '>----------</option>';
            foreach ($states as $state) {
                $html .= '<option value="' . (int) $state['id_order_state'] . '" ' . ($adn->_adn_capture_status == $state['id_order_state'] ? 'selected="selected"' : '') . '>' . Tools::safeOutput($state['name']) . '</option>';
            }
            $html .= '</select> ' . $adn->l('(Optional)') . '
                    </div>
                </div>

                <div class="columns">
                    <div class="left_column">
                        ' . $adn->l('Capture Amount') . ':
                    </div>
                    <div class="right_column">
                        $&nbsp;<input type="text" style="width:100px;display: inline" id="adn_capture_amt" name="adn_capture_amt" value="' . (float) $total . '" />
                    </div>
                </div>

                <div class="columns">
                    <div class="left_column">
                        &nbsp;<input type="button" value="' . $adn->l('Capture') . '" name="submitCapture" class="submit_button" onclick="if(confirm(\'Are you sure you want to capture the transaction?\')) {ajax_call(1)}" />
                    </div>
                    <div class="right_column">

                    </div>
                </div>
				<div class="clear"></div>
				';
        }
        if ($type == 2) {
            $html .= '
                <div class="columns">
                    <div class="left_column">
                        ' . $adn->l('Order Amount') . ':
                    </div>
                    <div class="right_column">
                        $' . (float) $total . '
                    </div>
                </div>
                <div class="columns">
                    <div class="left_column">
                       ' . $adn->l('Change Order Status') . ':
                    </div>
                    <div class="right_column">
                        	<select name="adn_refund_status" id="adn_refund_status" style="width:170px;display:inline;">
                                <option value="0" ' . ($adn->_adn_refund_status == 0 ? 'selected="selected"' : '') . '>----------</option>';
            foreach ($states as $state) {
                $html .= '<option value="' . (int) $state['id_order_state'] . '" ' . ($adn->_adn_refund_status == $state['id_order_state'] ? 'selected="selected"' : '') . '>' . Tools::safeOutput($state['name']) . '</option>';
            }
            $html .= '</select> ' . $adn->l('(Optional)') . '
                    </div>
                </div>
                <div class="columns">
                    <div class="left_column">
                       ' . $adn->l('Refund Amount') . ':
                    </div>
                    <div class="right_column">
                        $&nbsp;<input type="text" style="width:100px;display: inline" id="adn_refund_amt" name="adn_refund_amt" value="' . (float) $total . '" />
                    </div>
                </div>
                <div class="columns">
                    <div class="left_column">
                       &nbsp;<input type="button" value="' . $adn->l('Refund') . '" name="submitRefund" class="submit_button" onclick="if(confirm(\'Are you sure you want to refund the transaction?\')) {ajax_call(2)}"/>
                    </div>
                    <div class="right_column">

                    </div>
                </div>

                <div class="clear"></div>
				';
            $result = Db::getInstance()->ExecuteS('SELECT * FROM ' . _DB_PREFIX_ . 'authorizedotnet_refund_history WHERE id_order=' . (int) $orderId);
            if (is_array($result) && count($result) > 0) {
                $html .= '
                <div class="columns">
                    <div class="left_column">
                        ' . $adn->l('Refund History') . '
                    </div>
                    <div class="right_column">

                    </div>
                </div>

				';
                foreach ($result as $row) {
                    $html .= '

                        <div class="columns">
                            <div class="left_column">
                                $' . (float) $row['amount'] . '
                            </div>
                            <div class="right_column">
                                ' . Tools::safeOutput($row['details']) . '
                                <br/>
                                ' . Tools::safeOutput($row['date']) . '
                            </div>
                        </div>
						';
                }
            }
        }
        $html .= '<div class="clear"></div></div>';
    } else {
        $html = '
            <div class="columns">
                <div class="left_column">

                </div>
                <div class="right_column">
                  ' . $adn->l('Invalid Order Number') . '
                </div>
            </div>
            <div class="clear"></div>
			';
    }
}
echo $html;
