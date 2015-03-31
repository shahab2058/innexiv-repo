<?php

/**
 * This is the model class for table "province".
 *
 * The followings are the available columns in table 'province':
 * @property integer $id
 * @property string $name
 * @property integer $country_id
 *
 * The followings are the available model relations:
 * @property Customer[] $customers
 * @property Customer[] $customers1
 */
class Province extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'province';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('country_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, country_id', 'safe', 'on'=>'search'),
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
			'customers' => array(self::HAS_MANY, 'Customer', 'physical_address_province_id'),
			'customers1' => array(self::HAS_MANY, 'Customer', 'mailing_address_province_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'country_id' => 'Country',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('country_id',$this->country_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Province the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        
        
        
        public function selected($provinceid){
		
		
		//echo $projectid;
		$arr1  = array();
		$arr2  = array();
		
		$arr2['selected'] = true;
		
		if(isset($provinceid) && trim($provinceid) != '' ){
                    
                    
                   
                  
		
		$provincemodel = $this->findByPk($provinceid);
		
		$country_id  = $provincemodel->country_id;
		
		$arr1[$country_id] = $arr2;
		
                
		return $arr1;
		
		}
		
		
		}
                
                
            
                
               public function loadallprovinces($country_id)
{
	
                   
                   
	
 
   //$models=CHtml::listData($models,'id','name');
 
 $arr = array();
 
 if(isset($country_id) && trim($country_id) != '' ){
     
      $models = $this->findAll(array('condition'=>'country_id='.$country_id));
 foreach($models as $key){
	 
	$arr[$key->id] = $key->name;
	 }
 }
 


   return $arr;
   
   
}





                
        
        
}
