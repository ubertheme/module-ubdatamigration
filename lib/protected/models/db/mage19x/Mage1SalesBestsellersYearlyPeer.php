<?php

/**
 * This is the model class for table "sales_bestsellers_aggregated_yearly".
 *
 * The followings are the available columns in table 'sales_bestsellers_aggregated_yearly':
 * @property string $id
 * @property string $period
 * @property integer $store_id
 * @property string $product_id
 * @property string $product_name
 * @property string $product_price
 * @property string $qty_ordered
 * @property integer $rating_pos
 */
class Mage1SalesBestsellersYearlyPeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sales_bestsellers_aggregated_yearly}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('store_id, rating_pos', 'numerical', 'integerOnly'=>true),
			array('product_id', 'length', 'max'=>10),
			array('product_name', 'length', 'max'=>255),
			array('product_price, qty_ordered', 'length', 'max'=>12),
			array('period', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1SalesBestsellersYearly the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
