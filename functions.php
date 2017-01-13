<?php
//include base class
require_once('inc/baseclass.php');
//init baseclass
$base=new baseclass('guidetheme');


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

//add widget
$base->add_widget(array(
		'name'          => __( 'Sidebar', 'guidetheme' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add Test widgets here to appear in your sidebar.', 'guidetheme' ),
	));
$base->add_widget(array(
		'name'          => __( 'Sidebar', 'guide' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add Test widgets 2 here to appear in your sidebar.', 'guidetheme' ),
	));
	
$product=new oo_post_type('product','Products','Product','dashicons-archive');



?>
