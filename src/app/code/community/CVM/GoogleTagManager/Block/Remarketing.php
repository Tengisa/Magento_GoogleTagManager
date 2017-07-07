<?php

/**
 * Class CVM_GoogleTagManager_Block_Remarketing
 */

class CVM_GoogleTagManager_Block_Remarketing extends Mage_Catalog_Block_Product_View_Abstract
{

    public function getRemarketingConfig()
    {
        $storeId = Mage::app()->getStore()->getId();
        return Mage::getStoreConfig("google/googleremarketing", $storeId);
    }

}