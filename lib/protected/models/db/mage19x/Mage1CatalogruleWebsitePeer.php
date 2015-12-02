<?php

/**
 * This is the model class for table "catalogrule_website".
 *
 * The followings are the available columns in table 'catalogrule_website':
 * @property string $rule_id
 * @property integer $website_id
 */
class Mage1CatalogruleWebsitePeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{catalogrule_website}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rule_id, website_id', 'required'),
			array('website_id', 'numerical', 'integerOnly'=>true),
			array('rule_id', 'length', 'max'=>10),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1CatalogruleWebsitePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
