<?php

/**
 * This is the model class for table "cataloginventory_stock".
 *
 * The followings are the available columns in table 'cataloginventory_stock':
 * @property integer $stock_id
 * @property integer $website_id
 * @property string $stock_name
 */
class Mage2StockPeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{cataloginventory_stock}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('website_id', 'required'),
			array('website_id', 'numerical', 'integerOnly'=>true),
			array('stock_name', 'length', 'max'=>255),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2StockPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
