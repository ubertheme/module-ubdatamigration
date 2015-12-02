<?php

/**
 * This is the model class for table "sales_flat_quote_payment".
 *
 * The followings are the available columns in table 'sales_flat_quote_payment':
 * @property string $payment_id
 * @property string $quote_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $method
 * @property string $cc_type
 * @property string $cc_number_enc
 * @property string $cc_last4
 * @property string $cc_cid_enc
 * @property string $cc_owner
 * @property integer $cc_exp_month
 * @property integer $cc_exp_year
 * @property string $cc_ss_owner
 * @property integer $cc_ss_start_month
 * @property integer $cc_ss_start_year
 * @property string $po_number
 * @property string $additional_data
 * @property string $cc_ss_issue
 * @property string $additional_information
 * @property string $paypal_payer_id
 * @property string $paypal_payer_status
 * @property string $paypal_correlation_id
 * @property string $cybersource_token
 * @property string $ideal_issuer_id
 * @property string $ideal_issuer_list
 */
class Mage1SalesQuotePaymentPeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sales_flat_quote_payment}}';
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
			array('cc_exp_month, cc_exp_year, cc_ss_start_month, cc_ss_start_year', 'numerical', 'integerOnly'=>true),
			array('quote_id', 'length', 'max'=>10),
			array('method, cc_type, cc_number_enc, cc_last4, cc_cid_enc, cc_owner, cc_ss_owner, po_number, cc_ss_issue, paypal_payer_id, paypal_payer_status, paypal_correlation_id, cybersource_token, ideal_issuer_id', 'length', 'max'=>255),
			array('updated_at, additional_data, additional_information, ideal_issuer_list', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1SalesQuotePaymentPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
