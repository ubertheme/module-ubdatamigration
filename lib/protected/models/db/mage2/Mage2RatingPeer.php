<?php

/**
 * This is the model class for table "rating".
 *
 * The followings are the available columns in table 'rating':
 * @property integer $rating_id
 * @property integer $entity_id
 * @property string $rating_code
 * @property integer $position
 * @property integer $is_active
 */
class Mage2RatingPeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{rating}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rating_code', 'required'),
			array('entity_id, position, is_active', 'numerical', 'integerOnly'=>true),
			array('rating_code', 'length', 'max'=>64),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2RatingPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
