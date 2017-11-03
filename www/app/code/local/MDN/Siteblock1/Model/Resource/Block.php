<?php

/**
 * Created by PhpStorm.
 * User: kafa
 * Date: 03.11.2017
 * Time: 15:14
 */
class MDN_Siteblock1_Model_Resource_Block extends Mage_Core_Model_Mysql4_Abstract {
    public function _construct()
    {
        $this->_init('siteblock1/block', 'block_id');
    }
}