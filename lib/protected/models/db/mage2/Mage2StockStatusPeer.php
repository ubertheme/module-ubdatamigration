<?php

/**
 * This is the model class for table "cataloginventory_stock_status".
 *
 * The followings are the available columns in table 'cataloginventory_stock_status':
 * @property string $product_id
 * @property integer $website_id
 * @property integer $stock_id
 * @property string $qty
 * @property integer $stock_status
 */
class Mage2StockStatusPeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{cataloginventory_stock_status}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('product_id, website_id, stock_id, stock_status', 'required'),
			array('website_id, stock_id, stock_status', 'numerical', 'integerOnly'=>true),
			array('product_id', 'length', 'max'=>10),
			array('qty', 'length', 'max'=>12),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2StockStatusPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
