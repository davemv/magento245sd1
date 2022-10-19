<?php

namespace VendorDave\ConsoleCommands1\Model\ResourceModel;

use Magento\Framework\Model\ResourceMOdel\Db\AbstractDb;

class Console1Items extends AbstractDb
{
    protected function _construct()
    {
        // table name (main table) and primary key
        $this->_init('console1_items', 'id');
    }
}
