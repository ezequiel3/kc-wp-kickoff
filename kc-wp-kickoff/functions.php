<?php
//Set translate method/domain
$translate_domain='default';

//Registering sidebars
if (function_exists('register_sidebar')){
	register_sidebar(array(  
		'name' => 'Widget Sidebar',
		'id' => 'widget-sidebar',
		'before_widget' => '<aside>',  
		'after_widget' => '</aside>',  
		'before_title' => '<h4>',  
		'after_title' => '</h4>',  
	));
	register_sidebar(array(  
		'name' => 'Widget Footer',
		'id' => 'widget-footer',
		'before_widget' => '<aside>',  
		'after_widget' => '</aside>',  
		'before_title' => '<h4>',  
		'after_title' => '</h4>',  
	));
}
//Registering Menus
function register_my_menus() {
  register_nav_menus(
    array(
      'main-nav' => __( 'Main Nav' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

?>
