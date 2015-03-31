<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />


<?php Yii::app()->bootstrap->register(); ?>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.sortable.js"></script>




	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>







<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" style="padding: 13px;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                   Product Delivery System
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
                
                
		<?php 
		
		
		if(Yii::app()->user->isSuperuser()){
		$this->widget('zii.widgets.CMenu',array(
		//'id' => 'nav nav-bar',
			'items'=>array(
				                array('label'=>'Home', 'url'=>array('site/dashboard')),			
				array('label'=>'CRM', 'url'=>array('customer/admin')),                            
                                array('label'=>'Login', 'url'=>array('site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
			
			'htmlOptions'=>array('class'=>'nav navbar-nav')
		));}
		
		
		?>
	
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<div style="min-height:100%; position:relative;">
    <!-- Page Content -->
    <div class="container" id="page">
        <div class="spacing">
            <div class="col-lg-12">
            
           
    <?php echo $content; ?>
            </div>
        </div>
    </div></div>
    <!-- /.container -->
    
    
    
    
    
    
    
    

<!-- footer -->

   <footer class="footer">
      <div class="container">
        <p class="text-muted">Copyright &copy; <?php echo date('Y'); ?> by INNEXIV. All Rights Reserved.</p>
      </div>
    </footer>
    <!-- footer -->
    
    
    
    
    
    
    
    
</body>
</html>