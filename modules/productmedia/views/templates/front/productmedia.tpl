{*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
* @author    PrestaShop SA <contact@prestashop.com>
* @copyright 2007-2015 PrestaShop SA
* @license   http://opensource.org/licenses/afl-3.0.php Academic Free License (AFL 3.0)
* International Registered Trademark & Property of PrestaShop SA
*}
<div style="text-align: center">
    {if is_array($medias)}
        {foreach from=$medias item=media name=medias}
            {if $media.type == 'vid'}
                <h3>{$media.label|escape:'htmlall':'UTF-8'}</h3>
                <video src="{$media.url_media|escape:'htmlall':'UTF-8'}" controls width="100%" height="100%"></video>
            {else}
                <h3>{$media.label|escape:'htmlall':'UTF-8'}</h3>
                <audio src="{$media.url_media|escape:'htmlall':'UTF-8'}" controls style="width:100%;display:block;"></audio>
            {/if}
        {/foreach}
    {/if}
</div>

<style>
video::-internal-media-controls-download-button {
    display:none;
}

video::-webkit-media-controls-enclosure {
    overflow:hidden;
}

video::-webkit-media-controls-panel {
    width: calc(100% + 30px); /* Adjust as needed */
}
</style>
