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
    <link rel="icon" href="<?php echo img_url();?>favicon.png" type="image/png" sizes="16x16">
    <title><?php echo $pageTitle;?></title>
    
     <link rel="stylesheet" type="text/css" href="<?php echo css_url();?>style.css"/>
         
 </head>

 
 <!-- Core Scripts - Include with every page -->
 	<script type="text/javascript" src="<?php echo js_url();?>jquery-1.8.3.min.js"></script>
 	
 	
 	
<body> 	 
<?php $this->view($layout);?>  
</body> 
</html>