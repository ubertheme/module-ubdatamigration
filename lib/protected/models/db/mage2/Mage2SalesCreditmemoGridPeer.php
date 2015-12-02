<?php

/**
 * This is the model class for table "sales_creditmemo_grid".
 *
 * The followings are the available columns in table 'sales_creditmemo_grid':
 * @property string $entity_id
 * @property string $increment_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $order_id
 * @property string $order_increment_id
 * @property string $order_created_at
 * @property string $billing_name
 * @property integer $state
 * @property string $base_grand_total
 * @property string $order_status
 * @property integer $store_id
 * @property string $billing_address
 * @property string $shipping_address
 * @property string $customer_name
 * @property string $customer_email
 * @property integer $customer_group_id
 * @property string $payment_method
 * @property string $shipping_information
 * @property string $subtotal
 * @property string $shipping_and_handling
 * @property string $adjustment_positive
 * @property string $adjustment_negative
 * @property string $order_base_grand_total
 */
class Mage2SalesCreditmemoGridPeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sales_creditmemo_grid}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('entity_id, order_id, customer_name', 'required'),
			array('state, store_id, customer_group_id', 'numerical', 'integerOnly'=>true),
			array('entity_id, order_id', 'length', 'max'=>10),
			array('increment_id, order_increment_id', 'length', 'max'=>50),
			array('billing_name, billing_address, shipping_address, shipping_information', 'length', 'max'=>255),
			array('base_grand_total, subtotal, shipping_and_handling, adjustment_positive, adjustment_negative, order_base_grand_total', 'length', 'max'=>12),
			array('order_status, payment_method', 'length', 'max'=>32),
			array('customer_name, customer_email', 'length', 'max'=>128),
			array('created_at, updated_at, order_created_at', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2SalesCreditmemoGridPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
