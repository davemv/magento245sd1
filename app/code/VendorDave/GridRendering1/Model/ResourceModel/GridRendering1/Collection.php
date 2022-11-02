<?php

namespace VendorDave\GridRendering1\Model\ResourceModel\GridRendering1;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        // arguments are Model and ResourceModel
        $this->_init(
            \VendorDave\GridRendering1\Model\GridRendering1::class,
            \VendorDave\GridRendering1\Model\ResourceModel\GridRendering1::class
        );
    }
}
