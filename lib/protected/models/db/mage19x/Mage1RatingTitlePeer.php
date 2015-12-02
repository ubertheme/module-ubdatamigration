<?php

/**
 * This is the model class for table "rating_title".
 *
 * The followings are the available columns in table 'rating_title':
 * @property integer $rating_id
 * @property integer $store_id
 * @property string $value
 */
class Mage1RatingTitlePeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{rating_title}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('value', 'required'),
			array('rating_id, store_id', 'numerical', 'integerOnly'=>true),
			array('value', 'length', 'max'=>255),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1RatingTitlePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
