<?php

/**
 * This is the model class for table "sales_order_tax_item".
 *
 * The followings are the available columns in table 'sales_order_tax_item':
 * @property string $tax_item_id
 * @property string $tax_id
 * @property string $item_id
 * @property string $tax_percent
 * @property string $amount
 * @property string $base_amount
 * @property string $real_amount
 * @property string $real_base_amount
 * @property string $associated_item_id
 * @property string $taxable_item_type
 */
class Mage2SalesOrderTaxItemPeer extends Mage2ActiveRecord
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
			//array('tax_id, tax_percent, amount, base_amount, real_amount, real_base_amount, taxable_item_type', 'required'),
            array('tax_id', 'required'),
			array('tax_id, item_id, associated_item_id', 'length', 'max'=>10),
			array('tax_percent, amount, base_amount, real_amount, real_base_amount', 'length', 'max'=>12),
			array('taxable_item_type', 'length', 'max'=>32),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2SalesOrderTaxItemPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
