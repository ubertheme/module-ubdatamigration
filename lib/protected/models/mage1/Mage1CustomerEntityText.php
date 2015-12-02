<?php

/**
 * This is the model class for table "customer_entity_text".
 *
 * The followings are the available columns in table 'customer_entity_text':
 * @property integer $value_id
 * @property integer $entity_type_id
 * @property integer $attribute_id
 * @property string $entity_id
 * @property string $value
 */
class Mage1CustomerEntityText extends Mage1CustomerEntityTextPeer
{
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1CustomerEntityTextPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
