<?php
class  Lybe_DisableCheckout_Model_Product extends Mage_Catalog_Model_Product
{
    public function isSaleable()
    {
        return false;
    }

}