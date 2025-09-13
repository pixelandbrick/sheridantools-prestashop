{*
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
*}

{if $conditions_to_approve|count}
    <p class="ps-hidden-by-js">
        {* At the moment, we're not showing the checkboxes when JS is disabled
        because it makes ensuring they were checked very tricky and overcomplicates
        the template. Might change later.
        *}
        {l s='By confirming the order, you certify that you have read and agree with all of the conditions below:' mod='authorizedotnet'}
    </p>

    <div id="conditions-to-approve">
        <ul>
            {foreach from=$conditions_to_approve item="condition" key="condition_name"}
                <li>
                    <div class="pull-xs-left">
                        <span class="custom-checkbox">
                            <input  id    = "conditions_to_approve[{$condition_name|escape:'htmlall':'UTF-8'}]"
                                    name  = "conditions_to_approve[{$condition_name|escape:'htmlall':'UTF-8'}]"
                                    required
                                    type  = "checkbox"
                                    value = "1"
                                    class = "ps-shown-by-js"
                                    >
                            <span><i class="material-icons checkbox-checked">&#xE5CA;</i></span>
                        </span>
                        <label class="js-terms" for="conditions_to_approve[{$condition_name|escape:'htmlall':'UTF-8'}]">
                            {$condition nofilter}{* HTML SENT - requires nofilter*}
                        </label>
                    </div>
                </li>
            {/foreach}
        </ul>
    </div>
{/if}
