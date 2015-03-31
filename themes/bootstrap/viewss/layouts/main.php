<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
    
   
    
    <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/images/favicon.ico" type="image/x-icon">



	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>

<?php 

if (Yii::app()->user->getId() !== null) {
	
$this->widget('bootstrap.widgets.TbNavbar',array(
'brandUrl' => 'index.php?r=site/dashboard',
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/dashboard')),
                //array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                //array('label'=>'Contact', 'url'=>array('/site/contact')),
				
				
				array('label'=>'Radio', 'url'=>'#', 'items'=>array(
                   
                    array('label'=>'Shows (Manage Shows)', 'url'=>array('/show/admin')),
                    array('label'=>'Titles (Manage Show Titles)', 'url'=>array('/showtitle/admin')),
					 array('label'=>'Tags (Manage Show Tags)', 'url'=>array('/tag/admin')),
				    //array('label'=>'Something else here', 'url'=>'#'),
                    //'---',
                    //array('label'=>'NAV HEADER'),
                    //array('label'=>'Separated link', 'url'=>'#'),
                    //array('label'=>'One more separated link', 'url'=>'#'),
                )),
				
				array('label'=>'Settings', 'url'=>'#', 'items'=>array(
                   
                 // array('label'=>'Manage Show Titles', 'url'=>array('/showtitle/admin')),
				//	array('label'=>'Manage Tags', 'url'=>array('/tag/admin')),
                    array('label'=>'Change Password', 'url'=>'index.php?r=changepassword/changepassword'),
                    //'---',
                    //array('label'=>'NAV HEADER'),
                    //array('label'=>'Separated link', 'url'=>'#'),
                    //array('label'=>'One more separated link', 'url'=>'#'),
              )),
				
				
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); 

}

else {
	
	
	
$this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
               
                //array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                //array('label'=>'Contact', 'url'=>array('/site/contact')),
				
				
				
				
			//	array('label'=>'Settings', 'url'=>'#', 'items'=>array(
                   
                //    array('label'=>'Manage Show Titles', 'url'=>array('/showtitle/admin')),
				//	array('label'=>'Manage Tags', 'url'=>array('/tag/admin')),
                    //array('label'=>'Something else here', 'url'=>'#'),
                    //'---',
                    //array('label'=>'NAV HEADER'),
                    //array('label'=>'Separated link', 'url'=>'#'),
                    //array('label'=>'One more separated link', 'url'=>'#'),
             //   )),
				
				
                
            ),
        ),
    ),
)); 

}
?>

<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer" style="border:none;width: 100%;background: #f5f5f5;">
		Copyright &copy; <?php echo date('Y'); ?> by Raabta Consultants.
		All Rights Reserved.
		
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
