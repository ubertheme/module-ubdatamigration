<?php

/**
 * This is the model class for table "catalog_product_super_attribute_pricing".
 *
 * The followings are the available columns in table 'catalog_product_super_attribute_pricing':
 * @property string $value_id
 * @property string $product_super_attribute_id
 * @property string $value_index
 * @property integer $is_percent
 * @property string $pricing_value
 * @property integer $website_id
 */
class Mage2CatalogProductSuperAttributePricingPeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{catalog_product_super_attribute_pricing}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('is_percent, website_id', 'numerical', 'integerOnly'=>true),
			array('product_super_attribute_id', 'length', 'max'=>10),
			array('value_index', 'length', 'max'=>255),
			array('pricing_value', 'length', 'max'=>12),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2CatalogProductSuperAttributePricingPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
