<?php

class Lybe_DisableCheckout_Block_Product_List extends Mage_Catalog_Block_Product_List
{
    public function getPriceHtml($product, $displayMinimalPrice = false, $idSuffix = '')
    {
        return "";
    }
}