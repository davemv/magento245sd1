<?php

namespace VendorDave\ModelsBasics1\Model;

use Magento\Framework\Model\AbstractModel;

class ModelBasics1 extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\VendorDave\ModelsBasics1\Model\ResourceModel\ModelBasics1::class);
    }
}
