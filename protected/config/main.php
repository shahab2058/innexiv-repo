<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Innexiv ERP',



// path aliases
    'aliases' => array(
    
	    'bootstrap' => realpath(__DIR__ . '/../extensions/bootstrap'), // change this if necessaryy
    ),
	
	
	
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'bootstrap.helpers.TbHtml',
		
		'bootstrap.helpers.TbArray',
        'bootstrap.behaviors.TbWidget',
            'bootstrap.widgets.*',
		
		
	),





	'defaultController'=>'site/dashboard',
	
	
	
	 'modules'=>array(
        'gii'=>array(
		
		'generatorPaths' => array('bootstrap.gii'),
            'class'=>'system.gii.GiiModule',
            'password'=>'mygii',
        ),
    ),
	
	
	

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
			'class'=>'application.components.EWebUser',
		),
		
		'bootstrap' => array(
            'class' => 'bootstrap.components.TbApi',   
			
        ),
    
	
	// application-level parameters that can be accessed  
'params'=>array(
    'registrationUrl'=>'site/registration', //Registration page url
    'recoveryUrl'=>'site/recovery', //Recovery or change password page url
    'captchUrl'=>'site/captcha', //Captcha url
  ),
	
	
		
		// uncomment the following to use a MySQL database
		
		/*'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=pds',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'tablePrefix' => 'tbl_',
			'attributes'=>array(
PDO::MYSQL_ATTR_LOCAL_INFILE => true
),*/
            
            
           'db'=>array(
    'connectionString'=>'pgsql:host=localhost;port=5432;dbname=innexiv_erp',
    'emulatePrepare' => true,
    'username'=>'postgres',
    'password'=>'root',
    'charset' => 'utf8',
    'tablePrefix' => 'tbl_',
    'attributes'=>array(
PDO::MYSQL_ATTR_LOCAL_INFILE => true
),
),
            
            
            
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		/*'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'post/<id:\d+>/<title:.*?>'=>'post/view',
				'posts/<tag:.*?>'=>'post/index',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),*/
		
		'behaviors' => array(
    'onBeginRequest' => array(
        'class' => 'application.components.RequireLogin'
    )
),


		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>require(dirname(__FILE__).'/params.php'),
);