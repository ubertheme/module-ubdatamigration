<?php

/**
 * This is the model class for table "catalog_product_entity".
 *
 * The followings are the available columns in table 'catalog_product_entity':
 * @property string $entity_id
 * @property integer $entity_type_id
 * @property integer $attribute_set_id
 * @property string $type_id
 * @property string $sku
 * @property integer $has_options
 * @property integer $required_options
 * @property string $created_at
 * @property string $updated_at
 */
class Mage1CatalogProductEntityPeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{catalog_product_entity}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('entity_type_id, attribute_set_id, has_options, required_options', 'numerical', 'integerOnly'=>true),
			array('type_id', 'length', 'max'=>32),
			array('sku', 'length', 'max'=>64),
			array('created_at, updated_at', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1CatalogProductEntityPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
