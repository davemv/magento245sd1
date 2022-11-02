<?php

namespace VendorDave\GridRendering1\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\DB\Adapter\AdapterInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $table = $setup->getConnection()->newTable(
            $setup->getTable('gridrendering1')
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
            ['nullable' => true],
            'name of column'
        )->addColumn(
            'description',
            Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'description of column'
        )->addIndex(
            $setup->getIdxName(
                'gridrendering1',
                ['item', 'description'],
                AdapterInterface::INDEX_TYPE_FULLTEXT
            ),
            ['item', 'description'],
            ['type' => AdapterInterface::INDEX_TYPE_FULLTEXT]
            // AdapterInterface::INDEX_TYPE_FULLTEXT
        )->setComment(
            'items1 table'
        );

        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}
