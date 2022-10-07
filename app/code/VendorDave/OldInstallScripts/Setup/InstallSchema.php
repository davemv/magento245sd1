<?php

namespace VendorDave\OldInstallScripts\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;


class InstallSchema implements InstallSchemaInterface
{
    // SchemaSetupInterface provides the functions we need to interact with database
    // ModuleContextInterface provides information about our module. Currently just a version of the installation, 
    // is more use on upgrade scripts
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $table = $setup->getConnection()->newTable(
            // we use getTable() in case magento configuration uses prefixes
            $setup->getTable('old_scripts_table')
        )->addColumn(
            'id', //column name
            Table::TYPE_INTEGER, // represents the mysql data type
            null, // size, null is default size
            ['identity' => true, 'nullable' => false, 'primary' => true], // options
            'Id of table' // column comment
        )->addColumn(
            'name',
            Table::TYPE_TEXT,
            255, // max text type size
            ['nullable' => false],
            'comment of columnt'
        )->addIndex(
            $setup->getIdxName('old_script_table', ['name']),
            ['name']
        )->setComment( // table comment
            'Sample Table for old scripts'
        );

        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}
