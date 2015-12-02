<?php

/**
 * This is the model class for table "sales_order_status_state".
 *
 * The followings are the available columns in table 'sales_order_status_state':
 * @property string $status
 * @property string $state
 * @property integer $is_default
 * @property integer $visible_on_front
 */
class Mage2SalesOrderStatusStatePeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sales_order_status_state}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status, state', 'required'),
			array('is_default, visible_on_front', 'numerical', 'integerOnly'=>true),
			array('status, state', 'length', 'max'=>32),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2SalesOrderStatusStatePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
