<?php

/**
 * This is the model class for table "catalog_product_super_attribute_label".
 *
 * The followings are the available columns in table 'catalog_product_super_attribute_label':
 * @property string $value_id
 * @property string $product_super_attribute_id
 * @property integer $store_id
 * @property integer $use_default
 * @property string $value
 */
class Mage1CatalogProductSuperAttributeLabelPeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{catalog_product_super_attribute_label}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('store_id, use_default', 'numerical', 'integerOnly'=>true),
			array('product_super_attribute_id', 'length', 'max'=>10),
			array('value', 'length', 'max'=>255),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1CatalogProductSuperAttributeLabelPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
