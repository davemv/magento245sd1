<?php

namespace VendorDave\ConsoleCommands1\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;


class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $table = $setup->getConnection()->newTable(
            $setup->getTable('console1_items')
        )->addColumn(
            'id',
            Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'nullable' => false, 'primary' => true], // options
            'Id of table'
        )->addColumn(
            'item',
            Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'name of column'
        )->addColumn(
            'description',
            Table::TYPE_TEXT,
            255,
            ['nullable' => true],
            'description of column'
        )->addIndex(
            $setup->getIdxName('model_basics1', ['item']),
            ['item']
        )->setComment(
            'items1 table'
        );

        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}
