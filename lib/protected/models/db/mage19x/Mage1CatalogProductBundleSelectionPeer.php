<?php

/**
 * This is the model class for table "catalog_product_bundle_selection".
 *
 * The followings are the available columns in table 'catalog_product_bundle_selection':
 * @property string $selection_id
 * @property string $option_id
 * @property string $parent_product_id
 * @property string $product_id
 * @property string $position
 * @property integer $is_default
 * @property integer $selection_price_type
 * @property string $selection_price_value
 * @property string $selection_qty
 * @property integer $selection_can_change_qty
 */
class Mage1CatalogProductBundleSelectionPeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{catalog_product_bundle_selection}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('option_id, parent_product_id, product_id', 'required'),
			array('is_default, selection_price_type, selection_can_change_qty', 'numerical', 'integerOnly'=>true),
			array('option_id, parent_product_id, product_id, position', 'length', 'max'=>10),
			array('selection_price_value, selection_qty', 'length', 'max'=>12),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1CatalogProductBundleSelectionPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
