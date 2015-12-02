<?php

/**
 * This is the model class for table "catalog_category_entity_datetime".
 *
 * The followings are the available columns in table 'catalog_category_entity_datetime':
 * @property integer $value_id
 * @property integer $attribute_id
 * @property integer $store_id
 * @property string $entity_id
 * @property string $value
 */
class Mage2CatalogCategoryEntityDatetimePeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{catalog_category_entity_datetime}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('attribute_id, store_id', 'numerical', 'integerOnly'=>true),
			array('entity_id', 'length', 'max'=>10),
			array('value', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2CatalogCategoryEntityDatetimePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
