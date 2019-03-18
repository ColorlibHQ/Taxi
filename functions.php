<?php 
/**
 * @Packge 	   : taxi
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
// Block direct access
if( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */
 
// Base URI
if( ! defined( 'TAXI_DIR_URI' ) ) {
	define( 'TAXI_DIR_URI', get_template_directory_uri().'/' );
}

// assets URI
if( ! defined( 'TAXI_DIR_ASSETS_URI' ) ) {
	define( 'TAXI_DIR_ASSETS_URI', TAXI_DIR_URI.'assets/' );
}

// Css File URI
if( ! defined( 'TAXI_DIR_CSS_URI' ) ) {
	define( 'TAXI_DIR_CSS_URI', TAXI_DIR_ASSETS_URI .'css/' );
}

// Js File URI
if( ! defined( 'TAXI_DIR_JS_URI' ) ) {
	define( 'TAXI_DIR_JS_URI', TAXI_DIR_ASSETS_URI .'js/' );
}

// Base Directory
if( ! defined( 'TAXI_DIR_PATH' ) ) {
	define( 'TAXI_DIR_PATH', get_parent_theme_file_path().'/' );
}

//Inc Folder Directory
if( ! defined( 'TAXI_DIR_PATH_INC' ) ) {
	define( 'TAXI_DIR_PATH_INC', TAXI_DIR_PATH.'inc/' );
}

//taxi libraries Folder Directory
if( ! defined( 'TAXI_DIR_PATH_LIBS' ) ) {
	define( 'TAXI_DIR_PATH_LIBS', TAXI_DIR_PATH_INC.'libraries/' );
}

//Classes Folder Directory
if( ! defined( 'TAXI_DIR_PATH_CLASSES' ) ) {
	define( 'TAXI_DIR_PATH_CLASSES', TAXI_DIR_PATH_INC.'classes/' );
}

//Hooks Folder Directory
if( ! defined( 'TAXI_DIR_PATH_HOOKS' ) ) {
	define( 'TAXI_DIR_PATH_HOOKS', TAXI_DIR_PATH_INC.'hooks/' );
}

//Widgets Folder Directory
if( ! defined( 'TAXI_DIR_PATH_WIDGET' ) ) {
	define( 'TAXI_DIR_PATH_WIDGET', TAXI_DIR_PATH_INC.'widgets/' );
}




/**
 * Include File
 *
 */

require_once( TAXI_DIR_PATH_INC . 'taxi-companion/taxi-companion.php' );
require_once( TAXI_DIR_PATH_INC . 'breadcrumbs.php' );
require_once( TAXI_DIR_PATH_INC . 'category-meta.php' );
require_once( TAXI_DIR_PATH_INC . 'widgets-reg.php' );
require_once( TAXI_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( TAXI_DIR_PATH_INC . 'taxi-functions.php' );
require_once( TAXI_DIR_PATH_INC . 'commoncss.php' );
require_once( TAXI_DIR_PATH_INC . 'support-functions.php' );
require_once( TAXI_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( TAXI_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( TAXI_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( TAXI_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( TAXI_DIR_PATH_HOOKS . 'hooks.php' );
require_once( TAXI_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( TAXI_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( TAXI_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );


/**
 * Instantiate taxi object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$obj = new taxi();
