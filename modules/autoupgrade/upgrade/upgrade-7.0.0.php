<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * Manually remove the dashboardZoneOne hook.
 *
 * @return bool
 */
function upgrade_module_7_0_0($module)
{
    // Update the 'AdminSelfUpgrade' tab configuration
    $id_tab = \Tab::getIdFromClassName('AdminSelfUpgrade');
    if ($id_tab) {
        $tab = new \Tab($id_tab);
        $tab->icon = 'arrow_upward';
    } else {
        // If the tab doesn't exist, create it
        $tab = new \Tab();
        $tab->class_name = 'AdminSelfUpgrade';
        $tab->module = 'autoupgrade';
        $tab->id_parent = (int) \Tab::getIdFromClassName('CONFIGURE');
        $tab->icon = 'arrow_upward';
    }

    foreach (\Language::getLanguages(false) as $lang) {
        $tab->name[(int) $lang['id_lang']] = 'Update assistant';
    }

    if (!$tab->save()) {
        return false;
    }

    return true;
}
