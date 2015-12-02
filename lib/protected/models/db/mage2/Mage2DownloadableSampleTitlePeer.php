<?php

/**
 * This is the model class for table "downloadable_sample_title".
 *
 * The followings are the available columns in table 'downloadable_sample_title':
 * @property string $title_id
 * @property string $sample_id
 * @property integer $store_id
 * @property string $title
 */
class Mage2DownloadableSampleTitlePeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{downloadable_sample_title}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('store_id', 'numerical', 'integerOnly'=>true),
			array('sample_id', 'length', 'max'=>10),
			array('title', 'length', 'max'=>255),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2DownloadableSampleTitlePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
