<?php

namespace VendorDave\GridRendering1\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $setup->getConnection()->insert(
            $setup->getTable('gridrendering1'),
            [
                'item' => 'Item nr1',
                'description' => 'Description 1'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('gridrendering1'),
            [
                'item' => 'Item nr2',
                'description' => 'Description 2'
            ]
        );

        $setup->endSetup();
    }
}
