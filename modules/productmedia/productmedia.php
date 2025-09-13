<?php
/**
 * Product Media main file
 *
 * 2007-2015 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2015 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

/**
 * Class ProductMedia
 */
class ProductMedia extends Module
{
    private $_table;

    public function __construct()
    {
        if (_PS_VERSION_ >= '1.5') {
            $this_context = Context::getContext();
            $this->id_shop = $this_context->shop->id;
        } else {
            $this->id_shop = 0;
        }
        $this->name = 'productmedia';
        $this->version = '1.2.7';
        $this->tab = 'Products';
        $this->author = 'PrestaShop';
        $this->module_key = 'f6d331ba044fbcd7f4cc40ec2186729f';
        $this->author_address = '0x64aa3c1e4034d07015f639b0e171b0d7b27d01aa';
        parent::__construct();

        /** Backward compatibility */
        require(_PS_MODULE_DIR_.'/productmedia/backward_compatibility/backward.php');

        $this->displayName = $this->l('Product Media');
        $this->description = $this->l('The module allows you to import your own audio and video files and display them on your product pages.');

        $this->_table = _DB_PREFIX_.'product_media';
    }

    /**
     * @return bool
     */
    public function install()
    {
        if (!Db::getInstance()->Execute('
    CREATE TABLE IF NOT EXISTS `'.$this->_table.'` (
        `id_media` INT UNSIGNED NOT NULL AUTO_INCREMENT,
        `id_product` INT UNSIGNED NOT NULL,
        `id_shop` INT UNSIGNED NOT NULL,
        `label` VARCHAR(200) NOT NULL,
        `url_media` TEXT NOT NULL,
        `type` VARCHAR(3) NOT NULL,
        PRIMARY KEY (`id_media`)
    ) ENGINE = MYISAM')) {
            return false;
        }
        return (parent::install());
    }

    /**
     * @return bool
     */
    public function uninstall()
    {
        Db::getInstance()->Execute('DROP TABLE IF EXISTS `'.$this->_table.'`');
        return parent::uninstall();
    }

    public function sentTemplateToHook($param)
    {
        global $smarty;

            $id_product = Tools::getValue('id_product');
            $medias = $this->_getMediaByProduct($id_product);

            $smarty->assign(array(
                'medias' => $medias,
                'url' => __PS_BASE_URI__.'modules/'.$this->name.'/'
            ));
            return $this->display(__FILE__, 'views/templates/front/productmedia.tpl');
    }

    /**
     * @param $param
     *
     * @return string
     */
    public function hookProductFooter($param)
    {
        return $this->sentTemplateToHook($param);
    }

    /**
     * @param $param
     *
     * @return string
     */
    public function hookLeftColumn($param)
    {
        return $this->sentTemplateToHook($param);
    }

    /**
     * @param $param
     *
     * @return string
     */
    public function hookRightColumn($param)
    {
        return $this->sentTemplateToHook($param);
    }

    /**
     * @param $param
     *
     * @return string
     */
    public function hookDisplayRightColumnProduct($param)
    {
        return $this->sentTemplateToHook($param);
    }

    public function hookDisplayProductAdditionalInfo($param)
    {
        return $this->sentTemplateToHook($param);        
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->_getForm().$this->_getList().$this->_getHooks().$this->_getFaq();
    }

    /**
     * Handle the registration/unregistration of hooks
     *
     * @return string
     * @throws PrestaShopException
     */
    private function _selectHooks()
    {
        $errors = 0;
        $availableHooks = array('productfooter', 'leftcolumn', 'rightcolumn', 'displayRightColumnProduct', 'displayProductAdditionalInfo');
        foreach ($availableHooks as $hook) {
            if (Tools::isSubmit($hook)) {
                !$this->registerHook($hook) ? $errors++ : '';
            } else {
                !$this->unregisterHook($hook) ? $errors++ : '';
            }
        }

        if ($errors != 0) {
            return $this->displayError($this->l('An error occured during the hook registration. One of the selected hook may not be available in your PrestaShop version'));
        } else {
            return $this->displayConfirmation($this->l('Hooks registration went well'));
        }
    }

    /**
     * Main form
     * @return string
     */
    private function _getForm()
    {
        global $currentIndex;

        $return = '';
        if (!is_writable(dirname(__FILE__).'/uploads')) {
            $return .= '<div class="warning bold">'.dirname(__FILE__).'/uploads '.$this->l('must be writable').'</div>';
        }
        if (Tools::isSubmit('submitProductMedia2') && !Tools::isSubmit('submitProductMedia')) {
            $return .= $this->displayError($this->l('Your host did not received your file, please check max_post_size and upload_max_filesize in a phpinfo().'));
        }
        if (Tools::isSubmit('submitProductMedia')) {
            $return .= $this->_save();
        }
        if (Tools::isSubmit('deleteMedia')) {
            $return .= $this->_delete();
        }

        $return .=
            '<style>
                #faqs dt, #faqs dd { padding: 0 0 0 50px }
                #faqs dt { font-size:1.5em; color: #9d9d9d; cursor: pointer; height: 37px; line-height: 37px; margin: 0 0 30px 25px}
                #faqs dd { font-size: 1em; margin: 0 0 20px 25px}
                #faqs dt { background: url('.__PS_BASE_URI__.'modules/'.$this->name.'/views/img/expand-icon.png'.') no-repeat left}
                #faqs .expanded { background: url('.__PS_BASE_URI__.'modules/'.$this->name.'/views/img/expanded-icon.png'.') no-repeat left}
                table, th, td {
                    border: 1px solid black;
                    text-align: center;
                }
                td {
                    padding: 5px;
                }
                thead {
                    background-color: #2ECC71;
                }
            </style>';
        $return .=
            '<script type="text/javascript">
                $(document).ready(function(){
                    $("#faqs dd").hide();
                    $("#faqs dt").click(function () {
                        $(this).next("#faqs dd").slideToggle(500);
                        $(this).toggleClass("expanded");
                    });
                });
            </script>';

        $return .= '<h2>'.$this->l('Product Media Configuration').'</h2>
    <form method="post" enctype="multipart/form-data" action="'.$currentIndex.'&token='.Tools::getValue('token').'&configure=productmedia&submitProductMedia2">
        <fieldset><legend><img src="'.__PS_BASE_URI__.'modules/'.$this->name.'/views/img/add.png" alt="" /> '.$this->l('Add media').'</legend>
            <label for="product">'.$this->l('Product').':</label>
            <div class="margin-form">
                <select name="product[]" id="product" multiple>
                '.$this->_getOptionsProducts().'
                </select>
                <p style="font-size:10px;color:#7F7F7F;">'.$this->l('You can select multiple items by pressing CTRL key (or CMD for mac users)').'</p>
            </div>
            <label for="label">'.$this->l('Label').':</label>
            <div class="margin-form">
                <input type="text" name="label" id="label" value="'.htmlentities(Tools::getValue('label'), ENT_QUOTES, 'UTF-8').'" />
            </div>
            <label>'.$this->l('Type').':</label>
            <div class="margin-form">
                <input type="radio" name="type" id="type_mp3" style="vertical-align:middle;" value="mp3" '.(Tools::getValue('type') == 'mp3' ? 'checked="checked"' : (!Tools::isSubmit('type') ? 'checked="checked"' : '')).' /> <label class="t" for="type_mp3">'.$this->l('Music').'</label>
                <input type="radio" name="type" id="type_video" style="vertical-align:middle;" value="video" '.(Tools::getValue('type') == 'video' ? 'checked="checked"' : '').' /> <label class="t" for="type_video">'.$this->l('Video').'</label>
            </div>
            <label for="file">'.$this->l('File').':</label>
            <div class="margin-form">
                <input type="file" name="file" id="file" />
                <p style="font-size:10px;color:#7F7F7F;">'.$this->l('Music file must be at format mp3').'<br />'.$this->l('Video file must be at format mp4').'</p>
            </div>
            <p class="center"><input type="submit" class="button" name="submitProductMedia" value="'.$this->l('Save').'" /></p>
            <p style="font-size:10px;color:#7F7F7F;">'.$this->l('All fields are required').'</p>
        </fieldset>
    </form><br />';

        return $return;
    }

    /**
     * List existing medias
     * @return string
     */
    private function _getList()
    {
        global $cookie;

        $html = '<h2>'.$this->l('Medias').'</h2>
    <fieldset><legend><img src="'.__PS_BASE_URI__.'modules/'.$this->name.'/views/img/media.png" alt="" /> '.$this->l('List of medias').'</legend>';
        if (sizeof($medias = $this->_getMedia())) {
            $html .= '
        <table style="width:100%;">
            <tr>
                <td style="width:40%;"><b>'.$this->l('Label').'</b></td>
                <td style="width:40%;"><b>'.$this->l('Product').'</b></td>
                <td style="width:10%;"><b>'.$this->l('Type').'</b></td>
                <td style="width:10%;text-align:center;"><b>'.$this->l('Delete').'</b></td>
            </tr>';

            foreach ($medias as $media) {
                $html .= '<tr>
                <td style="width:40%;">'.htmlentities($media['label'], ENT_QUOTES, 'UTF-8').'</td>
                <td style="width:40%;">'.htmlentities($media['product_name'], ENT_QUOTES, 'UTF-8').'</td>
                <td style="width:10%;">'.$media['type'].'</td>
                <td style="width:10%;text-align:center;"><a href="index.php?tab=AdminModules&configure=productmedia&token='.Tools::getAdminToken('AdminModules'.(int)Tab::getIdFromClassName('AdminModules').(int)$cookie->id_employee).'&deleteMedia&id_media='.$media['id_media'].'"><img src="'.__PS_BASE_URI__.'modules/'.$this->name.'/views/img/delete.png" alt="" /></a></td>
            </tr>';
            }
            $html .= '</table>';
        } else {
            $html .= '<p>'.$this->l('No media found').'</p>';
        }
        $html .= '</fieldset>';
        return $html;
    }

    /**
     * Shows the hook selection form
     * @return string
     */
    private function _getHooks()
    {
        $html = '';
        global $currentIndex;

        $html .= '<h2>'.$this->l('Hooks').'</h2>
    <fieldset><legend><img src="'.__PS_BASE_URI__.'modules/'.$this->name.'/views/img/hook.png" alt="" /> '.$this->l('Hooks').'</legend>';
        if (Tools::isSubmit('selectHooks')) {
            $html .= $this->_selectHooks();
        }
        $html.= '<h3>'.$this->l('Choose the position of medias on your product pages:').'</h3>';
        if (version_compare(_PS_VERSION_, '1.7', '<')) {
            $html .= '<form method="post" enctype="multipart/form-data" action="'.$currentIndex.'&token='.Tools::getValue('token').'&configure=productmedia">
        <input type="checkbox" name="productfooter" value="productfooter" '.($this->isRegisteredInHook('displayFooterProduct') || $this->isRegisteredInHook('productfooter') ? 'checked="checked"' : '').'> '.$this->l('Bottom of product page').'<br>
        <input type="checkbox" name="leftcolumn" value="leftcolumn" '.($this->isRegisteredInHook('displayLeftColumn')|| $this->isRegisteredInHook('leftColumn') ? 'checked="checked"' : '').'> '.$this->l('Left-hand column of product page').'<br>
        <input type="checkbox" name="rightcolumn" value="rightcolumn" '.($this->isRegisteredInHook('displayRightColumn')|| $this->isRegisteredInHook('rightColumn') ? 'checked="checked"' : '').'> '.$this->l('Right-hand column of product page').'<br>
        <input type="checkbox" name="displayRightColumnProduct" value="displayRightColumnProduct" '.($this->isRegisteredInHook('displayRightColumnProduct') ? 'checked="checked"' : '').'> '.$this->l('Center of product page').'<br>
        <input type="submit" class="button" name="selectHooks" value="'.$this->l('Save').'">
        </form>';
        } else {
            $html .= '<form method="post" enctype="multipart/form-data" action="'.$currentIndex.'&token='.Tools::getValue('token').'&configure=productmedia">
        <input type="checkbox" name="productfooter" value="productfooter" '.($this->isRegisteredInHook('displayFooterProduct') || $this->isRegisteredInHook('productfooter') ? 'checked="checked"' : '').'> '.$this->l('Bottom of product page').'<br>
        <input type="checkbox" name="leftcolumn" value="leftcolumn" '.($this->isRegisteredInHook('displayLeftColumn')|| $this->isRegisteredInHook('leftColumn') ? 'checked="checked"' : '').'> '.$this->l('Left-hand column of product page').'<br>
        <input type="checkbox" name="rightcolumn" value="rightcolumn" '.($this->isRegisteredInHook('displayRightColumn')|| $this->isRegisteredInHook('rightColumn') ? 'checked="checked"' : '').'> '.$this->l('Right-hand column of product page').'<br>
        <input type="checkbox" name="displayProductAdditionalInfo" value="displayProductAdditionalInfo" '.($this->isRegisteredInHook('DisplayProductAdditionalInfo') ? 'checked="checked"' : '').'> '.$this->l('Center of product page').'<br>
        <input type="submit" class="button" name="selectHooks" value="'.$this->l('Save').'">
        </form>';
        }
        $html .= '</fieldset>';

        return $html;
    }

    /**
     * Shows the FAQs
     * @return string
     */
    private function _getFaq()
    {
        $html = '<h2>'.$this->l('FAQ').'</h2>
    <fieldset><legend><img src="'.__PS_BASE_URI__.'modules/'.$this->name.'/views/img/questionmark.png" alt="" /> '.$this->l('FAQ').'</legend>';
        $html.= '<dl id="faqs">
<dt>'.$this->l('What is the label useful for?').'</dt>
<dd>'.$this->l('The label is useful for two reasons: first, it allows you to name your multimedia file and identify it more easily in the list of uploaded files; second, it is displayed above the media on the product page and gives more information on the product: description, artist name, playing time, etc.').'</dd>

<dt>'.$this->l('What type of technology is used for the module?').'</dt>
<dd>'.$this->l('The module works with the Html5 technology which ensures an optimal use on mobile, tablet and on all web browsers.').'</dd>

<dt>'.$this->l('What audio and video formats am I able to upload?').'</dt>
<dd>'.$this->l('Thanks to this module, you can upload audio files in mp3 format and video files in mp4 format. We recommend you to import rather small files (max 10-15MO) so that they don’t slow down your web store.').'</dd>

<dt>'.$this->l('How can I change the position of my audio/video files on my product pages?').'</dt>
<dd>'.$this->l('The four possible positions for your video and audio files are associated with the following hooks:').'
<table>
  <thead>
      <tr>
          <td>'.$this->l('Media position').'</td>
          <td>'.$this->l('Associated hook').'</td>
      </tr>
  </thead>
  <tbody>
      <tr>
          <td>'.$this->l('Left-hand column of product page').'</td>
          <td>Displayleftcolumn</td>
      </tr>
      <tr>
          <td>'.$this->l('Right-hand column of product page').'</td>
          <td>Displayrightcolumn</td>
      </tr>
      <tr>
          <td>'.$this->l('Center of product page').'</td>
          <td>Displayrightcolumnproduct</td>
      </tr>
      <tr>
          <td>'.$this->l('Bottom of page').'</td>
          <td>Displayproducttab<br>Displaytproducttabcontent</td>
      </tr>
  </tbody>
</table>'.$this->l('Depending on the theme, the right-hand and left-hand columns may not be visible by default. To change this, go to Preferences > Themes > Advanced parameters. Depending on what you want, make the left or right-hand column the default positioning by choosing "YES." In column appearance, activate the column you want for the "product" line.
Several modules can be located in the same hook. In Modules and Services > Positions, you can access the list of hooks and change the position of the modules within a hook. Drag and drop the Product Media module above or below the other modules.').'</dd>

<dt>'.$this->l('I have tried to import a multimedia file. The module reported the following error: "Your host did not received your file, please check max_post_size and upload_max_filesize in a phpinfo()." What should I do?').'</dt>
<dd>'.$this->l('This issue usually comes from your PHP configuration. To make your media compatible, please open the file php.ini in the directory of your server, then look for \'upload_max_filesize\'. Now, check its limit value (usually set to 2Mo) and increase it to the desired value. If you use a shared server, you might not have access to your php.ini file. In this case, we invite you to get in contact with your host so that he can make the change.').'</dd>

<dt>'.$this->l('Is it possible to assign a file to several products of my catalog?').'</dt>
<dd>'.$this->l('You can assign each file to one or different products at the same time or import several files for one single product.').'</dd>

</dl>';
        $html .= '</fieldset>';

        return $html;
    }

    /**
     * Fetch products in database
     * @return string
     */
    private function _getOptionsProducts()
    {
        global $cookie;

        $option = '';
        $products = Product::getProducts($cookie->id_lang, 0, 0, 'name', 'ASC', false, true);
        foreach ($products as $product) {
            $option .= '<option value="'.$product['id_product'].'" '.(Tools::getValue('product') == $product['id_product'] ? 'selected' : '').'>'.htmlentities($product['name'] . ' (#'.$product['id_product'].')', ENT_QUOTES, 'UTF-8').'</option>';
        }
        return $option;
    }

    /**
     * Fetch medias
     * @return array|false|mysqli_result|null|PDOStatement|resource
     * @throws PrestaShopDatabaseException
     */
    private function _getMedia()
    {
        global $cookie;

        $req = '
    SELECT pm.*, pl.`name` AS `product_name`
    FROM `'.$this->_table.'` pm
    LEFT JOIN `'._DB_PREFIX_.'product_lang` pl ON (pl.`id_product` = pm.`id_product`)
    WHERE pm.`id_shop` = '.(int)$this->id_shop;
        if (_PS_VERSION_ >= '1.5') {
            $req .= ' AND pl.`id_shop` = '.(int)$this->id_shop;
        }
        $req .= ' AND pl.`id_lang` = '.(int)$cookie->id_lang;
        return Db::getInstance()->ExecuteS($req);
    }

    /**
     * @param $id_product
     *
     * @return array|false|mysqli_result|null|PDOStatement|resource
     * @throws PrestaShopDatabaseException
     */
    private function _getMediaByProduct($id_product)
    {
        return Db::getInstance()->Executes('SELECT * FROM `'.$this->_table.'` WHERE `id_shop` = '.(int)$this->id_shop.' AND `id_product` = '.(int)$id_product);
    }

    /**
     * @return string
     */
    private function _save()
    {
        if ((int)Tools::getValue('product') == 0) {
            return $this->displayError($this->l('Product is null'));
        }
        if (Tools::getValue('label') == null) {
            return $this->displayError($this->l('Label is empty'));
        }
        if (!isset($_FILES['file']) || $_FILES['file']['name'] == null) {
            return $this->displayError($this->l('File is empty'));
        }

        $type = 'audio/mpeg';
        if (Tools::getValue('type') == 'video') {
            $type = array('video/x-flv', 'video/mp4');
        }

        if (!isset($_FILES['file']['tmp_name']) || $_FILES['file']['tmp_name'] == null) {
            return $this->displayError($this->l('Upload failed. Error: ').$_FILES['file']['error']);
        }

        $typeFile = $this->_isCorrectType($_FILES['file'], $type);
        if (!$typeFile) {
            return $this->displayError($this->l('File is incorrect type'));
        }

        if ($typeFile == 'video/x-flv') {
            $ext = '.flv';
        } elseif ($typeFile == 'video/mp4') {
            $ext = '.mp4';
        } elseif ($typeFile == 'audio/mpeg') {
            $ext = '.mp3';
        }

        $name = md5(uniqid().rand(0, 10)).$ext;
        $url = __PS_BASE_URI__.'modules/'.$this->name.'/uploads/'.$name;
        if (!move_uploaded_file($_FILES['file']['tmp_name'], dirname(__FILE__).'/uploads/'.$name)) {
            return $this->displayError($this->l('Can\'t moved file'));
        }
        foreach (Tools::getValue('product') as $product) {
            if (!Db::getInstance()->Execute('
    INSERT INTO `'.$this->_table.'` (`id_product`, `label`, `id_shop`, `url_media`, `type`)
    VALUES ('.(int)$product.', \''.pSQL(Tools::getValue('label')).'\', \''.pSQL($this->id_shop).'\', \''.pSQL($url).'\', \''.pSQL(Tools::getValue('type')).'\')')) {
                $return = $this->displayError($this->l('SQL error on save'));
            } else {
                $return = $this->displayConfirmation($this->l('Media saved with success'));
            }
        }
        return $return;
    }

    /**
     * @return string
     */
    private function _delete()
    {
        if (!$media = $this->_getUrlMediaById((int)Tools::getValue('id_media'))) {
            return $this->displayError($this->l('No media for this ID'));
        }

        if (!Db::getInstance()->Execute('DELETE FROM `'.$this->_table.'` WHERE `id_shop` = '.(int)$this->id_shop.' AND `id_media` = '.(int)Tools::getValue('id_media'))) {
            return $this->displayError($this->l('Delete fail'));
        }

        // Medias using the current URL
        $remaining = $this->_getMediasByUrl($media['url_media']);
        if (empty($remaining)) {
            unlink(dirname(__FILE__).str_replace(__PS_BASE_URI__.'modules/'.$this->name.'/', '/', $media['url_media']));
        }

        return $this->displayConfirmation($this->l('Media deleted with success'));
    }

    /**
     * @param $id_media
     *
     * @return array|bool|null|object
     */
    private function _getUrlMediaById($id_media)
    {
        if ((int)$id_media == 0) {
            return false;
        }
        return Db::getInstance()->getRow('SELECT * FROM `'.$this->_table.'` WHERE `id_shop` = '.(int)$this->id_shop.' AND `id_media` = '.(int)$id_media);
    }

    /**
     * @param $url
     *
     * @return array|false|mysqli_result|null|PDOStatement|resource
     * @throws PrestaShopDatabaseException
     */
    private function _getMediasByUrl($url)
    {
        return Db::getInstance()->executeS('SELECT `id_media` FROM `'.$this->_table.'` WHERE `id_shop`='.(int)$this->id_shop.' AND `url_media`=\''.pSQL($url).'\' AND NOT(id_media='.(int)Tools::getValue('id_media').')');
    }

    /**
     * @param $file
     * @param $type
     *
     * @return bool|mixed|string
     */
    private function _isCorrectType($file, $type)
    {
        if (function_exists('finfo_open')) {
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mime_type = finfo_file($finfo, $file['tmp_name']);
            finfo_close($finfo);
        } elseif (function_exists('mime_content_type')) {
            $mime_type = mime_content_type($file['tmp_name']);
        } elseif (function_exists('exec')) {
            $mime_type = trim(exec('file -b --mime-type '.escapeshellarg($file['tmp_name'])));
        }

        if (empty($mime_type) || $mime_type == 'regular file') {
            $mime_type = $file['type'];
        }
        if (($pos = strpos($mime_type, ';')) !== false) {
            $mime_type = Tools::substr($mime_type, 0, $pos);
        }

        if (is_array($type) && in_array($mime_type, $type)) {
            return $mime_type;
        }
        if ($mime_type == $type) {
            return $mime_type;
        }
        if (Tools::substr($file['name'], -4) == '.flv') {
            return 'video/x-flv';
        }
        if (Tools::substr($file['name'], -4) == '.mp4') {
            return 'video/mp4';
        }
        if (Tools::substr($file['name'], -4) == '.mp3') {
            return 'audio/mpeg';
        }
        return false;
    }
}
