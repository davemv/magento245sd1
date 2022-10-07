<?php

namespace VendorDave\OldInstallScripts\Setup;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

class UpgradeData implements UpgradeDataInterface
{
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        // if the version is less than 1.0.1
        if (version_compare($context->getVersion(), '1.0.1', '<')) {
            $setup->getConnection()->update(
                $setup->getTable('old_scripts_table'),
                [
                    'description' => 'Default desc 1'
                ],
                $setup->getConnection()->quoteInto('id = ?', 1)
            );

            $setup->getConnection()->update(
                $setup->getTable('old_scripts_table'),
                [
                    'description' => 'Default desc 2'
                ],
                $setup->getConnection()->quoteInto('id = ?', 2)
            );
        }

        $setup->endSetup();
    }
}
