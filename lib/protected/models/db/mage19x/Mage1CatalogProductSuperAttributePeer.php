<?php

/**
 * This is the model class for table "catalog_product_super_attribute".
 *
 * The followings are the available columns in table 'catalog_product_super_attribute':
 * @property string $product_super_attribute_id
 * @property string $product_id
 * @property integer $attribute_id
 * @property integer $position
 */
class Mage1CatalogProductSuperAttributePeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{catalog_product_super_attribute}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('attribute_id, position', 'numerical', 'integerOnly'=>true),
			array('product_id', 'length', 'max'=>10),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1CatalogProductSuperAttributePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
