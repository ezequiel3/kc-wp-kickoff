<?php
//Registering sidebar
if ( function_exists('register_sidebar') )
	register_sidebar(array(  
		'name' => 'Bar 1',
		'id' => 'bar-1',
		'before_widget' => '<aside>',  
		'after_widget' => '</aside>',  
		'before_title' => '<h4>',  
		'after_title' => '</h4>',  
	));
	register_sidebar(array(  
		'name' => 'Bar 2',
		'id' => 'bar-2',
		'before_widget' => '<aside>',  
		'after_widget' => '</aside>',  
		'before_title' => '<h4>',  
		'after_title' => '</h4>',  
	));
?>
