<?php
class Excellence_User_Block_User extends Mage_Catalog_Block_Product_List{
    protected function _getProductCollection() {
        $this->_productCollection = Mage::getModel("catalog/product")->getCollection()->addAttributeToFilter('customerproduct', array('eq' => 1))->addAttributeToSelect('*') ->setOrder('entity_id', 'DESC')->setPageSize(10);
        return $this->_productCollection;
    }
}

?>