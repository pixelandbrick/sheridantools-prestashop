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
<p>{l s='Your order on' mod='authorizedotnet'} <span class="bold">{$shop_name|escape:'htmlall':'UTF-8'}</span> {l s='is complete.' mod='authorizedotnet'}
	<br /><br />
	{l s='You have chosen the Credit Card method.' mod='authorizedotnet'}
	<br /><br /><span class="bold">{l s='Your order will be sent very soon.' mod='authorizedotnet'}</span>
	<br /><br />{l s='For any questions or for further information, please contact our' mod='authorizedotnet'} <a href="{$base_dir_ssl|escape:'htmlall':'UTF-8'}contact-form.php">{l s='customer support' mod='authorizedotnet'}</a>.
</p>
