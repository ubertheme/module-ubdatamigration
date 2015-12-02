<?php

/**
 * This is the model class for table "sales_flat_creditmemo_grid".
 *
 * The followings are the available columns in table 'sales_flat_creditmemo_grid':
 * @property string $entity_id
 * @property integer $store_id
 * @property string $store_to_order_rate
 * @property string $base_to_order_rate
 * @property string $grand_total
 * @property string $store_to_base_rate
 * @property string $base_to_global_rate
 * @property string $base_grand_total
 * @property string $order_id
 * @property integer $creditmemo_status
 * @property integer $state
 * @property integer $invoice_id
 * @property string $store_currency_code
 * @property string $order_currency_code
 * @property string $base_currency_code
 * @property string $global_currency_code
 * @property string $increment_id
 * @property string $order_increment_id
 * @property string $created_at
 * @property string $order_created_at
 * @property string $billing_name
 */
class Mage1SalesCreditmemoGridPeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sales_flat_creditmemo_grid}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('entity_id, order_id', 'required'),
			array('store_id, creditmemo_status, state, invoice_id', 'numerical', 'integerOnly'=>true),
			array('entity_id, order_id', 'length', 'max'=>10),
			array('store_to_order_rate, base_to_order_rate, grand_total, store_to_base_rate, base_to_global_rate, base_grand_total', 'length', 'max'=>12),
			array('store_currency_code, order_currency_code, base_currency_code, global_currency_code', 'length', 'max'=>3),
			array('increment_id, order_increment_id', 'length', 'max'=>50),
			array('billing_name', 'length', 'max'=>255),
			array('created_at, order_created_at', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1SalesCreditmemoGridPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
