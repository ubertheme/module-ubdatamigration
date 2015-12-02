<?php

/**
 * This is the model class for table "catalog_product_link".
 *
 * The followings are the available columns in table 'catalog_product_link':
 * @property string $link_id
 * @property string $product_id
 * @property string $linked_product_id
 * @property integer $link_type_id
 */
class Mage1CatalogProductLinkPeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{catalog_product_link}}';
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
			array('product_id, linked_product_id', 'length', 'max'=>10),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1CatalogProductLinkPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
