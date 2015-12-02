<?php

/**
 * This is the model class for table "sales_flat_shipment".
 *
 * The followings are the available columns in table 'sales_flat_shipment':
 * @property string $entity_id
 * @property integer $store_id
 * @property string $total_weight
 * @property string $total_qty
 * @property integer $email_sent
 * @property string $order_id
 * @property integer $customer_id
 * @property integer $shipping_address_id
 * @property integer $billing_address_id
 * @property integer $shipment_status
 * @property string $increment_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $packages
 * @property string $shipping_label
 */
class Mage1SalesShipmentPeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sales_flat_shipment}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('order_id', 'required'),
			array('store_id, email_sent, customer_id, shipping_address_id, billing_address_id, shipment_status', 'numerical', 'integerOnly'=>true),
			array('total_weight, total_qty', 'length', 'max'=>12),
			array('order_id', 'length', 'max'=>10),
			array('increment_id', 'length', 'max'=>50),
			array('created_at, updated_at, packages, shipping_label', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1SalesFlatShipmentPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
