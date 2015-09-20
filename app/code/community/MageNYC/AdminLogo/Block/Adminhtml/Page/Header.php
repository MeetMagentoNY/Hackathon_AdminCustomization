<?php
/**
 * Created by PhpStorm.
 * User: maier
 * Date: 6/9/15
 * Time: 10:33 PM
 */ 
class MageNYC_AdminLogo_Block_Adminhtml_Page_Header extends Mage_Adminhtml_Block_Page_Header {
    public function __construct()
    {
       if (!Mage::getStoreConfigFlag(MageNYC_AdminLogo_Model_Config::USECUSTOMHEADER)) {
            return parent::__construct();
       }

        parent::__construct();
        $this->setTemplate('admindesign/header.phtml');
    }

    public function getHomeLink()
    {
        return $this->getUrl('adminhtml');
    }

    protected function getCustomLogo()
    {
        $fileName = Mage::getStoreConfig(MageNYC_AdminLogo_Model_Config::CUSTOMLOGO);

        if ($fileName) {
            $uploadDir = MageNYC_AdminLogo_Model_Adminhtml_System_Config_Backend_Adminlogo::UPLOAD_DIR;
            $fullFileName = Mage::getBaseDir('skin') . DS . $uploadDir . DS . $fileName;
            //Mage::log(sprintf('[%s]([%d]): FullFileName: [%s]',__METHOD__,__LINE__,$fullFileName));

            if (file_exists($fullFileName)) {
                return Mage::getBaseUrl('skin') . $uploadDir . '/' . $fileName;
            }
        }
        return Mage::getDesign()->getSkinUrl('images/logo.gif');
    }
    public function _getLogoAlt ()
    {
        return (bool) Mage::getStoreConfig(MageNYC_AdminLogo_Model_Config::ALTTEXT);
    }

    public function getLogoAlt ()
    {
        if ( !$this->_getLogoAlt() ) {
            return Mage::app()->getStore()->getName() . 'Logo';
        }
        return $this->__(Mage::getStoreConfig(MageNYC_AdminLogo_Model_Config::ALTTEXT));
    }

    public function _getLogoHeight ()
    {
        return (bool) Mage::getStoreConfig(MageNYC_AdminLogo_Model_Config::LOGOHEIGHT);
    }

    public function getLogoHeight ()
    {
        if ( !$this->_getLogoHeight() ) {
            return false;
        }
        return 'height="' . Mage::getStoreConfig(MageNYC_AdminLogo_Model_Config::LOGOHEIGHT) .'" ';
    }


}