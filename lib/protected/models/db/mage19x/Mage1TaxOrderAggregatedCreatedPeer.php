<?php

/**
 * This is the model class for table "tax_order_aggregated_created".
 *
 * The followings are the available columns in table 'tax_order_aggregated_created':
 * @property string $id
 * @property string $period
 * @property integer $store_id
 * @property string $code
 * @property string $order_status
 * @property double $percent
 * @property string $orders_count
 * @property double $tax_base_amount_sum
 */
class Mage1TaxOrderAggregatedCreatedPeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{tax_order_aggregated_created}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code, order_status', 'required'),
			array('store_id', 'numerical', 'integerOnly'=>true),
			array('percent, tax_base_amount_sum', 'numerical'),
			array('code', 'length', 'max'=>255),
			array('order_status', 'length', 'max'=>50),
			array('orders_count', 'length', 'max'=>10),
			array('period', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1TaxOrderAggregatedCreatedPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
