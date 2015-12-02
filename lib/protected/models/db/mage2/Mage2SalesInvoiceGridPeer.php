<?php

/**
 * This is the model class for table "sales_invoice_grid".
 *
 * The followings are the available columns in table 'sales_invoice_grid':
 * @property string $entity_id
 * @property string $increment_id
 * @property integer $state
 * @property integer $store_id
 * @property string $store_name
 * @property string $order_id
 * @property string $order_increment_id
 * @property string $order_created_at
 * @property string $customer_name
 * @property string $customer_email
 * @property integer $customer_group_id
 * @property string $payment_method
 * @property string $store_currency_code
 * @property string $order_currency_code
 * @property string $base_currency_code
 * @property string $global_currency_code
 * @property string $billing_name
 * @property string $billing_address
 * @property string $shipping_address
 * @property string $shipping_information
 * @property string $subtotal
 * @property string $shipping_and_handling
 * @property string $grand_total
 * @property string $created_at
 * @property string $updated_at
 */
class Mage2SalesInvoiceGridPeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sales_invoice_grid}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('entity_id, order_id', 'required'),
			array('state, store_id, customer_group_id', 'numerical', 'integerOnly'=>true),
			array('entity_id, order_id', 'length', 'max'=>10),
			array('increment_id, order_increment_id', 'length', 'max'=>50),
			array('store_name, customer_name, customer_email, billing_name, billing_address, shipping_address, shipping_information', 'length', 'max'=>255),
			array('payment_method', 'length', 'max'=>128),
			array('store_currency_code, order_currency_code, base_currency_code, global_currency_code', 'length', 'max'=>3),
			array('subtotal, shipping_and_handling, grand_total', 'length', 'max'=>12),
			array('order_created_at, created_at, updated_at', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2SalesInvoiceGridPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
