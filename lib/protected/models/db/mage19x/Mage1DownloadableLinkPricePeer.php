<?php

/**
 * This is the model class for table "downloadable_link_price".
 *
 * The followings are the available columns in table 'downloadable_link_price':
 * @property string $price_id
 * @property string $link_id
 * @property integer $website_id
 * @property string $price
 */
class Mage1DownloadableLinkPricePeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{downloadable_link_price}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('website_id', 'numerical', 'integerOnly'=>true),
			array('link_id', 'length', 'max'=>10),
			array('price', 'length', 'max'=>12),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1DownloadableLinkPricePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
