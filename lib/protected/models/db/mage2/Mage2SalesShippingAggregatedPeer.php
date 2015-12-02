<?php

/**
 * This is the model class for table "sales_shipping_aggregated".
 *
 * The followings are the available columns in table 'sales_shipping_aggregated':
 * @property string $id
 * @property string $period
 * @property integer $store_id
 * @property string $order_status
 * @property string $shipping_description
 * @property integer $orders_count
 * @property string $total_shipping
 * @property string $total_shipping_actual
 */
class Mage2SalesShippingAggregatedPeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sales_shipping_aggregated}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('store_id, orders_count', 'numerical', 'integerOnly'=>true),
			array('order_status', 'length', 'max'=>50),
			array('shipping_description', 'length', 'max'=>255),
			array('total_shipping, total_shipping_actual', 'length', 'max'=>12),
			array('period', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2SalesShippingAggregatedPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
