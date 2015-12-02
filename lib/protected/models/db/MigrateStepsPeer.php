<?php

/**
 * This is the model class for table "{{migrate_steps}}".
 *
 * The followings are the available columns in table '{{migrate_steps}}':
 * @property string $id
 * @property string $title
 * @property string $code
 * @property integer $status
 * @property string $migrated_data
 * @property string $descriptions
 * @property integer $sorder
 */
class MigrateStepsPeer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{migrate_steps}}';
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MigrateStepsPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
