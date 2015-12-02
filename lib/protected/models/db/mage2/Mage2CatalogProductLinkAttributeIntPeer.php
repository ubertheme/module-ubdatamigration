<?php

/**
 * This is the model class for table "catalog_product_link_attribute_int".
 *
 * The followings are the available columns in table 'catalog_product_link_attribute_int':
 * @property string $value_id
 * @property integer $product_link_attribute_id
 * @property string $link_id
 * @property integer $value
 */
class Mage2CatalogProductLinkAttributeIntPeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{catalog_product_link_attribute_int}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('link_id', 'required'),
			array('product_link_attribute_id, value', 'numerical', 'integerOnly'=>true),
			array('link_id', 'length', 'max'=>10),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2CatalogProductLinkAttributeIntPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
