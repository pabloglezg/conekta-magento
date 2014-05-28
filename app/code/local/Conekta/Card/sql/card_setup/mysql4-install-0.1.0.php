<?php
$installer = $this;
/* @var $installer Mage_Customer_Model_Entity_Setup */

$installer->startSetup();
$installer->getConnection()->addColumn($installer->getTable('sales/quote_payment'), 'charge_id', array(
    'type'    => Varien_Db_Ddl_Table::TYPE_TEXT,
    'length'  => '255',
    'comment' => 'Charge Id'
));
$installer->getConnection()->addColumn($installer->getTable('sales/order_payment'), 'charge_id', array(
    'type'    => Varien_Db_Ddl_Table::TYPE_TEXT,
    'length'  => '255',
    'comment' => 'Charge Id'
));

$installer->getConnection()->addColumn($installer->getTable('sales/quote_payment'), 'charge_authorization', array(
    'type'    => Varien_Db_Ddl_Table::TYPE_TEXT,
    'length'  => '255',
    'comment' => 'Authorization Number'
));
$installer->getConnection()->addColumn($installer->getTable('sales/order_payment'), 'charge_authorization', array(
    'type'    => Varien_Db_Ddl_Table::TYPE_TEXT,
    'length'  => '255',
    'comment' => 'Authorization Number'
));

$installer->getConnection()->addColumn($installer->getTable('sales/quote_payment'), 'card_token', array(
    'type'    => Varien_Db_Ddl_Table::TYPE_TEXT,
    'length'  => '255',
    'comment' => 'Card Token'
));
$installer->getConnection()->addColumn($installer->getTable('sales/order_payment'), 'card_token', array(
    'type'    => Varien_Db_Ddl_Table::TYPE_TEXT,
    'length'  => '255',
    'comment' => 'Card Token'
));
$installer->endSetup();
