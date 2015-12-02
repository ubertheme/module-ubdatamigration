<?php

/**
 * This is the model class for table "eav_attribute_option".
 *
 * The followings are the available columns in table 'eav_attribute_option':
 * @property string $option_id
 * @property integer $attribute_id
 * @property integer $sort_order
 */
class Mage1AttributeOptionPeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{eav_attribute_option}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('attribute_id, sort_order', 'numerical', 'integerOnly'=>true),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1AttributeOptionPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
