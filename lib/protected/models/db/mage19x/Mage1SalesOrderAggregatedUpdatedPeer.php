<?php

/**
 * This is the model class for table "sales_order_aggregated_updated".
 *
 * The followings are the available columns in table 'sales_order_aggregated_updated':
 * @property string $id
 * @property string $period
 * @property integer $store_id
 * @property string $order_status
 * @property integer $orders_count
 * @property string $total_qty_ordered
 * @property string $total_qty_invoiced
 * @property string $total_income_amount
 * @property string $total_revenue_amount
 * @property string $total_profit_amount
 * @property string $total_invoiced_amount
 * @property string $total_canceled_amount
 * @property string $total_paid_amount
 * @property string $total_refunded_amount
 * @property string $total_tax_amount
 * @property string $total_tax_amount_actual
 * @property string $total_shipping_amount
 * @property string $total_shipping_amount_actual
 * @property string $total_discount_amount
 * @property string $total_discount_amount_actual
 */
class Mage1SalesOrderAggregatedUpdatedPeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sales_order_aggregated_updated}}';
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
			array('total_qty_ordered, total_qty_invoiced, total_income_amount, total_revenue_amount, total_profit_amount, total_invoiced_amount, total_canceled_amount, total_paid_amount, total_refunded_amount, total_tax_amount, total_tax_amount_actual, total_shipping_amount, total_shipping_amount_actual, total_discount_amount, total_discount_amount_actual', 'length', 'max'=>12),
			array('period', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1SalesOrderAggregatedUpdatedPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
