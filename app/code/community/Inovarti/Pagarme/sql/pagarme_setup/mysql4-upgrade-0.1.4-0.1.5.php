<?php
/*
 * @copyright  Copyright (C) 2015 Gamuza Technologies (http://www.gamuza.com.br/)
 * @author     Eneias Ramos de Melo <eneias@gamuza.com.br>
 */

$installer = new Mage_Sales_Model_Resource_Setup('pagarme_setup');
$installer->startSetup();

function addFeeColumns($installer)
{
    $table = $installer->getTable('sales/quote_address');

    $installer->getConnection()
        ->changeColumn($table, 'fee_amount', 'fee_amount', array(
            'type' => Varien_Db_Ddl_Table::TYPE_DECIMAL,
            'unsigned' => true,
            'nullable' => false,
            'comment' => 'Fee Amount',
            'SCALE' => 4,
            'PRECISION' => 12,
    ));
    $installer->getConnection()
        ->changeColumn($table, 'base_fee_amount', 'base_fee_amount', array(
            'type' => Varien_Db_Ddl_Table::TYPE_DECIMAL,
            'unsigned' => true,
            'nullable' => false,
            'comment' => 'Base Fee Amount',
            'SCALE' => 4,
            'PRECISION' => 12,
    ));

    $table = $installer->getTable('sales/order');

    $installer->getConnection()
        ->changeColumn($table, 'fee_amount', 'fee_amount', array(
            'type' => Varien_Db_Ddl_Table::TYPE_DECIMAL,
            'unsigned' => true,
            'nullable' => false,
            'comment' => 'Fee Amount',
            'SCALE' => 4,
            'PRECISION' => 12,
    ));
    $installer->getConnection()
        ->changeColumn($table, 'base_fee_amount', 'base_fee_amount', array(
            'type' => Varien_Db_Ddl_Table::TYPE_DECIMAL,
            'unsigned' => true,
            'nullable' => false,
            'comment' => 'Base Fee Amount',
            'SCALE' => 4,
            'PRECISION' => 12,
    ));
    $installer->getConnection()
        ->changeColumn($table, 'fee_amount_invoiced', 'fee_amount_invoiced', array(
            'type' => Varien_Db_Ddl_Table::TYPE_DECIMAL,
            'unsigned' => true,
            'nullable' => false,
            'comment' => 'Fee Amount Invoiced',
            'SCALE' => 4,
            'PRECISION' => 12,
    ));
    $installer->getConnection()
        ->changeColumn($table, 'base_fee_amount_invoiced', 'base_fee_amount_invoiced', array(
            'type' => Varien_Db_Ddl_Table::TYPE_DECIMAL,
            'unsigned' => true,
            'nullable' => false,
            'comment' => 'Base Fee Amount Invoiced',
            'SCALE' => 4,
            'PRECISION' => 12,
    ));
    $installer->getConnection()
        ->changeColumn($table, 'fee_amount_refunded', 'fee_amount_refunded', array(
            'type' => Varien_Db_Ddl_Table::TYPE_DECIMAL,
            'unsigned' => true,
            'nullable' => false,
            'comment' => 'Fee Amount Refunded',
            'SCALE' => 4,
            'PRECISION' => 12,
    ));
    $installer->getConnection()
        ->changeColumn($table, 'base_fee_amount_refunded', 'base_fee_amount_refunded', array(
            'type' => Varien_Db_Ddl_Table::TYPE_DECIMAL,
            'unsigned' => true,
            'nullable' => false,
            'comment' => 'Base Fee Amount Refunded',
            'SCALE' => 4,
            'PRECISION' => 12,
    ));

    $table = $installer->getTable('sales/invoice');

    $installer->getConnection()
        ->changeColumn($table, 'fee_amount', 'fee_amount', array(
            'type' => Varien_Db_Ddl_Table::TYPE_DECIMAL,
            'unsigned' => true,
            'nullable' => false,
            'comment' => 'Fee Amount',
            'SCALE' => 4,
            'PRECISION' => 12,
    ));
    $installer->getConnection()
        ->changeColumn($table, 'base_fee_amount', 'base_fee_amount', array(
            'type' => Varien_Db_Ddl_Table::TYPE_DECIMAL,
            'unsigned' => true,
            'nullable' => false,
            'comment' => 'Base Fee Amount',
            'SCALE' => 4,
            'PRECISION' => 12,
    ));

    $table = $installer->getTable('sales/creditmemo');

    $installer->getConnection()
        ->changeColumn($table, 'fee_amount', 'fee_amount', array(
            'type' => Varien_Db_Ddl_Table::TYPE_DECIMAL,
            'unsigned' => true,
            'nullable' => false,
            'comment' => 'Fee Amount',
            'SCALE' => 4,
            'PRECISION' => 12,
    ));
    $installer->getConnection()
        ->changeColumn($table, 'base_fee_amount', 'base_fee_amount', array(
            'type' => Varien_Db_Ddl_Table::TYPE_DECIMAL,
            'unsigned' => true,
            'nullable' => false,
            'comment' => 'Base Fee Amount',
            'SCALE' => 4,
            'PRECISION' => 12,
    ));
}

addFeeColumns($installer);
$installer->endSetup();
