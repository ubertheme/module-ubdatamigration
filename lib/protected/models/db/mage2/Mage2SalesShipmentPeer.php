<?php

/**
 * This is the model class for table "sales_shipment".
 *
 * The followings are the available columns in table 'sales_shipment':
 * @property string $entity_id
 * @property integer $store_id
 * @property string $total_weight
 * @property string $total_qty
 * @property integer $email_sent
 * @property integer $send_email
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
 * @property string $customer_note
 * @property integer $customer_note_notify
 */
class Mage2SalesShipmentPeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sales_shipment}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('order_id, created_at, updated_at', 'required'),
			array('store_id, email_sent, send_email, customer_id, shipping_address_id, billing_address_id, shipment_status, customer_note_notify', 'numerical', 'integerOnly'=>true),
			array('total_weight, total_qty', 'length', 'max'=>12),
			array('order_id', 'length', 'max'=>10),
			array('increment_id', 'length', 'max'=>50),
			array('packages, shipping_label, customer_note', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2SalesShipmentPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
