<?php

/**
 * This is the model class for table "catalogrule_product_price".
 *
 * The followings are the available columns in table 'catalogrule_product_price':
 * @property string $rule_product_price_id
 * @property string $rule_date
 * @property integer $customer_group_id
 * @property string $product_id
 * @property string $rule_price
 * @property integer $website_id
 * @property string $latest_start_date
 * @property string $earliest_end_date
 */
class Mage1CatalogruleProductPricePeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{catalogrule_product_price}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rule_date, website_id', 'required'),
			array('customer_group_id, website_id', 'numerical', 'integerOnly'=>true),
			array('product_id', 'length', 'max'=>10),
			array('rule_price', 'length', 'max'=>12),
			array('latest_start_date, earliest_end_date', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1CatalogruleProductPricePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
