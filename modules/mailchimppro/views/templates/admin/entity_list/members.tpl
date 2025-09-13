{*
 * PrestaChamps
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Commercial License
 * you can't distribute, modify or sell this code
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file
 * If you need help please contact leo@prestachamps.com
 *
 * @author    Mailchimp
 * @copyright Mailchimp
 * @license   commercial
 *}
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>{l s='ID' mod='mailchimppro'}</th>
            <th>{l s='Email' mod='mailchimppro'}</th>
            <th>{l s='Email type' mod='mailchimppro'}</th>
            <th>{l s='Status' mod='mailchimppro'}</th>
            <th>{l s='IP signup' mod='mailchimppro'}</th>
            <th>{l s='Signup time' mod='mailchimppro'}</th>
            <th>{l s='IP Opt-in' mod='mailchimppro'}</th>
            <th>{l s='Language' mod='mailchimppro'}</th>
			<th>{l s='Tags' mod='mailchimppro'}</th>
            <th>{l s='VIP' mod='mailchimppro'}</th>			
        </tr>
        </thead>
        <tbody>
        {foreach $members as $member}
            <tr>

                <td>{$member.id|escape:'htmlall':'UTF-8'}</td>
                <td>{$member.email_address|escape:'htmlall':'UTF-8'}</td>
                <td>{$member.email_type|escape:'htmlall':'UTF-8'}</td>
                <td>
					<span class="member-status {$member.status|escape:'htmlall':'UTF-8'}">{$member.status|escape:'htmlall':'UTF-8'}</span>
				</td>
                <td>{$member.ip_signup|escape:'htmlall':'UTF-8'}</td>
                <td>{$member.timestamp_signup|escape:'htmlall':'UTF-8'}</td>
                <td>{$member.ip_opt|escape:'htmlall':'UTF-8'}</td>
                <td>{$member.language|escape:'htmlall':'UTF-8'}</td>
				<td>
					{if $member.tags_count}
						{foreach $member.tags as $tag}
							<span class="member-tag">{$tag.name|escape:'htmlall':'UTF-8'}</span>
						{/foreach}
					{else}
						—
					{/if}
				</td>
                <td>{$member.vip|escape:'htmlall':'UTF-8'}</td>
            </tr>
        {/foreach}
        </tbody>
    </table>
</div>