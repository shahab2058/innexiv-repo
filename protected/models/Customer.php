<?php

/**
 * This is the model class for table "customer".
 *
 * The followings are the available columns in table 'customer':
 * @property integer $id
 * @property string $logo
 * @property string $name
 * @property string $physical_address
 * @property string $physical_address_city
 * @property integer $physical_address_province_id
 * @property integer $physical_address_country_id
 * @property string $physical_address_zip
 * @property string $mailing_address
 * @property string $mailing_address_city
 * @property integer $mailing_address_province_id
 * @property integer $mailing_address_country_id
 * @property string $mailing_address_zip
 * @property string $website
 * @property integer $industry_id
 * @property string $phone
 * @property string $mobile
 * @property string $email
 * @property string $fax
 * @property string $skype
 *
 * The followings are the available model relations:
 * @property Province $physicalAddressProvince
 * @property Country $physicalAddressCountry
 * @property Province $mailingAddressProvince
 * @property Country $mailingAddressCountry
 * @property Industry $industry
 */
class Customer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'customer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('physical_address_province_id, physical_address_country_id, mailing_address_province_id, mailing_address_country_id, industry_id', 'numerical', 'integerOnly'=>true),
			array('logo, website', 'length', 'max'=>255),
			array('name, physical_address_city, physical_address_zip, mailing_address_city, mailing_address_zip, phone, mobile, email, fax, skype', 'length', 'max'=>100),
			array('physical_address, mailing_address', 'safe'),
                        array('logo', 'file','allowEmpty'=>true, 'types'=>'jpg, gif, png'),
                    
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, logo, name, physical_address, physical_address_city, physical_address_province_id, physical_address_country_id, physical_address_zip, mailing_address, mailing_address_city, mailing_address_province_id, mailing_address_country_id, mailing_address_zip, website, industry_id, phone, mobile, email, fax, skype', 'safe', 'on'=>'search'),
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
			'physicalAddressProvince' => array(self::BELONGS_TO, 'Province', 'physical_address_province_id'),
			'physicalAddressCountry' => array(self::BELONGS_TO, 'Country', 'physical_address_country_id'),
			'mailingAddressProvince' => array(self::BELONGS_TO, 'Province', 'mailing_address_province_id'),
			'mailingAddressCountry' => array(self::BELONGS_TO, 'Country', 'mailing_address_country_id'),
			'industry' => array(self::BELONGS_TO, 'Industry', 'industry_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'logo' => 'Logo',
			'name' => 'Company Name',
			'physical_address' => 'Address',
			'physical_address_city' => 'City',
			'physical_address_province_id' => 'Province',
			'physical_address_country_id' => 'Country',
			'physical_address_zip' => 'Zipcode',
			'mailing_address' => 'Mailing Address',
			'mailing_address_city' => 'City',
			'mailing_address_province_id' => 'Province',
			'mailing_address_country_id' => 'Country',
			'mailing_address_zip' => 'Zipcode',
			'website' => 'Website',
			'industry_id' => 'Industry',
			'phone' => 'Phone',
			'mobile' => 'Mobile',
			'email' => 'Email',
			'fax' => 'Fax',
			'skype' => 'Skype',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('physical_address',$this->physical_address,true);
		$criteria->compare('physical_address_city',$this->physical_address_city,true);
		$criteria->compare('physical_address_province_id',$this->physical_address_province_id);
		$criteria->compare('physical_address_country_id',$this->physical_address_country_id);
		$criteria->compare('physical_address_zip',$this->physical_address_zip,true);
		$criteria->compare('mailing_address',$this->mailing_address,true);
		$criteria->compare('mailing_address_city',$this->mailing_address_city,true);
		$criteria->compare('mailing_address_province_id',$this->mailing_address_province_id);
		$criteria->compare('mailing_address_country_id',$this->mailing_address_country_id);
		$criteria->compare('mailing_address_zip',$this->mailing_address_zip,true);
		$criteria->compare('website',$this->website,true);
		$criteria->compare('industry_id',$this->industry_id);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('skype',$this->skype,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Customer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
