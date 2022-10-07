<?php

namespace VendorDave\ModelsBasics1\Model\ResourceModel\ModelBasics1;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        // arguments are Model and ResourceModel
        $this->_init(
            \VendorDave\ModelsBasics1\Model\ModelBasics1::class,
            \VendorDave\ModelsBasics1\Model\ResourceModel\ModelBasics1::class
        );
    }
}
