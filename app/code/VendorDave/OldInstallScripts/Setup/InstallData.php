<?php

namespace VendorDave\OldInstallScripts\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $setup->getConnection()->insert(
            $setup->getTable('old_scripts_table'),
            [
                'name' => 'Valor 1'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('old_scripts_table'),
            [
                'name' => 'Valor 2'
            ]
        );

        $setup->endSetup();
    }
}
