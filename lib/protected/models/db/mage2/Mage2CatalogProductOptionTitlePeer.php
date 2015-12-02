<?php

/**
 * This is the model class for table "catalog_product_option_title".
 *
 * The followings are the available columns in table 'catalog_product_option_title':
 * @property string $option_title_id
 * @property string $option_id
 * @property integer $store_id
 * @property string $title
 */
class Mage2CatalogProductOptionTitlePeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{catalog_product_option_title}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('store_id', 'numerical', 'integerOnly'=>true),
			array('option_id', 'length', 'max'=>10),
			array('title', 'length', 'max'=>255),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2CatalogProductOptionTitlePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
