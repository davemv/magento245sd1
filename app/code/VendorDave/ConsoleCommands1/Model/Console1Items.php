<?php

namespace VendorDave\ConsoleCommands1\Model;

use Magento\Framework\Model\AbstractModel;

class Console1Items extends AbstractModel
{
    protected function _construct()
    {
        // $this->_init(\VendorDave\ModelsBasics1\Model\ResourceModel\ModelBasics1::class);
        $this->_init(\VendorDave\ConsoleCommands1\Model\ResourceModel\Console1Items::class);
    }
}
