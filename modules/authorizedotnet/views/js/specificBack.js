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


function changeAPI()
{
    var $radios = $('input:radio[name=adn_demo_mode]');
    if ($("input[name=\'adn_api\']:checked").val() == "aim") {
        $(".adn_cim_enable").css('opacity', '1');
        $('input[name$="adn_cim"]').removeAttr('disabled');

        $radios.filter('[value=1]').removeAttr('disabled');
        
        $radios.filter('[value=1]').next().css('opacity', '1');
    } else {
        $(".adn_cim_enable").css('opacity', '0.5');
        $('input[name$="adn_cim"]').attr('disabled', 'true');       

        $radios.filter('[value=0]').prop('checked', true);

        $radios.filter('[value=1]').attr('disabled', 'true');

        $radios.filter('[value=1]').next().css('opacity', '0.5');
    }
}
function changeCIM()
{


}

function type_change()
{
    if ($("#adn_type").val() == "AUTH_CAPTURE")
    {
        $(".capture_transaction").hide();
        $("#cap_stat").hide();
        $(".adn_ac_status").hide();
        $("#adn_ac_status").val("0");
    } else
    {
        $(".capture_transaction").show();
        $("#cap_stat").show();
        $(".adn_ac_status").show();
    }
}

function search_orders(type)
{
    var orderId = "";
    if (type == 1)
        orderId = $("#capture_order_id").val();
    if (type == 2)
        orderId = $("#refund_order_id").val();
    if (orderId == "")
    {
        alert("Please Enter a Valid Order ID.");
        if (type == 1)
            $("#capture_order_id").focus();
        else if (type == 2)
            $("#refund_order_id").focus();
        return;
    }
    if (type == 1)
    {
        $.ajax({
            type: "POST",
            url: baseDir + "authorizedotnet-ajax.php",
            async: true,
            cache: false,
            data: "orderId=" + orderId + "&id_lang=" + id_lang + "&id_employee=" + id_employee + "&type=" + type + "&secure_key=" + adn_secure_key + "",
            success: function (html) {
                $("#capture_order_details").html(html);
            },
            error: function () {
                alert("ERROR:");
            }
        });
    }
    if (type == 2)
    {
        $.ajax({
            type: "POST",
            url: baseDir + "authorizedotnet-ajax.php",
            async: true,
            cache: false,
            data: "orderId=" + orderId + "&id_lang=" + id_lang + "&id_employee=" + id_employee + "&type=" + type + "&secure_key=" + adn_secure_key + "",
            success: function (html) {
                $("#refund_order_details").html(html);
            },
            error: function () {
                alert("ERROR:");
            }
        });
    }
}

function clear_orders(type)
{
    if (type == 1)
    {
        $("#capture_order_id").val("");
        $("#capture_order_details").html("");
    }
    if (type == 2)
    {
        $("#refund_order_id").val("");
        $("#refund_order_details").html("");
    }
}

$(function () {

    type_change();


});


function update_ft() {
    if ($("#adn_ft").is(":checked")) {
        document.getElementById("adn_ft_email").readOnly = false;
        $("#adn_ft_email").css("background-color", "white");
    } else {
        document.getElementById("adn_ft_email").readOnly = true;
        $("#adn_ft_email").css("background-color", "#e6e6e6");
    }
}

$(document).ready(function () {
    update_ft();
});