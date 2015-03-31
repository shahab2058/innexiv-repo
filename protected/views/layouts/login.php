<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />


<?php Yii::app()->bootstrap->register(); ?>

	<title><?php  echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">



	<?php echo $content; ?>

	
    
 

</div><!-- page -->

 <!-- footer -->

   <footer class="footer">
      <div class="container">
        <p class="text-muted">Copyright &copy; <?php echo date('Y'); ?> by INNEXIV. All Rights Reserved.</p>
      </div>
    </footer>
    <!-- footer -->
</body>
</html>