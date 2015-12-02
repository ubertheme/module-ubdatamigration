<?php

/**
 * This is the model class for table "rating_option_vote".
 *
 * The followings are the available columns in table 'rating_option_vote':
 * @property string $vote_id
 * @property string $option_id
 * @property string $remote_ip
 * @property string $remote_ip_long
 * @property string $customer_id
 * @property string $entity_pk_value
 * @property integer $rating_id
 * @property string $review_id
 * @property integer $percent
 * @property integer $value
 */
class Mage1RatingOptionVotePeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{rating_option_vote}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('remote_ip', 'required'),
			array('rating_id, percent, value', 'numerical', 'integerOnly'=>true),
			array('option_id, customer_id', 'length', 'max'=>10),
			array('remote_ip', 'length', 'max'=>16),
			array('remote_ip_long, entity_pk_value, review_id', 'length', 'max'=>20),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1RatingOptionVotePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
