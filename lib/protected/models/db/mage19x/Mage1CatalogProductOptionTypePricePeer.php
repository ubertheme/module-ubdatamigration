<?php

/**
 * This is the model class for table "catalog_product_option_type_price".
 *
 * The followings are the available columns in table 'catalog_product_option_type_price':
 * @property string $option_type_price_id
 * @property string $option_type_id
 * @property integer $store_id
 * @property string $price
 * @property string $price_type
 */
class Mage1CatalogProductOptionTypePricePeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{catalog_product_option_type_price}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('store_id', 'numerical', 'integerOnly'=>true),
			array('option_type_id', 'length', 'max'=>10),
			array('price', 'length', 'max'=>12),
			array('price_type', 'length', 'max'=>7),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1CatalogProductOptionTypePricePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
