<?php

/**
 * This is the model class for table "sales_order_tax_item".
 *
 * The followings are the available columns in table 'sales_order_tax_item':
 * @property string $tax_item_id
 * @property string $tax_id
 * @property string $item_id
 * @property string $tax_percent
 */
class Mage1SalesOrderTaxItemPeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sales_order_tax_item}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tax_id, item_id, tax_percent', 'required'),
			array('tax_id, item_id', 'length', 'max'=>10),
			array('tax_percent', 'length', 'max'=>12),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1SalesOrderTaxItemPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
