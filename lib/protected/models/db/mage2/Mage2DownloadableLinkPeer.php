<?php

/**
 * This is the model class for table "downloadable_link".
 *
 * The followings are the available columns in table 'downloadable_link':
 * @property string $link_id
 * @property string $product_id
 * @property string $sort_order
 * @property integer $number_of_downloads
 * @property integer $is_shareable
 * @property string $link_url
 * @property string $link_file
 * @property string $link_type
 * @property string $sample_url
 * @property string $sample_file
 * @property string $sample_type
 */
class Mage2DownloadableLinkPeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{downloadable_link}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('number_of_downloads, is_shareable', 'numerical', 'integerOnly'=>true),
			array('product_id, sort_order', 'length', 'max'=>10),
			array('link_url, link_file, sample_url, sample_file', 'length', 'max'=>255),
			array('link_type, sample_type', 'length', 'max'=>20),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2DownloadableLinkPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
