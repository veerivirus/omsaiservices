<!DOCTYPE html>	 
<html class="no-js"> 
<head>
	<meta charset="utf-8" />
	<!-- Mobile viewport optimized: h5bp.com/viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <meta name="title" content="<?php echo $pageTitle;?>" />
    <meta name="description" content="<?php echo $metaDescription;?>" />
    <meta name="keywords" content="<?php echo $metaKeywords;?>" />
    <meta name="author" content="Bodagala Veerendra Kumar"/>    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" href="<?php echo admin_img_url();?>favicon.png" type="image/png" sizes="16x16">
    <title><?php echo $pageTitle;?></title>
    
    
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo admin_css_url();?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo admin_css_url();?>vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo admin_css_url();?>dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo admin_css_url();?>vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo admin_css_url();?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    
     
         
 </head>

 
 <!-- Core Scripts - Include with every page -->
 	
 	
 	
 	
 	
 	
<body>
	 <div id="wrapper"> 	 
		<?php $this->view($layout);?>  
	</div>
	 <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo admin_css_url();?>vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo admin_css_url();?>vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo admin_css_url();?>vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo admin_css_url();?>vendor/morrisjs/morris.min.js"></script>
    <script src="<?php echo admin_js_url();?>data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo admin_css_url();?>dist/js/sb-admin-2.js"></script>
</body> 
</html>