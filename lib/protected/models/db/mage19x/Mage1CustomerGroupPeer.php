<?php

/**
 * This is the model class for table "customer_group".
 *
 * The followings are the available columns in table 'customer_group':
 * @property integer $customer_group_id
 * @property string $customer_group_code
 * @property string $tax_class_id
 */
class Mage1CustomerGroupPeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{customer_group}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('customer_group_code', 'required'),
			array('customer_group_code', 'length', 'max'=>32),
			array('tax_class_id', 'length', 'max'=>10),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1CustomerGroupPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
