<?php

/**
 * This is the model class for table "sales_order_tax".
 *
 * The followings are the available columns in table 'sales_order_tax':
 * @property string $tax_id
 * @property string $order_id
 * @property string $code
 * @property string $title
 * @property string $percent
 * @property string $amount
 * @property integer $priority
 * @property integer $position
 * @property string $base_amount
 * @property integer $process
 * @property string $base_real_amount
 */
class Mage2SalesOrderTaxPeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sales_order_tax}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('order_id, priority, position, process', 'required'),
			array('priority, position, process', 'numerical', 'integerOnly'=>true),
			array('order_id', 'length', 'max'=>10),
			array('code, title', 'length', 'max'=>255),
			array('percent, amount, base_amount, base_real_amount', 'length', 'max'=>12),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2SalesOrderTaxPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
