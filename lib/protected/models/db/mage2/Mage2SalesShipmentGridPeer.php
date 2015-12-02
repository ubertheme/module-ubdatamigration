<?php

/**
 * This is the model class for table "sales_shipment_grid".
 *
 * The followings are the available columns in table 'sales_shipment_grid':
 * @property string $entity_id
 * @property string $increment_id
 * @property integer $store_id
 * @property string $order_increment_id
 * @property string $order_id
 * @property string $order_created_at
 * @property string $customer_name
 * @property string $total_qty
 * @property integer $shipment_status
 * @property string $order_status
 * @property string $billing_address
 * @property string $shipping_address
 * @property string $billing_name
 * @property string $shipping_name
 * @property string $customer_email
 * @property integer $customer_group_id
 * @property string $payment_method
 * @property string $shipping_information
 * @property string $created_at
 * @property string $updated_at
 */
class Mage2SalesShipmentGridPeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sales_shipment_grid}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('entity_id, order_increment_id, order_id, order_created_at, customer_name', 'required'),
			array('store_id, shipment_status, customer_group_id', 'numerical', 'integerOnly'=>true),
			array('entity_id, order_id', 'length', 'max'=>10),
			array('increment_id', 'length', 'max'=>50),
			array('order_increment_id, order_status, payment_method', 'length', 'max'=>32),
			array('customer_name, billing_name, shipping_name, customer_email', 'length', 'max'=>128),
			array('total_qty', 'length', 'max'=>12),
			array('billing_address, shipping_address, shipping_information', 'length', 'max'=>255),
			array('created_at, updated_at', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2SalesShipmentGridPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
