<?php

/**
 * This is the model class for table "catalog_product_link_attribute".
 *
 * The followings are the available columns in table 'catalog_product_link_attribute':
 * @property integer $product_link_attribute_id
 * @property integer $link_type_id
 * @property string $product_link_attribute_code
 * @property string $data_type
 */
class Mage2CatalogProductLinkAttributePeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{catalog_product_link_attribute}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('link_type_id', 'numerical', 'integerOnly'=>true),
			array('product_link_attribute_code, data_type', 'length', 'max'=>32),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2CatalogProductLinkAttributePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
