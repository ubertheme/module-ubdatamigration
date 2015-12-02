<?php

/**
 * This is the model class for table "sales_flat_order_grid".
 *
 * The followings are the available columns in table 'sales_flat_order_grid':
 * @property string $entity_id
 * @property string $status
 * @property integer $store_id
 * @property string $store_name
 * @property string $customer_id
 * @property string $base_grand_total
 * @property string $base_total_paid
 * @property string $grand_total
 * @property string $total_paid
 * @property string $increment_id
 * @property string $base_currency_code
 * @property string $order_currency_code
 * @property string $shipping_name
 * @property string $billing_name
 * @property string $created_at
 * @property string $updated_at
 */
class Mage1SalesOrderGridPeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sales_flat_order_grid}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('entity_id', 'required'),
			array('store_id', 'numerical', 'integerOnly'=>true),
			array('entity_id, customer_id', 'length', 'max'=>10),
			array('status', 'length', 'max'=>32),
			array('store_name, order_currency_code, shipping_name, billing_name', 'length', 'max'=>255),
			array('base_grand_total, base_total_paid, grand_total, total_paid', 'length', 'max'=>12),
			array('increment_id', 'length', 'max'=>50),
			array('base_currency_code', 'length', 'max'=>3),
			array('created_at, updated_at', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1SalesOrderGridPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
