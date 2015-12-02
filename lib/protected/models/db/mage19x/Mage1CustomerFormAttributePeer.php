<?php

/**
 * This is the model class for table "customer_form_attribute".
 *
 * The followings are the available columns in table 'customer_form_attribute':
 * @property string $form_code
 * @property integer $attribute_id
 */
class Mage1CustomerFormAttributePeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{customer_form_attribute}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('form_code, attribute_id', 'required'),
			array('attribute_id', 'numerical', 'integerOnly'=>true),
			array('form_code', 'length', 'max'=>32),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1CustomerFormAttributePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
