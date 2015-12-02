<?php

/**
 * This is the model class for table "catalog_product_option".
 *
 * The followings are the available columns in table 'catalog_product_option':
 * @property string $option_id
 * @property string $product_id
 * @property string $type
 * @property integer $is_require
 * @property string $sku
 * @property string $max_characters
 * @property string $file_extension
 * @property integer $image_size_x
 * @property integer $image_size_y
 * @property string $sort_order
 */
class Mage2CatalogProductOptionPeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{catalog_product_option}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('is_require, image_size_x, image_size_y', 'numerical', 'integerOnly'=>true),
			array('product_id, max_characters, sort_order', 'length', 'max'=>10),
			array('type, file_extension', 'length', 'max'=>50),
			array('sku', 'length', 'max'=>64),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2CatalogProductOptionPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
