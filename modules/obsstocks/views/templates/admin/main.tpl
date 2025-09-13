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
{block name='permissions'}
    {include file='./_partials/foldersPermissions.tpl'}
{/block}

{block name='csv'}
    {$csv nofilter}
{/block}

{block name='cronjobs'}
    {include file='./_partials/cronjobs.tpl'}
{/block}

{block name='manualImportForm'}
    {$manualImportForm nofilter}
{/block}

{block name='manualImportForm'}
    {$automatic nofilter}
{/block}

{if $W_OBS_EXPORT_DIR}
	{block name='exportAllStockForm'}
    	{$exportAllStockForm nofilter}
	{/block}
	{block name='exportStockBMForm'}
    	{$exportStockBMForm nofilter}
	{/block}
	{block name='exportConfigAlertsForm'}
    	{$exportConfigAlertsForm nofilter}
	{/block}
	{block name='settingsExportForm'}
    	{$settingsExportForm nofilter}
	{/block}
{/if}

<p style="clear: both"></p>
<a name="logs_list"></a>
{block name='logsList'}
   	{$logsList nofilter}
   	<div class="panel">
		{l s='Page' mod='obsstocks'}: {$logsPagination nofilter}
	</div>
{/block}

{block name='obsolutions'}
   	{include file='./_partials/footer.tpl'}
{/block}

