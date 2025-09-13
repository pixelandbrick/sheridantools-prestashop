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

$(document).ready(function () {
    $('select#adn_id_country').change(function () {
        updateState();
        updateNeedIDNumber();
    });
    updateState();
    updateNeedIDNumber();
});

function updateState()
{
    $('select#adn_id_state option:not(:first-child)').remove();
    var states = adn_countries[$('select#adn_id_country').val()];
    if (typeof (states) != 'undefined')
    {
        $(states).each(function (key, item) {
            $('select#adn_id_state').append('<option value="' + item.id + '"' + (adn_idSelectedCountry == item.id ? ' selected="selected"' : '') + '">' + item.name + '</option>');
        });

        $('p.id_state:hidden').slideDown('slow');
    } else
        $('p.id_state').slideUp('fast');
}

function updateNeedIDNumber()
{
    var idCountry = parseInt($('select#adn_id_country').val());

    if ($.inArray(idCountry, adn_countriesNeedIDNumber) >= 0)
        $('fieldset.dni').slideDown('slow');
    else
        $('fieldset.dni').slideUp('fast');
}