/**
* Prestashop Addons | Module by: <App1Pro>
*
* @author    Chuyen Nguyen [App1Pro].
* @copyright Chuyenim@gmail.com
* @license   http://app1pro.com/license.txt
*/

$(document).ready(function() {
    //console.log($('.product_list').html());
    
    if (typeof slide_pager !== 'undefined') {
        $('.product_list').bxSlider({
            pager: slide_pager,
            infiniteLoop: slide_infiniteLoop,
            hideControlOnEnd: slide_hideControlOnEnd,
            autoHover: true,
            auto: slide_auto,
            minSlides: 2,
            maxSlides: 4,
            slideWidth: slide_slideWidth,
            slideMargin: slide_slideMargin
        });
    }
});