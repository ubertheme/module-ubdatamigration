<?php

/**
 * This is the model class for table "catalog_category_entity_varchar".
 *
 * The followings are the available columns in table 'catalog_category_entity_varchar':
 * @property integer $value_id
 * @property integer $entity_type_id
 * @property integer $attribute_id
 * @property integer $store_id
 * @property string $entity_id
 * @property string $value
 */
class Mage1CatalogCategoryEntityVarcharPeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{catalog_category_entity_varchar}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('entity_type_id, attribute_id, store_id', 'numerical', 'integerOnly'=>true),
			array('entity_id', 'length', 'max'=>10),
			array('value', 'length', 'max'=>255),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1CatalogCategoryEntityVarcharPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
