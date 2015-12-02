<?php

/**
 * This is the model class for table "tax_class".
 *
 * The followings are the available columns in table 'tax_class':
 * @property integer $class_id
 * @property string $class_name
 * @property string $class_type
 */
class Mage2TaxClassPeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{tax_class}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('class_name', 'required'),
			array('class_name', 'length', 'max'=>255),
			array('class_type', 'length', 'max'=>8),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2TaxClassPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
