<?php

/**
 * This is the model class for table "sales_refunded_aggregated_order".
 *
 * The followings are the available columns in table 'sales_refunded_aggregated_order':
 * @property string $id
 * @property string $period
 * @property integer $store_id
 * @property string $order_status
 * @property integer $orders_count
 * @property string $refunded
 * @property string $online_refunded
 * @property string $offline_refunded
 */
class Mage2SalesRefundedAggregatedOrderPeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sales_refunded_aggregated_order}}';
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
			array('refunded, online_refunded, offline_refunded', 'length', 'max'=>12),
			array('period', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2SalesRefundedAggregatedOrderPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
