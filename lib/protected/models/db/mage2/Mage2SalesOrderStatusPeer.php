<?php

/**
 * This is the model class for table "sales_order_status".
 *
 * The followings are the available columns in table 'sales_order_status':
 * @property string $status
 * @property string $label
 */
class Mage2SalesOrderStatusPeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sales_order_status}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status, label', 'required'),
			array('status', 'length', 'max'=>32),
			array('label', 'length', 'max'=>128),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2SalesOrderStatusPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
