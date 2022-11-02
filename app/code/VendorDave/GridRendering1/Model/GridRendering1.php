<?php

namespace VendorDave\GridRendering1\Model;

use Magento\Framework\Model\AbstractModel;

class GridRendering1 extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\VendorDave\GridRendering1\Model\ResourceModel\GridRendering1::class);
    }
}
