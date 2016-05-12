<?php

class Lybe_DisableCheckout_Block_Product_Abstract extends Mage_Catalog_Block_Product_Abstract
{
    public function getPriceHtml($product, $displayMinimalPrice = false, $idSuffix = '')
    {
        return "";
    }
}