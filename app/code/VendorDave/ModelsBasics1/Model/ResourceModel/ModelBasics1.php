<?php

namespace VendorDave\ModelsBasics1\Model\ResourceModel;

use Magento\Framework\Model\ResourceMOdel\Db\AbstractDb;

class ModelBasics1 extends AbstractDb
{
    protected function _construct()
    {
        // table name (main table) and primary key
        $this->_init('model_basics1', 'id');
    }
}
