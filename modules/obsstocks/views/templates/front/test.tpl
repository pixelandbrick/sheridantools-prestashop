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
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body style="font-family:verdana;font-size:12px">
<div style="margin-left:20px">
	<h1>{l s='IMPORT DATA TEST' mod='obsstocks'}</h1>
	<h3>{l s='Testing the first 5 lines...' mod='obsstocks'}</h3>
{assign var='found_errors' value='0'}	
{foreach name=outer key=key item=line from=$test_result}
<table width="640" style="font-size:12px; margin-bottom: 20px; border:1px #000 solid; border-spacing:0; border-collapse: collapse;">
<tr>
<td style="background-color: #0096ff; color: #ffffff; font-weight:bold; border:1px #000 solid; padding:5px; text-align: center" colspan="3">{l s='LINE' mod='obsstocks'} #{$key|escape:'htmlall':'UTF-8'}</td>
</tr>
<tr>
	<td style="border:1px #000 solid; padding:5px; background-color: #555; color: #ffffff; font-weight:bold;">{l s='FIELD' mod='obsstocks'}</td>
	<td style="border:1px #000 solid; padding:5px; background-color: #555; color: #ffffff; font-weight:bold;">{l s='VALUE' mod='obsstocks'}</td>
	<td style="border:1px #000 solid; padding:5px; background-color: #555; color: #ffffff; font-weight:bold;">{l s='TEST RESULT' mod='obsstocks'}</td>
</tr>
<tr>
	<td style="border:1px #000 solid; padding:5px; font-weight:bold;">UID ({$line['uid']['type']|escape:'htmlall':'UTF-8'})</td>
	<td style="border:1px #000 solid; padding:5px;">{$line['uid']['value']|escape:'htmlall':'UTF-8'}</td>
	<td style="border:1px #000 solid; padding:5px; color: #ffffff; font-weight:bold; {if $line['uid']['result'] != 'FAILED'}background-color: #66af66;{else}background-color: red;{/if}">{$line['uid']['result']|escape:'htmlall':'UTF-8'}</td>
</tr>
<tr>
	<td style="border:1px #000 solid; padding:5px; font-weight:bold;">{l s='Stock' mod='obsstocks'}</td>
	<td style="border:1px #000 solid; padding:5px;">{$line['stock']['value']|escape:'htmlall':'UTF-8'}</td>
	<td style="border:1px #000 solid; padding:5px; color: #ffffff; font-weight:bold; {if $line['stock']['result'] != 'FAILED'}background-color: #66af66;{else}background-color: red;{/if}">{$line['stock']['result']|escape:'htmlall':'UTF-8'}</td>
</tr>
<tr>
	<td style="border:1px #000 solid; padding:5px; font-weight:bold;">{l s='Minimum stock alert' mod='obsstocks'}</td>
	<td style="border:1px #000 solid; padding:5px;">{$line['alert']['value']|escape:'htmlall':'UTF-8'}</td>
	<td style="border:1px #000 solid; padding:5px; color: #ffffff; font-weight:bold; {if $line['alert']['result'] != 'FAILED'}background-color: #66af66;{else}background-color: red;{/if}">{$line['alert']['result']|escape:'htmlall':'UTF-8'}</td>
</tr>
<tr>
	<td style="border:1px #000 solid; padding:5px; font-weight:bold;">{l s='Wholesale price' mod='obsstocks'}</td>
	<td style="border:1px #000 solid; padding:5px;">{$line['wholesale_price']['value']|escape:'htmlall':'UTF-8'}</td>
	<td style="border:1px #000 solid; padding:5px; color: #ffffff; font-weight:bold; {if $line['wholesale_price']['result'] != 'FAILED'}background-color: #66af66;{else}background-color: red;{/if}">{$line['wholesale_price']['result']|escape:'htmlall':'UTF-8'}</td>
</tr>
<tr>
	<td style="border:1px #000 solid; padding:5px; font-weight:bold;">{l s='Pre-tax retail price' mod='obsstocks'}</td>
	<td style="border:1px #000 solid; padding:5px;">{$line['price']['value']|escape:'htmlall':'UTF-8'}</td>
	<td style="border:1px #000 solid; padding:5px; color: #ffffff; font-weight:bold; {if $line['price']['result'] != 'FAILED'}background-color: #66af66;{else}background-color: red;{/if}">{$line['price']['result']|escape:'htmlall':'UTF-8'}</td>
</tr>
</table>
{if $found_errors == 0 AND ($line['uid']['result'] == 'FAILED' OR $line['uid']['result'] == 'FAILED' OR $line['stock']['result'] == 'FAILED' OR $line['alert']['result'] == 'FAILED' OR $line['wholesale_price']['result'] == 'FAILED' OR $line['price']['result'] == 'FAILED')}
	{assign var='found_errors' value='1'}	
{/if}
 {/foreach}	 

	<br/>
	{if !$found_errors}
		<span style="color:green; font-weight:bold">{l s='Test finished OK' mod='obsstocks'}</span>
		<br/>
		<br/>{l s='You can close this tab and continue with a real import.' mod='obsstocks'}
	{else}
		<span style="color:red; font-weight:bold">{l s='Test process FAILED' mod='obsstocks'}</span>
		<br/>
		<br/>{l s='Please check the configuration parameters and launch test again.' mod='obsstocks'}
		
	{/if}
		<br/>
		{if $back_button}
		<br/><a href="{$back_link|escape:'htmlall':'UTF-8'}&token={$admin_token|escape:'htmlall':'UTF-8'}">{l s='Go back to admin' mod='obsstocks'}</a>
		{/if}

</div>
</body>
</html>