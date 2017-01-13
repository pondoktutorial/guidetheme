<?php
//include base class
include('inc/baseclass.php');
//init baseclass
$base=new baseclass('guidetheme');

//add image size
$base->imagesize('featured',1920,1080,'true');
//function to add menu
$base->addmenu=array(
		'top'    => __( 'Top Menu', 'twentyseventeen' ),
		'social' => __( 'Social Links Menu', 'twentyseventeen' ),
);

//add css
$base->addcss('mediaqueries','mediaqueries.css');
$base->addcss('bootstrap','bootstrap.min.css');

//add js
$base->addjs('bootstrap-js','bootstrap.min.js');
?>
