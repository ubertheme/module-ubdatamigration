<?php

/**
 * This is the model class for table "eav_attribute_option_value".
 *
 * The followings are the available columns in table 'eav_attribute_option_value':
 * @property string $value_id
 * @property string $option_id
 * @property integer $store_id
 * @property string $value
 */
class Mage1AttributeOptionValuePeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{eav_attribute_option_value}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('store_id', 'numerical', 'integerOnly'=>true),
			array('option_id', 'length', 'max'=>10),
			array('value', 'length', 'max'=>255),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1AttributeOptionValuePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
