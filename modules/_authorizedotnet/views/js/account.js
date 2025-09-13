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

function getCardForm(id)
{
    $('#card-loader').fadeIn('slow');

    $.ajax({
        url: base_ajax_url,
        type: "post",
        datatype: "html",
        data: {'subaction': 'getCardForm', 'ajax': 1, 'id': id},
        success: function (data) {

            var top = $('#cim_edit_id').offset();
            $("html, body").animate({scrollTop: top.top}, "slow");
            $("#cim_edit_id").html(data);
            $('#card-loader').fadeOut('slow');
        }
    });
}

function hideCardForm(id)
{
    $('#card_form_id').slideUp('fast');
    $('#cim_edit_id').html('');
    $('#card_form_error_id').html('');
    $('#card_form_error_id').hide();
}

function saveCardForm(id)
{
    $('#card-loader').fadeIn('slow');
    $('#card_form_error_id').slideUp('fast');
    $.ajax({
        url: base_ajax_url,
        type: "post",
        dataType: 'json',
        data: $('#cim_card_form_id').serialize() + '&' + 'subaction=saveCardForm&ajax=1&id=' + id,
        success: function (dataJson) {

            if (dataJson.status == "error") {
                var errorsStr = '<ul>';
                $.each(dataJson.errors, function (i, error) {
                    errorsStr += '<li>' + error + '</li>';
                });
                errorsStr += '</ul>';

                $('#card_form_error_id').html(errorsStr);
                $('#card_form_error_id').slideDown('fast');
                $('#card-loader').fadeOut('slow');
            } else if (dataJson.status == "successful") {
                loadCardsList();
                hideCardForm()
            }


        }
    });
}

function loadCardsList()
{
    $('#card-loader').fadeIn('slow');
    $.ajax({
        url: base_ajax_url,
        type: "post",
        datatype: "html",
        data: 'subaction=loadListCards&ajax=1',
        success: function (dataJson) {
            
            $('#cards_list_id').html(dataJson);
            $('#card-loader').fadeOut('slow');
        }
    });

}

function deleteCard(id)
{
    $('#card-loader').fadeIn('slow');
    $.ajax({
        url: base_ajax_url,
        type: "post",
        dataType: 'json',
        data: 'subaction=deleteCard&ajax=1&id=' + id,
        success: function (dataJson) {
            if (dataJson.status == "successful") {
                loadCardsList();
            }
        }
    });
}