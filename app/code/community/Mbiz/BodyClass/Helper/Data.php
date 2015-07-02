<?php
/**
 * This file is part of Mbiz_BodyClass for Magento.
 *
 * @license All rights reserved
 * @author Jacques Bodin-Hullin <j.bodinhullin@monsieurbiz.com> <@jacquesbh>
 * @category Mbiz
 * @package Mbiz_BodyClass
 * @copyright Copyright (c) 2015 Monsieur Biz (http://monsieurbiz.com/)
 */

/**
 * Data Helper
 * @package Mbiz_BodyClass
 */
class Mbiz_BodyClass_Helper_Data extends Mage_Core_Helper_Abstract
{

// Monsieur Biz Tag NEW_CONST

// Monsieur Biz Tag NEW_VAR

    /**
     * Retrieve the current store code as a css class
     * @return string
     */
    public function getStoreClass()
    {
        return 'store-' . Mage::app()->getStore()->getCode();
    }

// Monsieur Biz Tag NEW_METHOD

}