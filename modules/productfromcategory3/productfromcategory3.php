<?php
/**
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
* @author    PrestaShop SA    <contact@prestashop.com>
* @copyright 2007-2019 PrestaShop SA
* @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
* International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

use PrestaShop\PrestaShop\Adapter\Category\CategoryProductSearchProvider;
use PrestaShop\PrestaShop\Adapter\Image\ImageRetriever;
use PrestaShop\PrestaShop\Adapter\Product\PriceFormatter;
use PrestaShop\PrestaShop\Core\Product\ProductListingPresenter;
use PrestaShop\PrestaShop\Adapter\Product\ProductColorsRetriever;
use PrestaShop\PrestaShop\Adapter\Translator;
use PrestaShop\PrestaShop\Adapter\LegacyContext;
use PrestaShop\PrestaShop\Core\Product\Search\ProductSearchContext;
use PrestaShop\PrestaShop\Core\Product\Search\ProductSearchQuery;
use PrestaShop\PrestaShop\Core\Product\Search\SortOrder;

class ProductFromCategory3 extends Module
{
    public function __construct()
    {
        $this->name = 'productfromcategory3';
        $this->tab = 'front_office_features';
        $this->version = '1.0.1';
        $this->author = 'Prestahero';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array(
            'min' => '1.7.0.0',
            'max' => _PS_VERSION_,
        );

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->l('Products from selected category 3');
        $this->description = $this->l('Displays products from selected category.');

        if (@file_exists('../modules/' . $this->name . '/key.php')) {
            @require_once('../modules/' . $this->name . '/key.php');
        } else {
            if (@file_exists(dirname(__FILE__) . $this->name . '/key.php')) {
                @require_once(dirname(__FILE__) . $this->name . '/key.php');
            } else {
                if (@file_exists('modules/' . $this->name . '/key.php')) {
                    @require_once('modules/' . $this->name . '/key.php');
                }
            }
        }
    }

    public function inconsistency($return)
    {
        $return;
        return true;
    }

    public function install()
    {
        $this->_clearCache('*');
        Configuration::updateValue('PRODUCTFROMCATEGORY3_NBR', 8);
        Configuration::updateValue('PRODUCTFROMCATEGORY3_CAT', (int)Context::getContext()->shop->getCategory());
        Configuration::updateValue('PRODUCTFROMCATEGORY3_RANDOMIZE', false);
        $this->fillMultilangValues();
        return parent::install() && $this->registerHook('addproduct') && $this->registerHook('updateproduct') && $this->registerHook('deleteproduct') && $this->registerHook('categoryUpdate') && $this->registerHook('displayHeader')  && $this->registerHook('displayHomeTab') && $this->registerHook('displayHomeCustom');
    }

    public function fillMultilangValues()
    {
        $languages = Language::getLanguages(false);
        foreach ($this->getMultilangFields(false) as $name => $data) {
            foreach ($languages as $lang) {
                $key = Tools::strtoupper('PRODUCTFROMCATEGORY3_'.$name).'_'.$lang['id_lang'];
                $value = html_entity_decode($data[1]);
                Configuration::updateGlobalValue($key, $value);
            }
        }
        return true;
    }

    public function uninstall()
    {
        $this->_clearCache('*');

        return parent::uninstall();
    }

    private function updateLanguageField($field_name)
    {
        $lang_default = (int)Configuration::get('PS_LANG_DEFAULT');
        $field = array($lang_default => Tools::getValue('productfromcategory3_'.$field_name.'_'.$lang_default));
        $this->context->controller->getLanguages();
        foreach ($this->context->controller->_languages as $lang) {
            if ($lang['id_lang'] == $lang_default) {
                continue;
            }

            $field_value = Tools::getValue('productfromcategory3_'.$field_name.'_'.(int)$lang['id_lang']);
            if (!empty($field_value)) {
                $field[(int)$lang['id_lang']] = $field_value;
            } else {
                $field[(int)$lang['id_lang']] = $field[$lang_default];
            }
        }
        foreach ($this->context->controller->_languages as $lang) {
            Configuration::updateValue('PRODUCTFROMCATEGORY3_'.Tools::strtoupper($field_name).'_'.(int)$lang['id_lang'], $field[(int)$lang['id_lang']]);
        }
    }

    public static function psversion()
    {
        $version = _PS_VERSION_;
        $exp = $explode = explode(".", $version);
        $explode;
        return $exp[1];
    }

    public function getContent()
    {
        $output = '';
        $errors = array();
        if (Tools::isSubmit('submitProductFromCategory3')) {
            $nbr = Tools::getValue('PRODUCTFROMCATEGORY3_NBR');
            if (!Validate::isInt($nbr) || $nbr <= 0) {
                $errors[] = $this->l('The number of products is invalid. Please enter a positive number.');
            }

            $cat = Tools::getValue('PRODUCTFROMCATEGORY3_CAT');
            if (!Validate::isInt($cat) || $cat <= 0) {
                $errors[] = $this->l('The category ID is invalid. Please choose an existing category ID.');
            }

            $rand = Tools::getValue('PRODUCTFROMCATEGORY3_RANDOMIZE');
            if (!Validate::isBool($rand)) {
                $errors[] = $this->l('Invalid value for the "randomize" flag.');
            }
            if (isset($errors) && count($errors)) {
                $output = $this->displayError(implode('<br />', $errors));
            } else {
                Configuration::updateValue('PRODUCTFROMCATEGORY3_NBR', (int)$nbr);
                Configuration::updateValue('PRODUCTFROMCATEGORY3_CAT', (int)$cat);
                Configuration::updateValue('PRODUCTFROMCATEGORY3_RANDOMIZE', (bool)$rand);
                Tools::clearCache(Context::getContext()->smarty, $this->getTemplatePath('productfromcategory3.tpl'));
                $output = $this->displayConfirmation($this->l('Your settings have been updated.'));
            }
            foreach ($this->getMultilangFields() as $field_name) {
                $this->updateLanguageField($field_name);
            }
        }

        return $output . $this->renderForm();
    }


    public function getProducts()
    {
        $category = new Category((int)Configuration::get('PRODUCTFROMCATEGORY3_CAT'));
        $nProducts = Configuration::get('PRODUCTFROMCATEGORY3_NBR');

        if (Configuration::get('PRODUCTFROMCATEGORY3_RANDOMIZE') == 1) {
            $products_for_template = $category->getProducts($this->context->cookie->id_lang, 0, $nProducts, null, null, null, true, true, $nProducts);
        } else {
            $products_for_template = $category->getProducts($this->context->cookie->id_lang, 0, $nProducts);
        }

        return $products_for_template;
    }

    public function getMultilangFields($only_keys = true)
    {
        $fields = array(
            'category_name' => array(
                $this->l('Category name'),
                'Clutch parts',
            ),
        );
        return $only_keys ? array_keys($fields) : $fields;
    }

    public function hookAddProduct($params)
    {
        $this->_clearCache('*');
    }

    public function hookUpdateProduct($params)
    {
        $this->_clearCache('*');
    }

    public function hookDeleteProduct($params)
    {
        $this->_clearCache('*');
    }

    public function hookCategoryUpdate($params)
    {
        $this->_clearCache('*');
    }

    public function _clearCache($template, $cache_id = null, $compile_id = null)
    {
        $template;
        $cache_id;
        $compile_id;
        parent::_clearCache('productfromcategory3.tpl', 'productfromcategory3');
    }

    public function hookDisplayHeader()
    {
        if ($this->context->controller instanceof IndexControllerCore) {
            $this->context->controller->addJqueryPlugin('bxslider');
        }
    }

    public function hookdisplayHomeTab($params)
    {
        $this->smarty->assign($this->getAssignmentVariables());
        $multilang_array = array();
        foreach ($this->getMultilangFields() as $field_name) {
            $key = 'productfromcategory3_'.$field_name;
            $multilang_array[$key] = Configuration::get(Tools::strtoupper($key.'_'.$this->context->language->id));
        }
        $this->smarty->assign($multilang_array);
        return $this->display(__file__, 'tab.tpl');
    }

    public function prepareBlocksProducts($block)
    {
        $blocks_for_template =  array();
        $products_for_template =  array();

        $assembler = new ProductAssembler($this->context);
        $presenterFactory = new ProductPresenterFactory($this->context);
        $presentationSettings = $presenterFactory->getPresentationSettings();
        $presenter = new ProductListingPresenter(new ImageRetriever($this->context->link), $this->context->link, new PriceFormatter(), new ProductColorsRetriever(), $this->context->getTranslator());
        $products_for_template =  array();
        $blocks_for_template;
        if ($block) {
            foreach ($block as $rawProduct) {
                $products_for_template[] = $presenter->present($presentationSettings, $assembler->assembleProduct($rawProduct), $this->context->language);
            }
        }

        return $products_for_template;
    }


    public function hookdisplayHomeCustom($params)
    {
        $this->smarty->assign($this->getAssignmentVariables());
        $multilang_array = array();
        foreach ($this->getMultilangFields() as $field_name) {
            $key = 'productfromcategory3_'.$field_name;
            $multilang_array[$key] = Configuration::get(Tools::strtoupper($key.'_'.$this->context->language->id));
        }
        $this->smarty->assign($multilang_array);
        return $this->display(__FILE__, 'productfromcategory3.tpl');
    }

    public function getAssignmentVariables()
    {
        return array(
            'products' => $this->prepareBlocksProducts($this->getProducts()),
            'homeSize' => Image::getSize(ImageType::getFormattedName('home')),
            'allProductsLink' => Context::getContext()->link->getCategoryLink($this->getConfigFieldsValues()['PRODUCTFROMCATEGORY3_CAT']),
        );
    }


    public function renderForm()
    {

        $multilang_fields = array();
        foreach ($this->getMultilangFields(false) as $name => $data) {
            $multilang_fields[$name] = array(
                'type' => 'text',
                'label' => $data[0],
                'name' => 'productfromcategory3_'.$name,
                'lang' => true,
            );
        }

        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Settings'),
                    'icon' => 'icon-cogs',
                ),
                'description' => $this->l('To add products to your homepage, simply add them to the corresponding product category (default: "Home").'),
                'input' => array(
                    $multilang_fields['category_name'],
                    array(
                        'type' => 'text',
                        'label' => $this->l('Number of products to be displayed'),
                        'name' => 'PRODUCTFROMCATEGORY3_NBR',
                        'class' => 'fixed-width-xs',
                        'desc' => $this->l('Set the number of products that you would like to display on homepage (default: 8).'),
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Category from which to pick products to be displayed'),
                        'name' => 'PRODUCTFROMCATEGORY3_CAT',
                        'class' => 'fixed-width-xs',
                        'desc' => $this->l('Choose the category ID of the products that you would like to display on homepage (default: 2 for "Home").'),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Randomly display featured products'),
                        'name' => 'PRODUCTFROMCATEGORY3_RANDOMIZE',
                        'class' => 'fixed-width-xs',
                        'desc' => $this->l('Enable if you wish the products to be displayed randomly (default: no).'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Yes'),
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('No'),
                            ),
                        ),
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
        );

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $this->fields_form = array();
        $helper->id = (int)Tools::getValue('id_carrier');
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitProductFromCategory3';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false) . '&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $language = $this->context->controller->getLanguages();
        $field_values = $this->getConfigFieldsValues();
        foreach ($this->context->controller->_languages as $lang) {
            foreach ($this->getMultilangFields() as $field_name) {
                $field_name = 'productfromcategory3_'.$field_name;
                $configuration_key = Tools::strtoupper($field_name.'_'.$lang['id_lang']);
                $field_values[$field_name][$lang['id_lang']] = Configuration::get($configuration_key);
            }
        }
        $helper->tpl_vars = array(
            'fields_value' => $field_values,
            'languages' => $language,
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($fields_form));
    }

    public function getConfigFieldsValues()
    {
        return array(
            'PRODUCTFROMCATEGORY3_NBR' => Tools::getValue('PRODUCTFROMCATEGORY3_NBR', (int)Configuration::get('PRODUCTFROMCATEGORY3_NBR')),
            'PRODUCTFROMCATEGORY3_CAT' => Tools::getValue('PRODUCTFROMCATEGORY3_CAT', (int)Configuration::get('PRODUCTFROMCATEGORY3_CAT')),
            'PRODUCTFROMCATEGORY3_RANDOMIZE' => Tools::getValue('PRODUCTFROMCATEGORY3_RANDOMIZE', (bool)Configuration::get('PRODUCTFROMCATEGORY3_RANDOMIZE')),
        );
    }
}
