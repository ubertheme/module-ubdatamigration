<?php

/**
 * This is the model class for table "sales_invoiced_aggregated_order".
 *
 * The followings are the available columns in table 'sales_invoiced_aggregated_order':
 * @property string $id
 * @property string $period
 * @property integer $store_id
 * @property string $order_status
 * @property integer $orders_count
 * @property string $orders_invoiced
 * @property string $invoiced
 * @property string $invoiced_captured
 * @property string $invoiced_not_captured
 */
class Mage2SalesInvoicedAggregatedOrderPeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sales_invoiced_aggregated_order}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('order_status', 'required'),
			array('store_id, orders_count', 'numerical', 'integerOnly'=>true),
			array('order_status', 'length', 'max'=>50),
			array('orders_invoiced, invoiced, invoiced_captured, invoiced_not_captured', 'length', 'max'=>12),
			array('period', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2SalesInvoicedAggregatedOrderPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
