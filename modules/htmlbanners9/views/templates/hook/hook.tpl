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

{if $htmlbanners9.slides}
  <div id="htmlbanners9" class="headerslider" data-fullscreen={$htmlbanners9.fullscreen|escape:'htmlall':'UTF-8'}  data-autoplay={$htmlbanners9.autoplay|escape:'htmlall':'UTF-8'} data-timeout="{$htmlbanners9.speed|escape:'htmlall':'UTF-8'}" data-speed="{$htmlbanners9.slide_speed|escape:'htmlall':'UTF-8'}" data-pause="{$htmlbanners9.pause|escape:'htmlall':'UTF-8'}" data-pagination="{$htmlbanners9.pagination|escape:'htmlall':'UTF-8'}" data-navigation="{$htmlbanners9.navigation|escape:'htmlall':'UTF-8'}" data-loop="{$htmlbanners9.wrap|escape:'htmlall':'UTF-8'}" data-anim_in="{$htmlbanners9.anim_in|escape:'htmlall':'UTF-8'}" data-anim_out="{$htmlbanners9.anim_out|escape:'htmlall':'UTF-8'}">
      {foreach from=$htmlbanners9.slides item=slide name='htmlbanners9'}
        <div class="header-slide {$slide.customclass|escape:'htmlall':'UTF-8'}">
          {if $slide.image_url && $slide.url}
          <a class="slide-link" href="{$slide.url|escape:'htmlall':'UTF-8'}" {*title="{$slide.legend|escape}"*}>
          {else}
          <div class="slide-link">
          {/if}
          {if $slide.image_url}
          <figure class="headerslider-figure">
          <img class="headerslider-img" src="{$slide.image_url|escape:'htmlall':'UTF-8'}" alt="{$slide.legend|escape:'htmlall':'UTF-8'}">
          {/if}
              {if $slide.description}
                <figcaption class="caption-description">
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
{/if}

