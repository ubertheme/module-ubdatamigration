<?php

/**
 * This is the model class for table "salesrule".
 *
 * The followings are the available columns in table 'salesrule':
 * @property string $rule_id
 * @property string $name
 * @property string $description
 * @property string $from_date
 * @property string $to_date
 * @property integer $uses_per_customer
 * @property integer $is_active
 * @property string $conditions_serialized
 * @property string $actions_serialized
 * @property integer $stop_rules_processing
 * @property integer $is_advanced
 * @property string $product_ids
 * @property string $sort_order
 * @property string $simple_action
 * @property string $discount_amount
 * @property string $discount_qty
 * @property string $discount_step
 * @property integer $simple_free_shipping
 * @property integer $apply_to_shipping
 * @property string $times_used
 * @property integer $is_rss
 * @property integer $coupon_type
 * @property integer $use_auto_generation
 * @property integer $uses_per_coupon
 */
class Mage1SalesrulePeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{salesrule}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('discount_step', 'required'),
			array('uses_per_customer, is_active, stop_rules_processing, is_advanced, simple_free_shipping, apply_to_shipping, is_rss, coupon_type, use_auto_generation, uses_per_coupon', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>255),
			array('sort_order, discount_step, times_used', 'length', 'max'=>10),
			array('simple_action', 'length', 'max'=>32),
			array('discount_amount, discount_qty', 'length', 'max'=>12),
			array('description, from_date, to_date, conditions_serialized, actions_serialized, product_ids', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1SalesrulePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
