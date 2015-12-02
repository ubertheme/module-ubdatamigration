<?php

/**
 * This is the model class for table "eav_attribute_set".
 *
 * The followings are the available columns in table 'eav_attribute_set':
 * @property integer $attribute_set_id
 * @property integer $entity_type_id
 * @property string $attribute_set_name
 * @property integer $sort_order
 */
class Mage2AttributeSetPeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{eav_attribute_set}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('entity_type_id, sort_order', 'numerical', 'integerOnly'=>true),
			array('attribute_set_name', 'length', 'max'=>255),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2AttributeSetPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
