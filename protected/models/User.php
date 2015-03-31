<?php

class User extends CActiveRecord
{
	/**
	 * The followings are the available columns in table 'tbl_user':
	 * @var integer $id
	 * @var string $username
	 * @var string $password
	 * @var string $salt
	 * @var string $email
	 * @var string $profile
	 */

	/**
	 * Returns the static model of the specified AR class.
	 * @return CActiveRecord the static model class
	 */
	public static function model($classname=__CLASS__)
	{
		return parent::model($classname);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tablename()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, salt, email', 'required'),
			array('username, password, salt, email', 'length', 'max'=>128),
			array('profile', 'safe'),
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
			'posts' => array(self::HAS_MANY, 'Post', 'author_id')
                    
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'id',
			'username' => 'Username',
			'password' => 'Password',
			'salt' => 'Salt',
			'email' => 'Email',
			'profile' => 'Profile',
		);
	}

	/**
	 * Checks if the given password is correct.
	 * @param string the password to be validated
	 * @return boolean whether the password is valid
	 */
	public function validatePassword($password)
	{
		return $this->hashPassword($password,'28b206548469ce62182048fd9cf91760')===$this->password;
	}

	/**
	 * Generates the password hash.
	 * @param string password
	 * @param string salt
	 * @return string hash
	 */
	public function hashPassword($password,$salt)
	{
		return md5($password);
	}
	
	 public function findByEmail($email)
  {
    return self::model()->findByAttributes(array('email' => $email));
  }

	/**
	 * Generates a salt that can be used to generate a password hash.
	 * @return string the salt
	 */
	protected function generateSalt()
	{
		return uniqid('',true);
	}
	
	 public  function changepassword($id, $password) {
        $model = self::model()->findByPk($id);
        $model->password = md5($password);
        if ($model->update('password'))
            return true;
        else
            return false;
    }
	
	
	
	public function beforeSave() {
        if ($this->isNewRecord) {
            $this->password = md5($this->password);
            $this->active_key = microtime() . md5($this->password);
        }
        else
           /* if($this->verified==0){
                $this->verified_by=Yii::app()->user->id;
                $this->verified_date=date("F j, Y h:m a");
            }*/
         
            $this->password = $this->password;
           
        return true;
    }
	
	
	
}


