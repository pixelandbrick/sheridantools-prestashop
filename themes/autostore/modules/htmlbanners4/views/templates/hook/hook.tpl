{*
* 2007-2018 PrestaShop
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
*  @copyright  2007-2018 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{if $htmlbanners4.slides}
    {foreach from=$htmlbanners4.slides item=slide name='htmlbanners4'}
      <div class="links {$slide.customclass}">
        <p class="h3 hidden-md-down">{$slide.title}</p>
        <div class="title clearfix hidden-lg-up" data-target="#footer_block_{$smarty.foreach.htmlbanners4.iteration}" data-toggle="collapse">
            <span class="h3">{$slide.title}</span>
            <span class="pull-xs-right">
              <span class="navbar-toggler collapse-icons">
                <i class="material-icons add">&#xE313;</i>
                <i class="material-icons remove">&#xE316;</i>
              </span>
            </span>
        </div>
        <div id="footer_block_{$smarty.foreach.htmlbanners4.iteration}" class="collapse" aria-expanded="false">
            {if $slide.description}
                {$slide.description nofilter}
            {/if}
        </div>
      </div>
    {/foreach}
{/if}

