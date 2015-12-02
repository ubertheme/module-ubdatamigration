<?php

/**
 * This is the model class for table "catalog_product_bundle_selection_price".
 *
 * The followings are the available columns in table 'catalog_product_bundle_selection_price':
 * @property string $selection_id
 * @property integer $website_id
 * @property integer $selection_price_type
 * @property string $selection_price_value
 */
class Mage1CatalogProductBundleSelectionPricePeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{catalog_product_bundle_selection_price}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('selection_id, website_id', 'required'),
			array('website_id, selection_price_type', 'numerical', 'integerOnly'=>true),
			array('selection_id', 'length', 'max'=>10),
			array('selection_price_value', 'length', 'max'=>12),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1CatalogProductBundleSelectionPricePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
