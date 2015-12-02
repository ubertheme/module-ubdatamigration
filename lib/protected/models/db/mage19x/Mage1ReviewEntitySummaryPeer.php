<?php

/**
 * This is the model class for table "review_entity_summary".
 *
 * The followings are the available columns in table 'review_entity_summary':
 * @property string $primary_id
 * @property string $entity_pk_value
 * @property integer $entity_type
 * @property integer $reviews_count
 * @property integer $rating_summary
 * @property integer $store_id
 */
class Mage1ReviewEntitySummaryPeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{review_entity_summary}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('entity_type, reviews_count, rating_summary, store_id', 'numerical', 'integerOnly'=>true),
			array('entity_pk_value', 'length', 'max'=>20),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1ReviewEntitySummaryPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
