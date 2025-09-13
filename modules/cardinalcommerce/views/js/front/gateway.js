/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author INVERTUS UAB www.invertus.eu  <support@invertus.eu>
 * @copyright CardinalCommerce
 * @license   Addons PrestaShop license limitation
 */

 // Clickjacking protection
  if(self == top) {
      document.documentElement.style.display = 'block';
  } else {
      top.location = self.location;
  }

$(document).ready(function () {
    var isSetupComplete = false;

    Cardinal.configure({
        logging: {
            level: cardinal_commerce_browser_logging ? 'on' : 'off'
        },
        CCA: {
            CustomContentID: 'merchant-content-wrapper'
        }
    });

    Cardinal.on('payments.setupComplete', function () {
        isSetupComplete = true;
    });

    Cardinal.on('payments.validated', function (data, jwt) {
        $('#cardinalCommerceResponseInput').val(JSON.stringify({
            data: data,
            jwt: jwt
        }));

        if (!isSetupComplete) {
            return;
        }

        $('#cardinalCommerceResponseForm').submit();
    });

    $('#cardinalCommerceConfirmPaymentBtn').on('click', function () {
        var cardTokenAction = $('#card_token_action').val();

        if ('pay_with_token' === cardTokenAction) {
            $('#cardinalCommerceCardTokenActionForm').submit();
        } else {
            $('#card_token_action_selected').val(cardTokenAction);
        }

        var data = {
            Consumer: {
                Account: {
                    AccountNumber: getCreditCardInput('card-number'),
                    ExpirationMonth: getCreditCardInput('expiry-month'),
                    ExpirationYear: getCreditCardInput('expiry-year'),
                    CardCode: getCreditCardInput('cvc')
                }
            }
        };

        Cardinal.start('cca', data, cardinal_commerce_jwt);
    });

    Cardinal.setup('init', {
        jwt: cardinal_commerce_jwt
    });

    /**
     * Get credit card data from form
     *
     * @param {String} inputName
     *
     * @return {String} Input value
     */
    function getCreditCardInput(inputName) {
        return $('#cc-' + inputName).val().replace(/\D/g, '');
    }
});

