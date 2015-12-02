<?php

/**
 * This is the model class for table "review_store".
 *
 * The followings are the available columns in table 'review_store':
 * @property string $review_id
 * @property integer $store_id
 */
class Mage2ReviewStorePeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{review_store}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('review_id, store_id', 'required'),
			array('store_id', 'numerical', 'integerOnly'=>true),
			array('review_id', 'length', 'max'=>20),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2ReviewStorePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
