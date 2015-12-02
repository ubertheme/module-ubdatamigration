<?php

/**
 * This is the model class for table "salesrule_coupon".
 *
 * The followings are the available columns in table 'salesrule_coupon':
 * @property string $coupon_id
 * @property string $rule_id
 * @property string $code
 * @property string $usage_limit
 * @property string $usage_per_customer
 * @property string $times_used
 * @property string $expiration_date
 * @property integer $is_primary
 * @property string $created_at
 * @property integer $type
 */
class Mage1SalesruleCouponPeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{salesrule_coupon}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rule_id, created_at', 'required'),
			array('is_primary, type', 'numerical', 'integerOnly'=>true),
			array('rule_id, usage_limit, usage_per_customer, times_used', 'length', 'max'=>10),
			array('code', 'length', 'max'=>255),
			array('expiration_date', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1SalesruleCouponPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
