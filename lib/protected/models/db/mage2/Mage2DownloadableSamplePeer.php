<?php

/**
 * This is the model class for table "downloadable_sample".
 *
 * The followings are the available columns in table 'downloadable_sample':
 * @property string $sample_id
 * @property string $product_id
 * @property string $sample_url
 * @property string $sample_file
 * @property string $sample_type
 * @property string $sort_order
 */
class Mage2DownloadableSamplePeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{downloadable_sample}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('product_id, sort_order', 'length', 'max'=>10),
			array('sample_url, sample_file', 'length', 'max'=>255),
			array('sample_type', 'length', 'max'=>20),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2DownloadableSamplePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
