<?php

/**
 * This is the model class for table "quote_shipping_rate".
 *
 * The followings are the available columns in table 'quote_shipping_rate':
 * @property string $rate_id
 * @property string $address_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $carrier
 * @property string $carrier_title
 * @property string $code
 * @property string $method
 * @property string $method_description
 * @property string $price
 * @property string $error_message
 * @property string $method_title
 */
class Mage2SalesQuoteShippingRatePeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{quote_shipping_rate}}';
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
			array('address_id', 'length', 'max'=>10),
			array('carrier, carrier_title, code, method', 'length', 'max'=>255),
			array('price', 'length', 'max'=>12),
			array('updated_at, method_description, error_message, method_title', 'safe'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'rate_id' => 'Rate',
			'address_id' => 'Address',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'carrier' => 'Carrier',
			'carrier_title' => 'Carrier Title',
			'code' => 'Code',
			'method' => 'Method',
			'method_description' => 'Method Description',
			'price' => 'Price',
			'error_message' => 'Error Message',
			'method_title' => 'Method Title',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('rate_id',$this->rate_id,true);
		$criteria->compare('address_id',$this->address_id,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('carrier',$this->carrier,true);
		$criteria->compare('carrier_title',$this->carrier_title,true);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('method',$this->method,true);
		$criteria->compare('method_description',$this->method_description,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('error_message',$this->error_message,true);
		$criteria->compare('method_title',$this->method_title,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * @return CDbConnection the database connection used for this class
	 */
	public function getDbConnection()
	{
		return Yii::app()->mage2;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2SalesQuoteShippingRatePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
