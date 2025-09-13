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
<p style="clear: both"></p>
<div class="panel" id="fieldset_0" style="width:500px; height:164px; float:left;">
	<div class="panel-heading">
		<img src="{$modulePathUri nofilter}views/img/pdf.gif" alt="" title="" /> {l s='Instructions' mod='obsstocks'}
	</div>
	<p>{l s='Check the instructions manual here' mod='obsstocks'}:
	{if $manual_en_exists}
		<br/><br/> <a href="{$modulePathUri nofilter}docs/readme_en.pdf" target="_blank">{l s='English version manual' mod='obsstocks'}</a>
	{/if}
	{if $manual_es_exists}
		<br/><br/> <a href="{$modulePathUri nofilter}docs/readme_es.pdf" target="_blank">{l s='Spanish version manual' mod='obsstocks'}</a>
	{/if}
	</p>
</div>
<div class="panel" id="fieldset_0" style="margin-left: 520px;">
	<div class="panel-heading">
		<img src="{$modulePathUri nofilter}views/img/medal.png" alt="" title="" /> {l s='Developed by' mod='obsstocks'}
     </div>
 	 <div style="width: 330px; margin: 0 auto; padding:10px;">
 	 	<a href="http://addons.prestashop.com/{$locale|escape:'htmlall':'UTF-8'}/65_obs-solutions" target="_blank"><img style="height:50px;" src="{$modulePathUri nofilter}views/img/logo.obsolutions.png" alt="{l s='Developed by' mod='obsstocks'} OBSolutions" title="{l s='Developed by' mod='obsstocks'} OBSolutions"/></a>
 	 </div>
 	 <p style="text-align:center"><a href="http://addons.prestashop.com/{$locale|escape:'htmlall':'UTF-8'}/65_obs-solutions" target="_blank">{l s='See all our modules on PrestaShop Addons clicking here' mod='obsstocks'}</a></p>
</div>