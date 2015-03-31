<?php

/**
 * This is the model class for table "site".
 *
 * The followings are the available columns in table 'site':
 * @property string $id
 * @property string $name
 * @property string $shortname
 * @property double $latitude
 * @property double $longitude
 *
 * The followings are the available model relations:
 * @property Project $project
 */
class Site extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
        public $FilterCenter;
        public $file;
        
	public function tablename()
	{
		return 'site';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			
			array('countryid,regionid,provinceid,cityid', 'numerical', 'integerOnly'=>true),
			array('latitude, longitude', 'numerical'),
			array('name', 'length', 'max'=>50),
			array('shortname', 'length', 'max'=>25),
                    
                        array('file', 'file', 
                                            'types'=>'csv',
                                            'maxSize'=>1024 * 1024 * 10, // 10MB
                                            'tooLarge'=>'The file was larger than 10MB. Please upload a smaller file.',
                                            'allowEmpty' => false
                              ),
                    
                    
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, shortname, latitude, longitude,countryid,regionid,provinceid,cityid', 'safe', 'on'=>'search'),
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
			//'project' => array(self::BELONGS_TO, 'Project', 'projectid'),
                    'planroutesite' => array(self::HAS_MANY, 'Site', 'siteid'),
                    
                    'projectsite_sites' => array(self::HAS_MANY, 'Projectsite', 'siteid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'id',
			'name' => 'name',
			'shortname' => 'Short name',
			'latitude'  => 'latitude',
			'longitude' => 'longitude',
                        'countryid' => 'countryid',
                        'regionid'  => 'regionid',
                        'cityid'    => 'cityid',
                        'provinceid'   => 'provinceid',
                        'file' => 'Select file',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('shortname',$this->shortname,true);
		$criteria->compare('latitude',$this->latitude);
		$criteria->compare('longitude',$this->longitude);
                $criteria->compare('countryid',$this->countryid);
                $criteria->compare('provinceid',$this->provinceid);
                $criteria->compare('regionid',$this->regionid);
                $criteria->compare('cityid',$this->cityid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $classname active record class name.
	 * @return Site the static model class
	 */
	public static function model($classname=__CLASS__)
	{
		return parent::model($classname);
	}
        
        public static function FilterCenter(){
            
            $sites = Site::model()->findAll();
            
            
            $sites_array = array();
            
            foreach($sites as $key => $site){
                
               $sites_array[$site->latitude.','.$site->longitude.','.$site->id] = $site->shortname; 
                
            }
            
            return $sites_array;
            
        }
        
        
        
        
        
}
