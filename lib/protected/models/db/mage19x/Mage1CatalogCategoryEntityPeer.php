<?php

/**
 * This is the model class for table "catalog_category_entity".
 *
 * The followings are the available columns in table 'catalog_category_entity':
 * @property string $entity_id
 * @property integer $entity_type_id
 * @property integer $attribute_set_id
 * @property string $parent_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $path
 * @property integer $position
 * @property integer $level
 * @property integer $children_count
 */
class Mage1CatalogCategoryEntityPeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{catalog_category_entity}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('path, position, children_count', 'required'),
			array('entity_type_id, attribute_set_id, position, level, children_count', 'numerical', 'integerOnly'=>true),
			array('parent_id', 'length', 'max'=>10),
			array('path', 'length', 'max'=>255),
			array('created_at, updated_at', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1CatalogCategoryEntityPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
