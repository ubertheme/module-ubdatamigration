<?php

/**
 * This is the model class for table "salesrule_label".
 *
 * The followings are the available columns in table 'salesrule_label':
 * @property string $label_id
 * @property string $rule_id
 * @property integer $store_id
 * @property string $label
 */
class Mage1SalesruleLabelPeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{salesrule_label}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rule_id, store_id', 'required'),
			array('store_id', 'numerical', 'integerOnly'=>true),
			array('rule_id', 'length', 'max'=>10),
			array('label', 'length', 'max'=>255),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1SalesruleLabelPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
