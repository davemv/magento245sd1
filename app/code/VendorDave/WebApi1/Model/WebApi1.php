<?php

namespace VendorDave\WebApi1\Model;

use Magento\Framework\Model\AbstractModel;

class WebApi1 extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\VendorDave\WebApi1\Model\ResourceModel\WebApi1::class);
    }
}
