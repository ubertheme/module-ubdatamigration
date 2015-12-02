<?php

/**
 * This is the model class for table "review_entity".
 *
 * The followings are the available columns in table 'review_entity':
 * @property integer $entity_id
 * @property string $entity_code
 */
class Mage1ReviewEntityPeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{review_entity}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('entity_code', 'required'),
			array('entity_code', 'length', 'max'=>32),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1ReviewEntityPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
