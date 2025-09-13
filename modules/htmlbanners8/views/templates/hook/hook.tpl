{*
* 2007-2019 PrestaShop
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2019 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{if $htmlbanners8.slides}
  <div id="htmlbanners8" class="category-banners">
    <div class="htmlbanners8-inner {if $htmlbanners8.carousel_active == 'true'}htmlbanners8-carousel {/if}row clearfix" {if $htmlbanners8.carousel_active == 'true'} data-carousel={$htmlbanners8.carousel_active|escape:'htmlall':'UTF-8'} data-autoplay={$htmlbanners8.autoplay|escape:'htmlall':'UTF-8'} data-timeout="{$htmlbanners8.speed|escape:'htmlall':'UTF-8'}" data-pause="{$htmlbanners8.pause|escape:'htmlall':'UTF-8'}" data-pagination="{$htmlbanners8.pagination|escape:'htmlall':'UTF-8'}" data-navigation="{$htmlbanners8.navigation|escape:'htmlall':'UTF-8'}" data-loop="{$htmlbanners8.wrap|escape:'htmlall':'UTF-8'}" data-items="{$htmlbanners8.items|escape:'htmlall':'UTF-8'}" data-items_1199="{$htmlbanners8.items_1199|escape:'htmlall':'UTF-8'}" data-items_991="{$htmlbanners8.items_991|escape:'htmlall':'UTF-8'}" data-items_768="{$htmlbanners8.items_768|escape:'htmlall':'UTF-8'}" data-items_480="{$htmlbanners8.items_480|escape:'htmlall':'UTF-8'}"{/if}>
      {foreach from=$htmlbanners8.slides item=slide name='htmlbanners8'}
        <div class="category-banner {$slide.customclass|escape:'htmlall':'UTF-8'}">
          {if $slide.image_url && $slide.url}
          <a class="banner-link" href="{$slide.url|escape:'htmlall':'UTF-8'}" {*title="{$slide.legend|escape}"*}>
          {else}
          <div class="banner-link">
          {/if}
          {if $slide.image_url}
          <figure>
          <img class="img-banner" src="{$slide.image_url|escape:'htmlall':'UTF-8'}" alt="{$slide.legend|escape:'htmlall':'UTF-8'}">
          {/if}
              {if $slide.description}
                <figcaption class="banner-description">
                    {$slide.description|escape:'htmlall':'UTF-8'}
                </figcaption>
              {/if}
          {if $slide.image_url}
          </figure>
          {/if}
          {if $slide.image_url && $slide.url}
          </a>
          {else}
          </div>
          {/if}
        </div>
      {/foreach}
    </div>
  </div>
{/if}

