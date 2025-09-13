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

$(document).ready(function () {
    var $orderForm = $('form#form-order');
    var $bulkActionsDropdown = $orderForm.closest('div').find('ul.dropdown-menu');

    var capturePaymentData = {
        name: capture_name,
        action: 'capture_payments',
        icon: 'icon-arrow-circle-o-down',
    };

    $bulkActionsDropdown.append(createCapturePaymentItem(capturePaymentData));

    $(document).on('click', '#' + capturePaymentData.action, function (event) {
        event.preventDefault();

        $orderForm.find('input[name="token"]').val(cc_csrf_token);
        $orderForm.attr('action', order_change_controller_link);
        $orderForm.submit();
    });

    /**
     * Create custom Bulk Action element
     *
     * @param {Object} data
     *
     * @return {HTMLElement}
     */
    function createCapturePaymentItem(data)
    {
        return '<li><a href="#" id="' + data.action + '"><i class="' + data.icon + '"></i> ' + data.name + ' </a></li>';
    }
});
