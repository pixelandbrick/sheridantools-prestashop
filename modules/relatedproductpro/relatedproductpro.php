<?php
/**
* Prestashop Addons | Module by: <App1Pro>
*
* @author    Chuyen Nguyen [App1Pro].
* @copyright Chuyenim@gmail.com
* @license   http://app1pro.com/license.txt
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

require_once(dirname(__FILE__).'/classes/RelatedProductProModel.php');

class RelatedProductPro extends Module
{
    public function __construct()
    {
        $this->name = 'relatedproductpro';
        $this->tab = 'advertising_marketing';
        $this->version = '2.7.0';
        $this->author = 'App1pro';
        $this->need_instance = 0;
        $this->need_upgrade = true;
        $this->module_key = '3ed0f4071376362d7a19d822a0ac1431';
        $this->bootstrap = true;

        parent::__construct();
        $this->displayName = $this->l('Related Products Pro');
        $this->description = $this->l('Create and manage your related products.');
        $this->confirmUninstall = $this->l('Are you sure you want to uninstall this module?');

        if (version_compare(_PS_VERSION_, '1.6.0.0 ', '<')) {
            $action = Tools::getValue('action');
            if ($action === 'AddProduct') {
                $this->ajaxProcessAddProduct();
            } elseif ($action === 'DeleteProduct') {
                $this->ajaxProcessDeleteProduct();
            } elseif ($action === 'UpdatePositions') {
                $this->ajaxProcessUpdatePositions();
            }
        }
    }

    public function install()
    {
        Configuration::updateValue('RELATEDPRODUCTPRO_TYPE', 0);
        Configuration::updateValue('RELATEDPRODUCTPRO_MAX', 10);
        Configuration::updateValue('RELATEDPRODUCTPRO_ISIZE', 2); // home_default, small_default, medium_default, large_default, cart_default
        Configuration::updateValue('RELATEDPRODUCTPRO_THEME', 1);
        Configuration::updateValue('RELATEDPRODUCTPRO_REVERSE', 0);

        Configuration::updateValue('RELATEDPRODUCTPRO_SL_PAGER', false);
        Configuration::updateValue('RELATEDPRODUCTPRO_SL_LOOP', false);
        Configuration::updateValue('RELATEDPRODUCTPRO_SL_AUTO', false);
        Configuration::updateValue('RELATEDPRODUCTPRO_SL_AUTO_CONTROL', false);
        Configuration::updateValue('RELATEDPRODUCTPRO_SL_WIDTH', 0);
        Configuration::updateValue('RELATEDPRODUCTPRO_SL_MARGIN', 30);

        if (!parent::install()
            || !$this->registerHook('displayHeader')
            || !$this->registerHook('displayBackOfficeHeader')
            || !$this->registerHook('displayAdminProductsExtra')
            || !$this->registerHook('actionProductDelete')
            || !$this->registerHook('displayFooterProduct')) {
                return false;
        }

        require_once(dirname(__FILE__).'/sql/install.php');

        return true;
    }

    public function uninstall()
    {
        Configuration::deleteByName('RELATEDPRODUCTPRO_TYPE');
        Configuration::deleteByName('RELATEDPRODUCTPRO_MAX');
        Configuration::deleteByName('RELATEDPRODUCTPRO_ISIZE');
        Configuration::deleteByName('RELATEDPRODUCTPRO_THEME');
        Configuration::deleteByName('RELATEDPRODUCTPRO_REVERSE');

        Configuration::deleteByName('RELATEDPRODUCTPRO_SL_PAGER');
        Configuration::deleteByName('RELATEDPRODUCTPRO_SL_LOOP');
        Configuration::deleteByName('RELATEDPRODUCTPRO_SL_AUTO');
        Configuration::deleteByName('RELATEDPRODUCTPRO_SL_AUTO_CONTROL');
        Configuration::deleteByName('RELATEDPRODUCTPRO_SL_WIDTH');
        Configuration::deleteByName('RELATEDPRODUCTPRO_SL_MARGIN');

        require_once(dirname(__FILE__).'/sql/uninstall.php');
        return parent::uninstall();
    }

    public function hookDisplayHeader()
    {
        $this->context->controller->addCSS(($this->_path).'views/css/style.css', 'all');
        // $this->context->controller->addCSS(($this->_path).'views/css/product_list.css', 'all');
        $controller = Tools::getValue('controller');

        if ($controller === 'product' && Configuration::get('RELATEDPRODUCTPRO_THEME') == 3) {
            if (version_compare(_PS_VERSION_, '1.7.0.0', '>=')) {
                $this->context->controller->addJquery();
                $this->context->controller->addJqueryPlugin('bxslider');
            }
            $this->context->controller->addJS(($this->_path).'views/js/slider-config.js');
        }
    }

    public function hookdisplayBackOfficeHeader()
    {
        $controller = Tools::getValue('controller');
        if ($controller === 'AdminProducts') {
            $this->context->controller->addCSS(($this->_path).'views/css/admin.css', 'all');
            $this->context->controller->addJquery();

            if (version_compare(_PS_VERSION_, '1.7.6.0', '>=')) {
                $this->context->controller->addJS(($this->_path).'views/js/jquery-3.4.1.min.js');
            }
            
            if (version_compare(_PS_VERSION_, '1.7.0.0', '>=')) {
                $this->context->controller->addJS(($this->_path).'views/js/script-17.min.js');
            } else {
                $this->context->controller->addJS(($this->_path).'views/js/script.min.js');
            }
            $this->context->controller->addJqueryUI('ui.sortable');
        }
    }

    public function ajaxProcessUpdateSettings()
    {
        $id_product = (int)Tools::getValue('id_product');
        $model = new RelatedProductProModel($id_product, $this->context->shop->id);
        $is_custom = (int)Tools::getValue('is_custom');
        $id_type = (int)Tools::getValue('id_type');
        $model->saveCustomSettings($is_custom, $id_type);
        die('Ok');
    }

    public function ajaxProcessAddProduct()
    {
        $id_product = (int)Tools::getValue('id_product');
        $related = new RelatedProductProModel($id_product, $this->context->shop->id);
        $related->id_related = Tools::getValue('id_related');
        $related->position = $related->getHighestPosition() + 1;
        if (!$related->id_related) {
            die('Error id_related');
        }

        if ($related->addRelatedProduct()) {
            if (Configuration::get('RELATEDPRODUCTPRO_REVERSE')) {
                $other_related = array();
                $related_pros = $related->getRelatedProducts(true, 0, true);
                foreach ($related_pros as $product) {
                    if ($product['id_product'] != $related->id_related) {
                        $other_related[] = $product['id_product'];
                    }
                }
                foreach ($other_related as $id_new_related) {
                    $reverse_related = new RelatedProductProModel($related->id_related, $this->context->shop->id);
                    $reverse_related->id_related = $id_new_related;
                    $reverse_related->position = $reverse_related->getHighestPosition() + 1;
                    $reverse_related->addRelatedProduct();
                }
            }
            die('Ok');
        }

        die('Error');
    }

    public function ajaxProcessDeleteProduct()
    {
        $id_product = (int)Tools::getValue('id_product');
        $related = new RelatedProductProModel($id_product, $this->context->shop->id);
        $related->id_related = Tools::getValue('id_related');
        if (!$related->id_related) {
            die('Error id_related');
        }
        if ($related->deleteOne()) {
            die('Ok');
        }
        die('Error');
    }

    public function ajaxProcessUpdatePositions()
    {
        $id_product = (int)Tools::getValue('id_product');
        $related_ids = Tools::getValue('related_ids');
        $result = true;

        $related = new RelatedProductProModel($id_product, $this->context->shop->id);
        foreach ($related_ids as $position => $id_related) {
            $related->id_related = $id_related;
            $related->position = $position;
            $result &= $related->updatePosition();
        }
        if ($result) {
            die('Ok');
        }
        die('Error');
    }

    public function ajaxProcessExport()
    {
        $model = new RelatedProductProModel();
        $data = $model->getAll();
        // pd($data);

        header('Content-Encoding: UTF-8');
        header('Content-type: text/csv; charset=UTF-8');
        header('Content-Disposition: attachment; filename=related-product-'.date('Y-d-m_His').'.csv');
        header('Pragma: no-cache');
        header('Expires: 0');
        $fp = fopen('php://output', 'w');

        if (!empty($data)) {
            fputcsv($fp, array_keys($data[0]));
            foreach ($data as $fields) {
                fputcsv($fp, $fields);
            }
        }

        fclose($fp);
        exit();
    }

    public function ajaxProcessExportRef()
    {
        $model = new RelatedProductProModel();
        $data = $model->getAllByRef();
        // pd($data);

        header('Content-Encoding: UTF-8');
        header('Content-type: text/csv; charset=UTF-8');
        header('Content-Disposition: attachment; filename=related-product-'.date('Y-d-m_His').'.csv');
        header('Pragma: no-cache');
        header('Expires: 0');
        $fp = fopen('php://output', 'w');

        if (!empty($data)) {
            fputcsv($fp, array_keys($data[0]));
            foreach ($data as $fields) {
                fputcsv($fp, $fields);
            }
        }

        fclose($fp);
        exit();
    }

    public function hookDisplayAdminProductsExtra($params)
    {
        //$id_product = (int)$params['id_product'];
        $id_product = Tools::getValue('id_product') ? (int)Tools::getValue('id_product') : (int)$params['id_product'];
        if ($id_product) {
            $stores = Shop::getContextListShopID();
            if (count($stores) > 1) {
                return $this->l('Please select shop!');
            }

            $id_shop = (isset($stores[0]) ? $stores[0] : 1);
            $relateds = new RelatedProductProModel($id_product, $id_shop);
            $custom_setting = $relateds->getCustomSettings();
            $product_data = $relateds->getRelatedProducts(Configuration::get('RELATEDPRODUCTPRO_REVERSE'), 0, true);
            $module_ajax_url = $this->context->link->getAdminLink('AdminModules', true).'&configure='.$this->name.'&module_name='.$this->name.'&ajax=true';

            if (version_compare(_PS_VERSION_, '1.7.6.0', '>=')) {
                $remote_url = 'index.php?controller=AdminProducts&action=productsList&forceJson=1&limit=20&ajax=1&token='.Tools::getAdminTokenLite('AdminProducts');
            } else {
                $remote_url = 'ajax_products_list.php?forceJson=1&limit=20';
            }

            if (version_compare(_PS_VERSION_, '1.6.0.0 ', '>=')) {
                $remote_url = $this->context->link->getAdminLink('', false).$remote_url;
            }

            $types_list = array(
                0 => 'Manually',
                1 => 'Automatically (using tags)',
                4 => 'Automatically (using tags) - Custom',
                2 => 'Category',
                3 => 'Category (included parents)',
            );

            $this->smarty->assign(
                array(
                    'custom_setting' => $custom_setting,
                    'types_list' => $types_list,
                    'related_products' => $product_data,
                    'id_product' => $id_product,
                    'module_ajax_url' => $module_ajax_url,
                    'id_shop' => $id_shop,
                    'remote_url' => $remote_url,
                    'link_to_setting' => $this->context->link->getAdminLink('AdminModules').'&configure=relatedproductpro'
                )
            );

            return $this->display(__FILE__, '/views/templates/admin/adminproducttab.tpl');
        } else {
            return $this->l('Please save this product!');
        }
    }

    public function hookActionProductDelete($params)
    {
        $id_product = (int)$params['product']->id;
        if ($id_product) {
            Db::getInstance()->Execute('DELETE FROM `'._DB_PREFIX_.'product_related_pro`
                    WHERE `id_product` = '.(int)$id_product.' OR `id_related` = '.(int)$id_product);
        }
    }

    public function hookDisplayLeftColumn($params)
    {
        $id_product = (int)Tools::getValue('id_product');
        if ($id_product) {
            return $this->hookDisplayFooterProduct($params);
        }
    }

    public function hookDisplayRightColumn($params)
    {
        $id_product = (int)Tools::getValue('id_product');
        if ($id_product) {
            return $this->hookDisplayFooterProduct($params);
        }
    }

    public function hookDisplayProductTab()
    {
        return $this->display(__file__, '/views/templates/hooks/product_tab.tpl');
    }

    public function hookDisplayProductTabContent($params)
    {
        return $this->hookDisplayFooterProduct($params);
    }

    public function hookDisplayProductAdditionalInfo($params)
    {
        return $this->hookDisplayFooterProduct($params);
    }

    public function hookDisplayFooterProduct($params)
    {
        $id_product = (int)Tools::getValue('id_product');
        $id_shop = 1;
        if (!is_null(Shop::getContextShopID())) {
            $id_shop = Shop::getContextShopID();
        }

        $relateds = new RelatedProductProModel($id_product, $id_shop);
        $custom_setting = $relateds->getCustomSettings();
        $id_type = (!empty($custom_setting) && $custom_setting['is_custom']) ? (int)$custom_setting['id_type'] : (int)Configuration::get('RELATEDPRODUCTPRO_TYPE');
        $product_data = $relateds->getRelatedProducts(Configuration::get('RELATEDPRODUCTPRO_REVERSE'), $id_type);
        if ((int)Configuration::get('RELATEDPRODUCTPRO_MAX') > 0) {
            $product_data = array_slice($product_data, 0, (int)Configuration::get('RELATEDPRODUCTPRO_MAX'));
        }

        $products = array();
        $imagestype = new ImageType(Configuration::get('RELATEDPRODUCTPRO_ISIZE'));
        $i = 1;

        if (version_compare(_PS_VERSION_, '1.7.0.0 ', '>=')) {
            // prepare the products
            $products = $this->prepareMultipleProductsForTemplate(
                $product_data
            );
        } else {
            foreach ($product_data as $product) {
                //$product = new Product($addon['id_related'], true, $this->context->language->id);
                $p = $relateds->getProductData($product['id_product']);
                if (!empty($p)) {
                    $products[] = $p;
                }
                $i++;
            }
        }

        if (!empty($products)) {
            $this->context->smarty->assign(array(
                'slide_pager' => Configuration::get('RELATEDPRODUCTPRO_SL_PAGER'),
                'slide_infiniteLoop' => Configuration::get('RELATEDPRODUCTPRO_SL_LOOP'),
                'slide_auto' => Configuration::get('RELATEDPRODUCTPRO_SL_AUTO'),
                'slide_hideControlOnEnd' => Configuration::get('RELATEDPRODUCTPRO_SL_AUTO_CONTROL'),
                'slide_slideWidth' => Configuration::get('RELATEDPRODUCTPRO_SL_WIDTH'),
                'slide_slideMargin' => Configuration::get('RELATEDPRODUCTPRO_SL_MARGIN'),
                'products' => $products,
                'homeSize' => Image::getSize($imagestype->name),
                'image_size' => $imagestype->name,
                ));

            if (Configuration::get('RELATEDPRODUCTPRO_THEME') == 3) {
                if (version_compare(_PS_VERSION_, '1.7.0.0 ', '>=')) {
                    return $this->display(__file__, '/views/templates/hooks/ps17_productfooter_slide.tpl');
                } else {
                    return $this->display(__file__, '/views/templates/hooks/productfooter_slide.tpl');
                }
            } elseif (Configuration::get('RELATEDPRODUCTPRO_THEME') == 2) {
                if (version_compare(_PS_VERSION_, '1.7.0.0 ', '>=')) {
                    return $this->display(__file__, '/views/templates/hooks/ps17_productfooter_modern.tpl');
                } else {
                    return $this->display(__file__, '/views/templates/hooks/productfooter_modern.tpl');
                }
            } else {
                if (version_compare(_PS_VERSION_, '1.7.0.0 ', '>=')) {
                    return $this->display(__file__, '/views/templates/hooks/ps17_productfooter_classic.tpl');
                } else {
                    return $this->display(__file__, '/views/templates/hooks/productfooter_classic.tpl');
                }
            }
        }

        return null;
    }

    private function getFactory()
    {
        return new ProductPresenterFactory($this->context, new TaxConfiguration());
    }

    protected function getProductPresentationSettings()
    {
        return $this->getFactory()->getPresentationSettings();
    }

    protected function getProductPresenter()
    {
        return $this->getFactory()->getPresenter();
    }

    private function prepareProductForTemplate(array $rawProduct)
    {
        $product = (new ProductAssembler($this->context))
            ->assembleProduct($rawProduct)
            ;

        $presenter = $this->getProductPresenter();
        $settings = $this->getProductPresentationSettings();

        return $presenter->present(
            $settings,
            $product,
            $this->context->language
        );
    }

    protected function prepareMultipleProductsForTemplate(array $products)
    {
        return array_map(array($this, 'prepareProductForTemplate'), $products);
    }

    public function getContent()
    {
        return $this->postProcess().$this->displayInfos().$this->renderForm().$this->renderForm2().$this->renderForm3();
    }

    private function displayInfos()
    {
        $this->context->smarty->assign(array(
                'link_to_product' => $this->context->link->getAdminLink('AdminProducts')
        ));

        return $this->display(__FILE__, '/views/templates/admin/infos.tpl');
    }

    public function postProcess()
    {
        if (Tools::isSubmit('submitRPPConf')) {
            Configuration::updateValue('RELATEDPRODUCTPRO_TYPE', Tools::getValue('RELATEDPRODUCTPRO_TYPE'));
            Configuration::updateValue('RELATEDPRODUCTPRO_MAX', Tools::getValue('RELATEDPRODUCTPRO_MAX'));
            Configuration::updateValue('RELATEDPRODUCTPRO_ISIZE', Tools::getValue('RELATEDPRODUCTPRO_ISIZE'));
            Configuration::updateValue('RELATEDPRODUCTPRO_THEME', Tools::getValue('RELATEDPRODUCTPRO_THEME'));
            Configuration::updateValue('RELATEDPRODUCTPRO_REVERSE', Tools::getValue('RELATEDPRODUCTPRO_REVERSE'));

            $this->_clearCache('/views/templates/hooks/productfooter.tpl');
            return $this->displayConfirmation($this->l('The settings have been updated.'));
        } elseif (Tools::isSubmit('submitSlideConf')) {
            Configuration::updateValue('RELATEDPRODUCTPRO_SL_PAGER', Tools::getValue('RELATEDPRODUCTPRO_SL_PAGER'));
            Configuration::updateValue('RELATEDPRODUCTPRO_SL_LOOP', Tools::getValue('RELATEDPRODUCTPRO_SL_LOOP'));
            Configuration::updateValue('RELATEDPRODUCTPRO_SL_AUTO', Tools::getValue('RELATEDPRODUCTPRO_SL_AUTO'));
            Configuration::updateValue('RELATEDPRODUCTPRO_SL_AUTO_CONTROL', Tools::getValue('RELATEDPRODUCTPRO_SL_AUTO_CONTROL'));
            Configuration::updateValue('RELATEDPRODUCTPRO_SL_WIDTH', Tools::getValue('RELATEDPRODUCTPRO_SL_WIDTH'));
            Configuration::updateValue('RELATEDPRODUCTPRO_SL_MARGIN', Tools::getValue('RELATEDPRODUCTPRO_SL_MARGIN'));

            $this->_clearCache('/views/templates/hooks/productfooter.tpl');
            return $this->displayConfirmation($this->l('The slide settings have been updated.'));
        } elseif (Tools::isSubmit('submitImportConf')) {
            // Import related products from CSV file.
            if (!empty($_FILES['import_file']) && $_FILES['import_file']['error'] == 0) {
                $file = $_FILES['import_file']['tmp_name'];
                $link_type = Tools::getValue('link_type');
                $id_shop = $this->context->shop->id;
                $count = 0;

                if (($handle = fopen($file, 'r')) !== false) {
                    while (($data = fgetcsv($handle)) !== false) {
                        if ($link_type == 0) {
                            if (empty($data) || !isset($data[0]) || !is_numeric($data[0])) {
                                continue;
                            }
                            $related = new RelatedProductProModel($data[0], $data[2]);
                            $related->id_related = $data[1];
                            if (isset($data[3])) {
                                $related->position = $data[3];
                            }
                            
                            if ($related->isExist()) {
                                continue;
                            }
                
                            if ($related->addRelatedProduct()) {
                                $count++;
                            }
                        } elseif ($link_type == 1) {
                            if (empty($data) || !isset($data[0]) || !isset($data[2])) {
                                continue;
                            }

                            $related = new RelatedProductProModel();
                            $id_product = $related->getProductIdByReference($data[0]);
                            $id_related = $related->getProductIdByReference($data[1]);
                            if ($id_product && $id_related) {
                                $related = new RelatedProductProModel($id_product, $data[2]);
                                $related->id_related = $id_related;
                                $related->position = isset($data[3]) ? $data[3] : 0;

                                if ($related->isExist()) {
                                    continue;
                                }

                                if ($related->addRelatedProduct()) {
                                    $count++;
                                }
                            }
                        }
                    }
                    fclose($handle);
                }
                return $this->displayConfirmation(sprintf($this->l('There are %s related products been added/updated.'), $count));
            }
        }

        return '';
    }

    public function renderForm()
    {
        $type_radio = 'radio';
        if (version_compare(_PS_VERSION_, '1.6.0.0 ', '>=')) {
            $type_radio = 'switch';
        }

        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Settings'),
                    'icon' => 'icon-cogs'
                ),
                'input' => array(
                    array(
                        'type' => 'radio',
                        'label' => $this->l('Type to display?'),
                        'name' => 'RELATEDPRODUCTPRO_TYPE',
                        'required' => true,
                        'class' => 't',
                        'br' => true,
                        'values' => array(
                            array(
                                'id' => 'level_0',
                                'value' => 0,
                                'label' => $this->l('Manually')
                            ),
                            array(
                                'id' => 'level_1',
                                'value' => 1,
                                'label' => $this->l('Automatically (using tags)')
                            ),
                            array(
                                'id' => 'level_4',
                                'value' => 4,
                                'label' => $this->l('Automatically (using tags) - Custom')
                            ),
                            array(
                                'id' => 'level_2',
                                'value' => 2,
                                'label' => $this->l('Category')
                            ),
                            array(
                                'id' => 'level_3',
                                'value' => 3,
                                'label' => $this->l('Category (included parents)')
                            )
                        )
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Max of related products'),
                        'name' => 'RELATEDPRODUCTPRO_MAX',
                        'size' => 50
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->l('Size of thumbnails'), // home_default, small_default, medium_default, large_default, cart_default
                        'name' => 'RELATEDPRODUCTPRO_ISIZE',
                        'class' => 't',
                        'options' => array(
                                'query' => ImageType::getImagesTypes('products'),
                                'id' => 'id_image_type',
                                'name' => 'name'
                        ),
                        'desc' => $this->l('Only applies to "Classic" style')
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->l('Display Style'), // Classic, Modern
                        'name' => 'RELATEDPRODUCTPRO_THEME',
                        'class' => 't',
                        'options' => array(
                                'query' => array(
                                        array(
                                            'id' => 1,
                                            'title' => 'Classic'
                                        ),
                                        array(
                                            'id' => 2,
                                            'title' => 'Modern'
                                        ),
                                        array(
                                            'id' => 3,
                                            'title' => 'Slide (NEW)'
                                        )
                                ),
                                'id' => 'id',
                                'name' => 'title'
                        )
                    ),
                    array(
                        'type' => $type_radio,
                        'label' => $this->l('Reverse'),
                        'name' => 'RELATEDPRODUCTPRO_REVERSE',
                        'is_bool' => true,
                        'class' => 't',
                        'values' => array(
                                    array(
                                        'id' => 'reverse_on',
                                        'value' => true,
                                        'label' => $this->l('Enabled')
                                    ),
                                    array(
                                        'id' => 'reverse_off',
                                        'value' => false,
                                        'label' => $this->l('Disabled')
                                    )
                        ),
                        'desc' => $this->l('A relate to B <-> B relate to A.')
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                )
            ),
        );

        if (version_compare(_PS_VERSION_, '1.6.0.0 ', '<')) {
            $fields_form['form']['submit']['class'] = 'button';
        }

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        //$this->fields_form = array();
        $helper->id = (int)Tools::getValue('id_carrier');
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitRPPConf';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
                .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id
        );

        return $helper->generateForm(array($fields_form));
    }

    public function getConfigFieldsValues()
    {
        $fields = array();

        $fields['RELATEDPRODUCTPRO_TYPE'] = Tools::getValue('RELATEDPRODUCTPRO_TYPE', Configuration::get('RELATEDPRODUCTPRO_TYPE'));
        $fields['RELATEDPRODUCTPRO_MAX'] = Tools::getValue('RELATEDPRODUCTPRO_MAX', Configuration::get('RELATEDPRODUCTPRO_MAX'));
        $fields['RELATEDPRODUCTPRO_ISIZE'] = Tools::getValue('RELATEDPRODUCTPRO_ISIZE', Configuration::get('RELATEDPRODUCTPRO_ISIZE'));
        $fields['RELATEDPRODUCTPRO_THEME'] = Tools::getValue('RELATEDPRODUCTPRO_THEME', Configuration::get('RELATEDPRODUCTPRO_THEME'));
        $fields['RELATEDPRODUCTPRO_REVERSE'] = Tools::getValue('RELATEDPRODUCTPRO_REVERSE', Configuration::get('RELATEDPRODUCTPRO_REVERSE'));

        return $fields;
    }

    public function renderForm2()
    {
        $type_radio = 'radio';
        if (version_compare(_PS_VERSION_, '1.6.0.0 ', '>=')) {
            $type_radio = 'switch';
        }

        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Slide Settings'),
                    'icon' => 'icon-cogs'
                ),
                'description' => $this->l('Only available when display style is "Slide".'),
                'input' => array(
                    array(
                        'type' => $type_radio,
                        'label' => $this->l('Pager'),
                        'name' => 'RELATEDPRODUCTPRO_SL_PAGER',
                        'is_bool' => true,
                        'class' => 't',
                        'values' => array(
                                    array(
                                        'id' => 'pager_on',
                                        'value' => true,
                                        'label' => $this->l('Enabled')
                                    ),
                                    array(
                                        'id' => 'pager_off',
                                        'value' => false,
                                        'label' => $this->l('Disabled')
                                    )
                        ),
                        'desc' => $this->l('If "true", a pager will be added. Default: No')
                    ),
                    array(
                        'type' => $type_radio,
                        'label' => $this->l('Infinite Loop'),
                        'name' => 'RELATEDPRODUCTPRO_SL_LOOP',
                        'is_bool' => true,
                        'class' => 't',
                        'values' => array(
                                    array(
                                        'id' => 'infinite_on',
                                        'value' => true,
                                        'label' => $this->l('Enabled')
                                    ),
                                    array(
                                        'id' => 'infinite_off',
                                        'value' => false,
                                        'label' => $this->l('Disabled')
                                    )
                        ),
                        'desc' => $this->l('infiniteLoop. If true, clicking "Next" while on the last slide will transition to the first slide. Default: No')
                    ),
                    array(
                        'type' => $type_radio,
                        'label' => $this->l('Auto'),
                        'name' => 'RELATEDPRODUCTPRO_SL_AUTO',
                        'is_bool' => true,
                        'class' => 't',
                        'values' => array(
                                    array(
                                        'id' => 'auto_on',
                                        'value' => true,
                                        'label' => $this->l('Enabled')
                                    ),
                                    array(
                                        'id' => 'auto_off',
                                        'value' => false,
                                        'label' => $this->l('Disabled')
                                    )
                        ),
                        'desc' => $this->l('Slides will automatically transition. Default: No')
                    ),
                    array(
                        'type' => $type_radio,
                        'label' => $this->l('hide Control On End'),
                        'name' => 'RELATEDPRODUCTPRO_SL_AUTO_CONTROL',
                        'is_bool' => true,
                        'class' => 't',
                        'values' => array(
                                    array(
                                        'id' => 'control_on',
                                        'value' => true,
                                        'label' => $this->l('Enabled')
                                    ),
                                    array(
                                        'id' => 'control_off',
                                        'value' => false,
                                        'label' => $this->l('Disabled')
                                    )
                        ),
                        'desc' => $this->l('hideControlOnEnd. Default: No')
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Image width'),
                        'name' => 'RELATEDPRODUCTPRO_SL_WIDTH',
                        'size' => 50,
                        'desc' => $this->l('0 => auto'),
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Image margin'),
                        'name' => 'RELATEDPRODUCTPRO_SL_MARGIN',
                        'size' => 50,
                        'desc' => $this->l('Default: 30'),
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                )
            ),
        );

        if (version_compare(_PS_VERSION_, '1.6.0.0 ', '<')) {
            $fields_form['form']['submit']['class'] = 'button';
        }

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        //$this->fields_form = array();
        $helper->id = (int)Tools::getValue('id_carrier');
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitSlideConf';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
                .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFieldsValues2(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id
        );

        return $helper->generateForm(array($fields_form));
    }

    public function getConfigFieldsValues2()
    {
        $fields = array();

        $fields['RELATEDPRODUCTPRO_SL_PAGER'] = Tools::getValue('RELATEDPRODUCTPRO_SL_PAGER', Configuration::get('RELATEDPRODUCTPRO_SL_PAGER'));
        $fields['RELATEDPRODUCTPRO_SL_LOOP'] = Tools::getValue('RELATEDPRODUCTPRO_SL_LOOP', Configuration::get('RELATEDPRODUCTPRO_SL_LOOP'));
        $fields['RELATEDPRODUCTPRO_SL_AUTO'] = Tools::getValue('RELATEDPRODUCTPRO_SL_AUTO', Configuration::get('RELATEDPRODUCTPRO_SL_AUTO'));
        $fields['RELATEDPRODUCTPRO_SL_AUTO_CONTROL'] = Tools::getValue('RELATEDPRODUCTPRO_SL_AUTO_CONTROL', Configuration::get('RELATEDPRODUCTPRO_SL_AUTO_CONTROL'));
        $fields['RELATEDPRODUCTPRO_SL_WIDTH'] = Tools::getValue('RELATEDPRODUCTPRO_SL_WIDTH', Configuration::get('RELATEDPRODUCTPRO_SL_WIDTH'));
        $fields['RELATEDPRODUCTPRO_SL_MARGIN'] = Tools::getValue('RELATEDPRODUCTPRO_SL_MARGIN', Configuration::get('RELATEDPRODUCTPRO_SL_MARGIN'));

        return $fields;
    }

    public function renderForm3()
    {
        $link_export_id = $this->context->link->getAdminLink('AdminModules', true).'&configure='.$this->name.'&ajax=true&action=export';
        $link_export_ref = $this->context->link->getAdminLink('AdminModules', true).'&configure='.$this->name.'&ajax=true&action=exportRef';

        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Import/Export'),
                    'icon' => 'icon-cogs'
                ),
                'description' => $this->l('Download related products pro data in CSV format').'</a>:<br/>
                <a href="'.$link_export_id.'" target=_bank>'.$this->l('+ Linked by ID').'</a><br/>
                <a href="'.$link_export_ref.'" target=_bank>'.$this->l('+ Linked by Reference').'</a>',
                'input' => array(
                    array(
                        'type' => 'file',
                        'label' => $this->l('Import from CSV file'),
                        'name' => 'import_file',
                        'size' => 50,
                        'lang' => false
                    ),
                    array(
                        'type' => 'radio',
                        'label' => $this->l('Type of Relationship'),
                        'name' => 'link_type',
                        'required' => true,
                        'class' => 't',
                        'br' => true,
                        'values' => array(
                            array(
                                'id' => 'link_0',
                                'value' => 0,
                                'label' => $this->l('Linked by ID')
                            ),
                            array(
                                'id' => 'link_1',
                                'value' => 1,
                                'label' => $this->l('Linked by reference')
                            ),
                        )
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                )
            ),
        );


        if (version_compare(_PS_VERSION_, '1.6.0.0 ', '<')) {
            $fields_form['form']['submit']['class'] = 'button';
        }

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        //$this->fields_form = array();
        $helper->id = (int)Tools::getValue('id_carrier');
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitImportConf';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
                .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'fields_value' => array(
                'link_type' => 0
            ),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id
        );

        return $helper->generateForm(array($fields_form));
    }
}
