<?php

/**
 * This is the model class for table "review".
 *
 * The followings are the available columns in table 'review':
 * @property string $review_id
 * @property string $created_at
 * @property integer $entity_id
 * @property string $entity_pk_value
 * @property integer $status_id
 */
class Mage2ReviewPeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{review}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_at', 'required'),
			array('entity_id, status_id', 'numerical', 'integerOnly'=>true),
			array('entity_pk_value', 'length', 'max'=>10),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2ReviewPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
