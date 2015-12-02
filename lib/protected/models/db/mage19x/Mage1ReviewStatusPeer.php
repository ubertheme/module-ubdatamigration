<?php

/**
 * This is the model class for table "review_status".
 *
 * The followings are the available columns in table 'review_status':
 * @property integer $status_id
 * @property string $status_code
 */
class Mage1ReviewStatusPeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{review_status}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status_code', 'required'),
			array('status_code', 'length', 'max'=>32),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1ReviewStatusPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
