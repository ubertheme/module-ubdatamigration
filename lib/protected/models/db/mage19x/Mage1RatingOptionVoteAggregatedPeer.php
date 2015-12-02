<?php

/**
 * This is the model class for table "rating_option_vote_aggregated".
 *
 * The followings are the available columns in table 'rating_option_vote_aggregated':
 * @property integer $primary_id
 * @property integer $rating_id
 * @property string $entity_pk_value
 * @property string $vote_count
 * @property string $vote_value_sum
 * @property integer $percent
 * @property integer $percent_approved
 * @property integer $store_id
 */
class Mage1RatingOptionVoteAggregatedPeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{rating_option_vote_aggregated}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rating_id, percent, percent_approved, store_id', 'numerical', 'integerOnly'=>true),
			array('entity_pk_value', 'length', 'max'=>20),
			array('vote_count, vote_value_sum', 'length', 'max'=>10),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1RatingOptionVoteAggregatedPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
