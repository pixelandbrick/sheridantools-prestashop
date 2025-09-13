{*
 * 2011-2018 OBSOLUTIONS WD S.L. All Rights Reserved.
 *
 * NOTICE:  All information contained herein is, and remains
 * the property of OBSOLUTIONS WD S.L. and its suppliers,
 * if any.  The intellectual and technical concepts contained
 * herein are proprietary to OBSOLUTIONS WD S.L.
 * and its suppliers and are protected by trade secret or copyright law.
 * Dissemination of this information or reproduction of this material
 * is strictly forbidden unless prior written permission is obtained
 * from OBSOLUTIONS WD S.L.
 *
 *  @author    OBSOLUTIONS WD S.L. <http://addons.prestashop.com/en/65_obs-solutions>
 *  @copyright 2011-2018 OBSOLUTIONS WD S.L.
 *  @license   OBSOLUTIONS WD S.L. All Rights Reserved
 *  International Registered Trademark & Property of OBSOLUTIONS WD S.L.
 *}
<div id="fieldset_1" class="panel">
	<div class="panel-heading">
		<i class="icon-warning"></i>
		{l s='Folders access permissions - for temp and logs files:' mod='obsstocks'}
	</div>

	<p>{l s='Check write permissions for folder of extracted files:' mod='obsstocks'}</p>
	<p>&nbsp;<b>{l s='Temp import folder path:' mod='obsstocks'}</b> <i>{$OBS_IMPORT_DIR|escape:'htmlall':'UTF-8'}</i>&nbsp;&nbsp;<b>{if $W_OBS_IMPORT_DIR}<span style="color:green;">({l s='writable' mod='obsstocks'})</span>{else}<span style="color:red;">({l s='Warning: not writable' mod='obsstocks'})</span>' mod='obsstocks'}{/if}</b></p>
	<p>&nbsp;<b>{l s='Temp extract folder path:' mod='obsstocks'}</b> <i>{$OBS_EXPORT_DIR|escape:'htmlall':'UTF-8'}</i>&nbsp;&nbsp;<b>{if $W_OBS_EXPORT_DIR}<span style="color:green;">({l s='writable' mod='obsstocks'})</span>{else}<span style="color:red;">({l s='Warning: not writable' mod='obsstocks'})</span>' mod='obsstocks'}{/if}</b></p>
	<p>&nbsp;<b>{l s='Logs folder path:' mod='obsstocks'}</b> <i>{$OBS_LOGS_DIR|escape:'htmlall':'UTF-8'}</i>&nbsp;&nbsp;<b>{if $W_OBS_LOGS_DIR}<span style="color:green;">({l s='writable' mod='obsstocks'})</span>{else}<span style="color:red;">({l s='Warning: not writable' mod='obsstocks'})</span>' mod='obsstocks'}{/if}</b></p>
</div>