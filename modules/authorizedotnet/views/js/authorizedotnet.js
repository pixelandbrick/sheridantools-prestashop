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

function paymentModulePCC(modulePrefix, isEmbeddedCheckout, translations, ajaxUrl) {
    this.modulePrefix = modulePrefix;
    this.isEmbeddedCheckout = isEmbeddedCheckout;
    this.translations = translations;
    this.ajaxUrl = ajaxUrl;


    this.filedsToValidate = [
        'fname',
        'lname',
        'address',
        'city',
        'zip',
        'number',
        'cvm'
    ]

    //Card validation
    this.creditCardRegExp = {
        // 'mc': '5[1-5][0-9]{14}',
        'mc': '5[1-5]\\d{14}$|^2(?:2(?:2[1-9]|[3-9]\\d)|[3-6]\\d\\d|7(?:[01]\\d|20))\\d{12}',
        'ec': '5[1-5][0-9]{14}',
        'vi': '4(?:[0-9]{12}|[0-9]{15})',
        'ax': '3[47][0-9]{13}',
        'dc': '3(?:0[0-5][0-9]{11}|[68][0-9]{12})',
        'bl': '3(?:0[0-5][0-9]{11}|[68][0-9]{12})',
        'di': '6011[0-9]{12}',
        'jcb': '(?:3[0-9]{15}|(2131|1800)[0-9]{11})',
        'er': '2(?:014|149)[0-9]{11}'
    };
    // Add the card validator to them
    this.validateCards = function (value, ccType) {
        value = String(value).replace(/[- ]/g, ''); //ignore dashes and whitespaces


        var cardinfo = this.creditCardRegExp, results = [];
        if (ccType) {
            var expr = '^' + cardinfo[ccType.toLowerCase()] + '$';
            return expr ? !!value.match(expr) : false; // boolean
        }

        for (var p in cardinfo) {
            if (value.match('^' + cardinfo[p] + '$')) {
                results.push(p);
            }
        }
        return results.length ? results.join('|') : false; // String | boolean
    }

    this.getNameField = function (fld) {
        return this.modulePrefix + '_cc_' + fld;
    }

    this.showError = function (fld) {
        alert(this.translations['err_' + fld]);
    }

    this.validate = function (form) {
        validateForm = true;
        if ($('#adn_exist_card').val() > 0)
            validateForm = false;
        if (validateForm)
            for (var i = 0; i < this.filedsToValidate.length; i++) {
                var fld = this.filedsToValidate[i];
                if (fld == 'number') {

                    if (form[this.getNameField(fld)].value == "" || !this.validateCards(form[this.getNameField(fld)].value)) {
                        this.showError(fld);
                        return false;
                    }

                } else if (form[this.getNameField(fld)] && form[this.getNameField(fld)].value == "") {
                    this.showError(fld);
                    return false;
                }

            }

        var show = true;
        $('#conditions-to-approve input[type="checkbox"]').each(function () {

            if (!$(this).is(':checked')) {
                show = false;

                $('.js-alert-payment-conditions').show();
            }
        });
        if (!show) {
            this.showError('terms');

            return false;
        }

        return true;
    }


    this.beforeSend = function () {

    }


    this.send = function (form) {

        if (this.validate(form)) {

            var oldTitleSubmitButton = $('#' + this.modulePrefix + '_submit').html();
            var oldTitleDefSubmitButton = $('#payment-confirmation button').html();
            var modulePrefix = this.modulePrefix;
            if ($('#' + this.modulePrefix + '_submit').length)
                $('#' + this.modulePrefix + '_submit').html(this.translations.trl_wait);


            if ($('#payment-confirmation button').length)
                $('#payment-confirmation button').html(this.translations.trl_wait);

            $('#payment-confirmation button').attr('disabled', 'disabled');

            $('#' + this.modulePrefix + '_submit').attr('disabled', 'disabled');

            $('#' + modulePrefix + '_ajax_container').hide();
            $('#' + modulePrefix + '_ajax_container').removeClass('error');

            this.beforeSend();

            if (adn_dpn) {
                var secureData = {};
                authData = {};
                cardData = {};

                var form = document.adn_form;
                if (typeof form == 'undefined') {
                    form = $("#pc-iframe-dpn").contents().find("form")[0];
                }

                // Extract the card number, expiration date, and card code.
                cardData.cardNumber = form.adn_cc_number.value
                cardData.month = form.adn_cc_Month.value
                cardData.year = form.adn_cc_Year.value
                cardData.cardCode = form.adn_cc_cvm ? form.adn_cc_cvm.value : '';
                secureData.cardData = cardData;

                // The Authorize.Net Client Key is used in place of the traditional Transaction Key. The Transaction Key
                // is a shared secret and must never be exposed. The Client Key is a public key suitable for use where
                // someone outside the merchant might see it.
                authData.clientKey = form.clientKey.value;
                authData.apiLoginID = form.apiLoginID.value;
                secureData.authData = authData;

                // Pass the card number and expiration date to Accept.js for submission to Authorize.Net.
                Accept.dispatchData(secureData, responseHandler);

                // Process the response from Authorize.Net to retrieve the two elements of the payment nonce.
                // If the data looks correct, record the OpaqueData to the console and call the transaction processing function.
                function responseHandler(response) {
                    if (response.messages.resultCode === "Error") {
                        var messagesErr = '';
                        for (var i = 0; i < response.messages.message.length; i++) {
                            console.log(response.messages.message[i].code + ": " + response.messages.message[i].text);
                            messagesErr += response.messages.message[i].code + ": " + response.messages.message[i].text + '<br/>';
                        }


                        if ($("#pc-iframe-dpn").length)
                            formContents = $("#pc-iframe-dpn").contents();
                        else
                            formContents = $(document);

                        formContents.find('#' + modulePrefix + '_ajax_container').show();
                        formContents.find('#' + modulePrefix + '_ajax_container').html(messagesErr);
                        formContents.find('#' + modulePrefix + '_ajax_container').addClass('error');
                        if (formContents.find('#' + modulePrefix + '_submit').length)
                            formContents.find('#' + modulePrefix + '_submit').html(oldTitleSubmitButton);

                        if ($('#payment-confirmation button').length)
                            $('#payment-confirmation button').html(oldTitleDefSubmitButton);

                        $('#payment-confirmation button').attr('disabled', false);


                        $('#' + modulePrefix + '_submit').attr('disabled', false);


                    } else {

                        if ($("#pc-iframe-dpn").length)
                            formContents = $("#pc-iframe-dpn").contents();
                        else
                            formContents = $(document);


                        x_first_name =  formContents.find('#adn_cc_fname').val();
                        x_last_name =  formContents.find('#adn_cc_lname').val();
                        x_address =  formContents.find('#adn_cc_address').val();
                        x_city =  formContents.find('#adn_cc_city').val();
                        x_state =  formContents.find('#adn_id_state').val();
                        x_country =  formContents.find('#adn_id_country').val();
                        x_zip =  formContents.find('#adn_cc_zip').val();

                        id_cart = formContents.find('#id_cart').val();
                        $.ajax({
                            url: adn_path_file,
                            type: "post",
                            dataType: "html",
                            data: 'x_first_name=' + x_first_name + '&x_last_name=' + x_last_name + '&x_address=' + x_address + '&x_city=' + x_city + '&x_state=' + x_state + '&x_country=' + x_country + '&x_zip=' + x_zip + '&id_cart=' + id_cart + '&confirm=1&dataDescriptor=' + response.opaqueData.dataDescriptor + '&dataValue=' + response.opaqueData.dataValue,
                            success: function (strData) {


                                if (strData.substring(0, 4) == 'url:') {
                                    window.location = strData.substring(4);
                                } else {

                                    $('#' + modulePrefix + '_ajax_container').show();
                                    $('#' + modulePrefix + '_ajax_container').html(strData);
                                    $('#' + modulePrefix + '_ajax_container').addClass('error');
                                    if ($('#' + modulePrefix + '_submit').length)
                                        $('#' + modulePrefix + '_submit').html(oldTitleSubmitButton);

                                    if ($('#payment-confirmation button').length)
                                        $('#payment-confirmation button').html(oldTitleDefSubmitButton);

                                    $('#payment-confirmation button').attr('disabled', false);


                                    $('#' + modulePrefix + '_submit').attr('disabled', false);

                                    return false;
                                }
                            }
                        });
                        return false;
                    }
                }

                return false;
            } else {

                if (this.isEmbeddedCheckout) {

                    $.ajax({
                        url: this.ajaxUrl,
                        type: "post",
                        dataType: "html",
                        data: $(form).serialize(),
                        success: function (strData) {

                            if (strData.substring(0, 4) == 'url:') {
                                window.location = strData.substring(4);
                            } else {
                                $('#' + modulePrefix + '_ajax_container').show();
                                $('#' + modulePrefix + '_ajax_container').html(strData);
                                $('#' + modulePrefix + '_ajax_container').addClass('error');
                                if ($('#' + modulePrefix + '_submit').length)
                                    $('#' + modulePrefix + '_submit').html(oldTitleSubmitButton);

                                if ($('#payment-confirmation button').length)
                                    $('#payment-confirmation button').html(oldTitleDefSubmitButton);

                                $('#payment-confirmation button').attr('disabled', false);


                                $('#' + modulePrefix + '_submit').attr('disabled', false);
                            }
                        }
                    });
                } else {

                    form.submit();

                    if ($('#payment-confirmation button').length)
                        $('#payment-confirmation button').html(oldTitleDefSubmitButton);

                    $('#payment-confirmation button').attr('disabled', false);
                }

            }
        }
    }

    this.updateStates = function (modulePrefix) {

        if (typeof adn_path_file == 'undefined' || adn_path_file == '')
            return;

        if (modulePrefix) {
            var realModulePrefix = modulePrefix;
        } else {
            var realModulePrefix = this.modulePrefix;
        }


        $('select#' + realModulePrefix + '_id_state option:not(:first-child)').remove();
        var states = window[realModulePrefix + '_countries'][$('select#' + realModulePrefix + '_id_country').val()];


        if (typeof (states) != 'undefined') {
            $(states).each(function (key, item) {
                $('select#' + realModulePrefix + '_id_state').append('<option value="' + item.id + '"' + (window[realModulePrefix + '_idSelectedCountry'] == item.id ? ' selected="selected"' : '') + '">' + item.name + '</option>');
            });

            $('.' + realModulePrefix + '_id_state:hidden').slideDown('slow');
            $('#' + realModulePrefix + '_id_state:hidden').slideDown('slow');
        } else {
            $('.' + realModulePrefix + '_id_state').slideUp('fast');
            $('#' + realModulePrefix + '_id_state').slideUp('fast');

        }

    }

    this.updateNeedIDNumber = function (modulePrefix) {
        if (modulePrefix) {
            var realModulePrefix = modulePrefix;
        } else {
            var realModulePrefix = this.modulePrefix;
        }

        var idCountry = parseInt($('select#' + realModulePrefix + '_id_country').val());

        if ($.inArray(idCountry, window[realModulePrefix + '_countriesNeedIDNumber']) >= 0)
            $('fieldset.dni').slideDown('slow');
        else
            $('fieldset.dni').slideUp('fast');
    }

    this.initStates = function (object) {
        if (modulePrefix) {
            var realModulePrefix = modulePrefix;
        } else {
            var realModulePrefix = object.modulePrefix;
        }

        $('select#' + realModulePrefix + '_id_country').change(function () {
            object.updateStates(realModulePrefix);
            object.updateNeedIDNumber(realModulePrefix);
        });
        object.updateStates(realModulePrefix);
        object.updateNeedIDNumber(realModulePrefix);
    }

}


function adnSaveCard() {
    if ($('#adn_save_card').is(':checked')) {
        $('#adn_save_card_block').show();
    } else {
        $('#adn_save_card_block').hide();
    }

}

function changeAdnExistCard() {
    if ($('#adn_exist_card').val() != "0") {
        $('.form_row').hide();
    } else {
        $('.form_row').show();
    }
}


if (typeof adn_payment_page == 'undefined')
    adn_payment_page = false;
if (typeof err_fname == 'undefined')
    err_fname = '';
if (typeof err_lname == 'undefined')
    err_lname = '';

if (typeof err_address == 'undefined')
    err_address = '';
if (typeof err_city == 'undefined')
    err_city = '';
if (typeof err_zip == 'undefined')
    err_zip = '';
if (typeof err_number == 'undefined')
    err_number = '';
if (typeof err_card_num == 'undefined')
    err_card_num = '';
if (typeof err_cvm == 'undefined')
    err_cvm = '';
if (typeof err_terms == 'undefined')
    err_terms = '';
if (typeof trl_wait == 'undefined')
    trl_wait = '';

if (typeof adn_path_file == 'undefined')
    adn_path_file = '';

var paymentModuleAND = new paymentModulePCC(
        'adn',
        adn_payment_page,
        {
                'err_fname': err_fname,
                'err_lname': err_lname,
                'err_address': err_address,
                'err_city': err_city,
                'err_zip': err_zip,
                'err_number': err_number,
                'err_card_num': err_card_num,
                'err_cvm': err_cvm,
                'err_terms': err_terms,
                'trl_wait': trl_wait
            },
        adn_path_file
);

$('#adn_submit').click(function () {
    paymentModuleAND.send(document.adn_form);
});

if (typeof adn_path_file != 'undefined')
    paymentModuleAND.initStates(paymentModuleAND);

if (typeof id_state != 'undefined')
    $('.adn_id_state option[value=' + id_state + ']').attr('selected', 'selected');


jQuery(function ($) {

    var
        $submit_button = $("#payment-confirmation, #payment-submit").find("[type=submit]");

    $submit_button.on("click", function () {
        if (!$('#adn_payment').is(":visible")) {
            return true;
        }
        form = document.adn_form;
        if (adn_dpn) {
            var form = document.adn_form;
            if (typeof form == 'undefined') {
                form = $("#pc-iframe-dpn").contents().find("form")[0];
            }
        }
        if (typeof form != 'undefined') {
            paymentModuleAND.send(form);
            return false;
        } else {
            return true;
        }

    });

    $(document).ready(function () {
        $(".payment-options").on("change", 'input[name="payment-option"]', function () {

            var confirm_button = $("#payment-confirmation button");

            if ('authorizedotnet' == $(this).data("module-name")) {
                // for embedded form we hide payment button
                confirm_button.html(confirm_button.html().replace(confirm_button.text(), adn_order_btn_txt));
            } else {
                confirm_button.html(confirm_button.html().replace(adn_order_btn_txt, confirm_button.text()));
            }
        });
    });

});

