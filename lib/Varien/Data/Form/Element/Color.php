<?php
/**
 * Form color element
 *
 * @category   Varien
 * @package    Varien_Data
 */
class Varien_Data_Form_Element_Color extends Varien_Data_Form_Element_Abstract
{
    public function __construct($attributes=array())
    {
        parent::__construct($attributes);
        $this->setType('color');
        $this->setExtType('colorfield');
    }

    public function getHtml()
    {
        $this->addClass('input-text');
        return parent::getHtml();
    }

    public function getHtmlAttributes()
    {
        return array('type', 'title', 'class', 'style', 'onclick', 'onchange', 'onkeyup', 'disabled', 'readonly', 'maxlength', 'tabindex');
    }
}
