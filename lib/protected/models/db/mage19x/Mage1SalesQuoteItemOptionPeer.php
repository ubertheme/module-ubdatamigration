<?php

/**
 * This is the model class for table "sales_flat_quote_item_option".
 *
 * The followings are the available columns in table 'sales_flat_quote_item_option':
 * @property string $option_id
 * @property string $item_id
 * @property string $product_id
 * @property string $code
 * @property string $value
 */
class Mage1SalesQuoteItemOptionPeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sales_flat_quote_item_option}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('item_id, product_id, code', 'required'),
			array('item_id, product_id', 'length', 'max'=>10),
			array('code', 'length', 'max'=>255),
			array('value', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1SalesQuoteItemOptionPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
