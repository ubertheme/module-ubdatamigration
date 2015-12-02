<?php

/**
 * This is the model class for table "catalog_product_option_type_value".
 *
 * The followings are the available columns in table 'catalog_product_option_type_value':
 * @property string $option_type_id
 * @property string $option_id
 * @property string $sku
 * @property string $sort_order
 */
class Mage2CatalogProductOptionTypeValuePeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{catalog_product_option_type_value}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('option_id, sort_order', 'length', 'max'=>10),
			array('sku', 'length', 'max'=>64),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2CatalogProductOptionTypeValuePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
