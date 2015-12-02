<?php

/**
 * This is the model class for table "rating_option".
 *
 * The followings are the available columns in table 'rating_option':
 * @property string $option_id
 * @property integer $rating_id
 * @property string $code
 * @property integer $value
 * @property integer $position
 */
class Mage1RatingOptionPeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{rating_option}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code', 'required'),
			array('rating_id, value, position', 'numerical', 'integerOnly'=>true),
			array('code', 'length', 'max'=>32),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1RatingOptionPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
