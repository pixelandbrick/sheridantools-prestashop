{assign var=_counter value=0}
{function name="menu" nodes=[] depth=0 parent=null}
    {if $nodes|count}
      <ul class="top-menu{if $depth == 1 && $node.image_urls} has-thumbnails{/if}" {if $depth == 0}id="top-menu"{/if} data-depth="{$depth}">
        {foreach from=$nodes item=node}
            <li class="{$node.type}{if $node.current} current {/if}" id="{$node.page_identifier}">
            {assign var=_counter value=$_counter+1}
              <a
                class="{if $depth >= 0}dropdown-item{/if}{if $depth === 1} dropdown-submenu{/if} {if $node.children|count}with-ul{/if}"
                href="{$node.url}" data-depth="{$depth}"
                {if $node.open_in_new_window} target="_blank" {/if}
              >
                {$node.label}
                {if $node.children|count}
                  {* Cannot use page identifier as we can have the same page several times *}
                  {assign var=_expand_id value=10|mt_rand:100000}
                    <span data-target="#top_sub_menu_{$_expand_id}" data-toggle="collapse" class="hidden-lg-up navbar-toggler collapse-icons">
                      <i class="material-icons add">&#xE313;</i>
                      <i class="material-icons remove">&#xE316;</i>
                    </span>
                {/if}
                {if $depth == 0 && $node.current}
                <span class="menu-line"></span>
                {/if}
              </a>
              {if $depth == 0 }
              <span class="sep">&bull;</span>
              {/if}
              {if $node.children|count}
              <div {if $depth === 0} class="popover sub-menu js-sub-menu submenu collapse"{else} class="collapse submenu"{/if} id="top_sub_menu_{$_expand_id}">
              {if $depth === 0}
              	<div class="inner-wrapper">
              {/if}
                {menu nodes=$node.children depth=$node.depth parent=$node}
                {if $node.image_urls && $depth === 0}
                <div class="menu-thumbnails">
                  {**
                  {foreach from=$node.image_urls item=image_url}
                  **}
<div class="thumbnail">
<div class="thumbnail-img">
<div class="top-banner">
<a class="banner-link" href="/6-cutting-tools">
<figure>
<img class="img-banner" alt="Cutting Tools" src="/modules/htmlbanners1/views/img/upload/e723e06f13f3898715c31c4195d86852acac1afd_top_banner_cutting_tools.jpg">
<figcaption class="banner-description">
<div class="description">
<p class="title-one">Cutting Tools</p>
<p>Even &amp; accurate dissections…</p>
</div>
</figcaption>
</figure>
</a>
</div>
</div>
</div>

<div class="thumbnail">
<div class="thumbnail-img">
<div class="top-banner">
<a class="banner-link" href="/9-bending-tools">
<figure>
<img class="img-banner" alt="Bending Tools" style="max-width:none;" src="/modules/htmlbanners1/views/img/upload/b2cbb589b0d73730453d8c9be2334ee48c33855f_top_banner_bending_tools.jpg">
<figcaption class="banner-description">
<div class="description">
<p class="title-one">Bending Tools</p>
<p>Immaculate &amp; meticulous shaping…</p>
</div>
</figcaption>
</figure>
</a>
</div>
</div>
</div>

<div class="thumbnail">
<div class="thumbnail-img">
<div class="top-banner">
<a class="banner-link" href="/3-seaming-tools">
<figure>
<img class="img-banner" alt="Seaming Tools" style="max-width:215px;" src="/modules/htmlbanners1/views/img/upload/56b070131b94f62c0ba08690ef257a725113c8c3_top_banner_seaming_tools.jpg">
<figcaption class="banner-description">
<div class="description">
<p class="title-one">Seaming Tools</p>
<p>Clean &amp; impervious joining…</p>
</div>
</figcaption>
</figure>
</a>
</div>
</div>
</div>

                  {**
                  {/foreach}
                  **}
                </div>
                {/if}
                {if $depth === 0}
                </div>
                {/if}
              </div>
              {/if}
            </li>
        {/foreach}
      </ul>
    {/if}
{/function}

<div class="main-menu col-md-9 js-top-menu position-static hidden-md-down" id="_desktop_top_menu">
    {menu nodes=$menu.children}
</div>
