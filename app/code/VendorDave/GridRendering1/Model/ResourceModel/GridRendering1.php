<?php

namespace VendorDave\GridRendering1\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class GridRendering1 extends AbstractDb
{
    protected function _construct()
    {
        // table name (main table) and primary key
        $this->_init('gridrendering1', 'id');
    }
}
