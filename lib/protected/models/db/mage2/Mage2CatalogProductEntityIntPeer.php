<?php

/**
 * This is the model class for table "catalog_product_entity_int".
 *
 * The followings are the available columns in table 'catalog_product_entity_int':
 * @property integer $value_id
 * @property integer $attribute_id
 * @property integer $store_id
 * @property string $entity_id
 * @property integer $value
 */
class Mage2CatalogProductEntityIntPeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{catalog_product_entity_int}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('attribute_id, store_id, value', 'numerical', 'integerOnly'=>true),
			array('entity_id', 'length', 'max'=>10),
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
			'store' => array(self::BELONGS_TO, 'Store', 'store_id'),
			'attribute' => array(self::BELONGS_TO, 'EavAttribute', 'attribute_id'),
			'entity' => array(self::BELONGS_TO, 'CatalogProductEntity', 'entity_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'value_id' => 'Value',
			'attribute_id' => 'Attribute',
			'store_id' => 'Store',
			'entity_id' => 'Entity',
			'value' => 'Value',
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

		$criteria->compare('value_id',$this->value_id);
		$criteria->compare('attribute_id',$this->attribute_id);
		$criteria->compare('store_id',$this->store_id);
		$criteria->compare('entity_id',$this->entity_id,true);
		$criteria->compare('value',$this->value);

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
	 * @return Mage2CatalogProductEntityIntPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
