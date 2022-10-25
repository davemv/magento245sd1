<?php

namespace VendorDave\WebApi1\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class WebApi1 extends AbstractDb
{
    protected function _construct()
    {
        // table name (main table) and primary key
        $this->_init('web_api1', 'id');
    }
}
