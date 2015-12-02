<?php

/**
 * This is the model class for table "eav_attribute_group".
 *
 * The followings are the available columns in table 'eav_attribute_group':
 * @property integer $attribute_group_id
 * @property integer $attribute_set_id
 * @property string $attribute_group_name
 * @property integer $sort_order
 * @property integer $default_id
 */
class Mage1AttributeGroupPeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{eav_attribute_group}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('attribute_set_id, sort_order, default_id', 'numerical', 'integerOnly'=>true),
			array('attribute_group_name', 'length', 'max'=>255),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1AttributeGroupPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
