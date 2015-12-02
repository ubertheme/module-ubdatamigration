<?php

/**
 * This is the model class for table "catalog_product_bundle_option".
 *
 * The followings are the available columns in table 'catalog_product_bundle_option':
 * @property string $option_id
 * @property string $parent_id
 * @property integer $required
 * @property string $position
 * @property string $type
 */
class Mage2CatalogProductBundleOptionPeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{catalog_product_bundle_option}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('parent_id', 'required'),
			array('required', 'numerical', 'integerOnly'=>true),
			array('parent_id, position', 'length', 'max'=>10),
			array('type', 'length', 'max'=>255),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2CatalogProductBundleOptionPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
