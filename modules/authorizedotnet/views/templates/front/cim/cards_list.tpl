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
{if !empty($cardsList)}
	{foreach from=$cardsList  item=card}
		<div class="container_card_item">
			<div id="card_item_{$card.customer_payment_profile_id|intval}" class="card_item">
				<div class="card_info">
					<div class="card_item_title">{$card.title|escape:'htmlall':'UTF-8'}</div>
					<div class="card_item_date"><span>{l s='Expiration Date:' mod='authorizedotnet'}</span> {$card.exp_date|substr:5:2|escape:'htmlall':'UTF-8'}/{$card.exp_date|substr:0:4|escape:'htmlall':'UTF-8'}</div>
					<div class="card_item_date"><span>{l s='Card Number:' mod='authorizedotnet'}</span> ************{$card.last4digit|escape:'htmlall':'UTF-8'|substr:4:4}</div>
				</div>
				<div class="card_actions">
					<input type="button" class="card_edit card_button"   onclick="getCardForm({$card.customer_payment_profile_id|intval});" id="card_edit_{$card.customer_payment_profile_id|intval}" value="edit" />
				 	<input type="button" class="card_remove card_button" onclick="deleteCard({$card.customer_payment_profile_id|intval});"  id="card_remove_{$card.customer_payment_profile_id|intval}" value="remove" />
				</div>
				<div style="clear: both;"> </div>
			</div>
		</div>
	{/foreach}
{/if}
