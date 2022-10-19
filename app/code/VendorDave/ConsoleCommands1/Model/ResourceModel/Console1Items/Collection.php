<?php

namespace VendorDave\ConsoleCommands1\Model\ResourceModel\Console1Items;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        // arguments are Model and ResourceModel
        $this->_init(
            // \VendorDave\ModelsBasics1\Model\ModelBasics1::class,
            // \VendorDave\ModelsBasics1\Model\ResourceModel\ModelBasics1::class
            \VendorDave\ConsoleCommands1\Model\Console1Items::class,
            \VendorDave\ConsoleCommands1\Model\ResourceModel\Console1Items::class
        );
    }
}
