<?php

namespace VendorDave\WebApi1\Model\ResourceModel\WebApi1;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        // arguments are Model and ResourceModel
        $this->_init(
            \VendorDave\WebApi1\Model\WebApi1::class,
            \VendorDave\WebApi1\Model\ResourceModel\WebApi1::class
        );
    }
}
