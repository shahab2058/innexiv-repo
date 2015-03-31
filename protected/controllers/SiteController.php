<?php

class SiteController extends Controller
{
	//public $layout='column1';

	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=Filename
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	 
	 
	 
	 
	 public function filters()
    {
        return array(
            'accessControl',
        );
    }
        
		
		
	 
	 
	
	
	public function accessRules()
    {
        return array(
            
					array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('login'),
				'users'=>array('*'),
			),
			
			array('allow', // allow authenticated users to access all actions
                'actions'=>array('dashboard','logout'),
				'users'=>array('@'),
            ),
            array('deny'),
        );
    }
	
	
	
	
	 	 
		 
		 public function actionDashboard(){
			 
		$this->render('dashboard');	 
			 }
			 
			 
			 
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}

	
	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		

		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login()){
				
                             if(Yii::app()->user->level == '1'){
                                 
                                 $this->redirect(array('project/admin'));
                             }
                             
                             else if(Yii::app()->user->level == '2'){
                                 
                                 $this->redirect(array('plan/dashboard'));
                                 
                             }
                             else if(Yii::app()->user->level == '3'){
                                 
                                 $this->redirect(array('plan/planroute'));
                                 
                             }
                             else if(Yii::app()->user->level == '4'){
                                 
                                 $this->redirect(array('plan/finance'));
                                 
                             }
                             else if(Yii::app()->user->level == '5'){
                                 
                                 $this->redirect(array('plan/warehouse'));
                                 
                             }
                             
                             else if(Yii::app()->user->level == '6'){
                                 
                                 $this->redirect(array('plan/timeandattendance'));
                                 
                             }
                             
                             
                             else{
                            $this->redirect(Yii::app()->user->returnUrl);
                             }
                        }
                        
                        
                        
                             }
		// display the login form
		
		
		if(Yii::app()->user->isGuest) {
                    
		$this->layout="//layouts/login";
		$this->render('login',array('model'=>$model));


                } else {
                    
                  
                            
                    
                    $this->render('dashboard');                 
                    
                }

	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}
