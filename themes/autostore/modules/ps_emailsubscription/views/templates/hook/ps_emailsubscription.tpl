{*
* 2007-2017 PrestaShop
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
*  @copyright  2007-2017 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<div class="block_newsletter links wrapper">
    {if $msg}
    <p class="alert {if $nw_error}alert-danger{else}alert-success{/if}">
      {$msg}
    </p>
    {/if}
<div class="newsletter-inner">
  <p class="h3 text-uppercase hidden-md-down">{l s='Subscribe' d='Modules.Emailsubscription.Shop'}</p>
  <div class="block_newsletter_list">
    <!-- Begin Mailchimp Signup Form -->
    <form action="https://sheridantools.us4.list-manage.com/subscribe/post?u=066d82b43c99113dd9a798eec&amp;id=9a1391c954" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">

      <div class="mc-field-group">
        <div class="input-wrapper">
          <input name="EMAIL" type="email" class="required email form-control" id="mce-EMAIL" placeholder="Email Address" value="">
        <div id="mce-responses" class="clear">
          <div class="response" id="mce-error-response" style="display:none"></div>
          <div class="response" id="mce-success-response" style="display:none"></div>
        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_066d82b43c99113dd9a798eec_9a1391c954" tabindex="-1" value=""></div>
        <!--<div class="clear button"><input class="btn fill btn-submit font-arrow-right" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" ></div>-->
        <button
        class="btn fill btn-submit font-arrow-right"
        name="submitNewsletter"
        type="submit"
        id="mc-embedded-subscribe"
        >
        <span>{l s='Subscribe' d='Modules.Emailsubscription.Shop'}</span>
        </button>
      </div>
    </div>
  </form>
  </div>

<!--End mc_embed_signup-->


<!--<p class="h3 text-uppercase hidden-md-down">{l s='Subscribe' d='Modules.Emailsubscription.Shop'}</p>
<div class="block_newsletter_list">
{*{if $conditions}
<p class="conditions">{$conditions}</p>
{/if}*}
<div class="form">
<form action="{$urls.pages.index}#footer" method="post">
{if isset($id_module)}
{hook h='displayGDPRConsent' id_module=$id_module}
{/if}
<div class="input-wrapper">
<input
class="form-control"
name="email"
type="email"
value="{$value}"
placeholder="{l s='Your email address' d='Shop.Forms.Labels'}">
<input type="hidden" name="action" value="0">
<button
class="btn fill btn-submit font-arrow-right"
name="submitNewsletter"
type="submit"
>
<span>{l s='Subscribe' d='Modules.Emailsubscription.Shop'}</span>
</button>
</div>
</form>
</div>
-->

  </div>
  </div>
</div>
