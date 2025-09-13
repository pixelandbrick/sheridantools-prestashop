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

{if $htmlbanners10.slides}
  <div id="htmlbanners10" class="testimonials">
    <div class="container">
      <div class="htmlbanners10-inner {if $htmlbanners10.carousel_active == 'true'}htmlbanners10-carousel {/if}row clearfix" {if $htmlbanners10.carousel_active == 'true'} data-carousel={$htmlbanners10.carousel_active} data-autoplay={$htmlbanners10.autoplay} data-timeout="{$htmlbanners10.speed}" data-pause="{$htmlbanners10.pause}" data-pagination="{$htmlbanners10.pagination}" data-navigation="{$htmlbanners10.navigation}" data-loop="{$htmlbanners10.wrap}" data-items="{$htmlbanners10.items}" data-items_1199="{$htmlbanners10.items_1199}" data-items_991="{$htmlbanners10.items_991}" data-items_768="{$htmlbanners10.items_768}" data-items_480="{$htmlbanners10.items_480}"{/if}>
        {foreach from=$htmlbanners10.slides item=slide name='htmlbanners10'}
          <div class="testimonials-item {$slide.customclass}">
            {if $slide.image_url && $slide.url}
            <a class="avatar-wrapper" href="{$slide.url}" {*title="{$slide.legend|escape}"*}>
            {else}
            <div class="avatar-wrapper">
            {/if}
            {if $slide.image_url}
            <img class="avatar" src="{$slide.image_url}" alt="{$slide.legend}">
            {/if}
                {if $slide.description}
                  <figcaption class="testimonials-description">
                      {$slide.description}
                  </figcaption>
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
  </div>
{/if}

