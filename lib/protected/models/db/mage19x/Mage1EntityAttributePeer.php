<?php

/**
 * This is the model class for table "eav_entity_attribute".
 *
 * The followings are the available columns in table 'eav_entity_attribute':
 * @property string $entity_attribute_id
 * @property integer $entity_type_id
 * @property integer $attribute_set_id
 * @property integer $attribute_group_id
 * @property integer $attribute_id
 * @property integer $sort_order
 */
class Mage1EntityAttributePeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{eav_entity_attribute}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('entity_type_id, attribute_set_id, attribute_group_id, attribute_id, sort_order', 'numerical', 'integerOnly'=>true),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1EntityAttribute the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
