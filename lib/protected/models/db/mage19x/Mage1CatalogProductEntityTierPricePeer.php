<?php

/**
 * This is the model class for table "catalog_product_entity_tier_price".
 *
 * The followings are the available columns in table 'catalog_product_entity_tier_price':
 * @property integer $value_id
 * @property string $entity_id
 * @property integer $all_groups
 * @property integer $customer_group_id
 * @property string $qty
 * @property string $value
 * @property integer $website_id
 */
class Mage1CatalogProductEntityTierPricePeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{catalog_product_entity_tier_price}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('website_id', 'required'),
			array('all_groups, customer_group_id, website_id', 'numerical', 'integerOnly'=>true),
			array('entity_id', 'length', 'max'=>10),
			array('qty, value', 'length', 'max'=>12),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1CatalogProductEntityTierPricePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
