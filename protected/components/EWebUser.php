<?php

class EWebUser extends CWebUser
{
    private $_userTable = array
    (
        0=>'Normal',
        1=>'Project',
        2=>'Activity',
	3=>'Planner',
        4=>'Finance',
	5=>'Warehouse',
	6=>'Timeandattendance',
        8=>'Admin',
        9=>'Superuser'
    );
 
    protected $_model;
 
    function isProject()
    {
        //Access this via Yii::app()->user->isAdmin()
 
        return (Yii::app()->user->isGuest) ? FALSE : $this->level == 1;
    }
	
	
	function isActivity()
    {
        //Access this via Yii::app()->user->isAdmin()
 
        return (Yii::app()->user->isGuest) ? FALSE : $this->level == 2;
    }
	
	function isPlanner()
    {
        //Access this via Yii::app()->user->isAdmin()
 
        return (Yii::app()->user->isGuest) ? FALSE : $this->level == 3;
    }
    
    function isFinance()
    {
        //Access this via Yii::app()->user->isAdmin()
 
        return (Yii::app()->user->isGuest) ? FALSE : $this->level == 4;
    }
	
	
	function isWarehouse()
    {
        //Access this via Yii::app()->user->isAdmin()
 
        return (Yii::app()->user->isGuest) ? FALSE : $this->level == 5;
    }
	
	function isTimeandattendance()
    {
        //Access this via Yii::app()->user->isAdmin()
 
        return (Yii::app()->user->isGuest) ? FALSE : $this->level == 6;
    }
	
	
	
    
	
	
	
	
	function isAdmin()
    {
        //Access this via Yii::app()->user->isAdmin()
 
        return (Yii::app()->user->isGuest) ? FALSE : $this->level == 8;
    }
 
    public function isSuperuser()
    {
        //Access this via Yii::app()->user->isSuperuser()
 
        return (Yii::app()->user->isGuest) ? FALSE : $this->level == 9;
    }
 
    public function canAccess($minimumLevel)
    {
        //Access this via Yii::app()->user->canAccess(9)
 
        return (Yii::app()->user->isGuest) ? FALSE : $this->level >= $minimumLevel;
    }
 
    public function getRoleName()
    {
        //Access this via Yii::app()->user->roleName()
 
        return (Yii::app()->user->isGuest) ? '' : $this->getUserLabel($this->level);
    }
 
    public function getUserLabel($level)
    {
        //Use this for example as a column in CGridView.columns:
        //
        //array('value'=>'Yii::app()->user->getUserLabel($data->level)'),
 
        return $this->_userTable[$level];
    }
 
    public function getUserLevelsList()
    {
        //Access this via Yii::app()->user->getUserLevelList()
 
        return $this->_userTable;
    } 
}