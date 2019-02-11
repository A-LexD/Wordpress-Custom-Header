 <?php

 add_theme_support( 'menus');

require_once('wp_bootstrap_navwalker.php');

add_action( ' after_setup_theme ', function() {

	 

	register_nav_menus ( [

			'head_menu' => 'Шапка сайта',

	]); 

} );
  