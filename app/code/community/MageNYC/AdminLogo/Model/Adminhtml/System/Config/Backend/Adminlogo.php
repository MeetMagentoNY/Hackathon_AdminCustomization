<?php
/**
 * Created by PhpStorm.
 * User: maier
 * Date: 6/10/15
 * Time: 2:48 AM
 */ 
class MageNYC_AdminLogo_Model_Adminhtml_System_Config_Backend_Adminlogo extends Mage_Adminhtml_Model_System_Config_Backend_Image {
    /**
     * The tail part of directory path for uploading
     */
    const UPLOAD_DIR                = 'adminhtml/default/default/adminlogo';

    /**
     * Token for the root part of directory path for uploading
     */

    /**
     * Upload max file size in kilobytes
     *
     * @var int
     */

    //TODO Make it a constant and add support for PHP Max FileSize
    protected $_maxFileSize         = 2048;

    /**
     * Return path to directory for upload file
     *
     * @return string
     */
    protected function _getUploadDir()
    {

        $uploadRoot = Mage::getBaseDir('skin');
        $uploadDir  = $uploadRoot . DS . (self::UPLOAD_DIR);
        return $uploadDir;
    }

}