<?php

/**
 * This is the model class for table "salesrule_coupon_usage".
 *
 * The followings are the available columns in table 'salesrule_coupon_usage':
 * @property string $coupon_id
 * @property string $customer_id
 * @property string $times_used
 */
class Mage2SalesruleCouponUsagePeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{salesrule_coupon_usage}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('coupon_id, customer_id', 'required'),
			array('coupon_id, customer_id, times_used', 'length', 'max'=>10),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2SalesruleCouponUsagePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
