<?php 
/**
 * @Packge 	   : Animalshelter
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
if( ! defined( 'ANIMALSHELTER_DIR_URI' ) ) {
	define( 'ANIMALSHELTER_DIR_URI', get_template_directory_uri().'/' );
}

// assets URI
if( ! defined( 'ANIMALSHELTER_DIR_ASSETS_URI' ) ) {
	define( 'ANIMALSHELTER_DIR_ASSETS_URI', ANIMALSHELTER_DIR_URI.'assets/' );
}

// Css File URI
if( ! defined( 'ANIMALSHELTER_DIR_CSS_URI' ) ) {
	define( 'ANIMALSHELTER_DIR_CSS_URI', ANIMALSHELTER_DIR_ASSETS_URI .'css/' );
}

// Js File URI
if( ! defined( 'ANIMALSHELTER_DIR_JS_URI' ) ) {
	define( 'ANIMALSHELTER_DIR_JS_URI', ANIMALSHELTER_DIR_ASSETS_URI .'js/' );
}

// Base Directory
if( ! defined( 'ANIMALSHELTER_DIR_PATH' ) ) {
	define( 'ANIMALSHELTER_DIR_PATH', get_parent_theme_file_path().'/' );
}

//Inc Folder Directory
if( ! defined( 'ANIMALSHELTER_DIR_PATH_INC' ) ) {
	define( 'ANIMALSHELTER_DIR_PATH_INC', ANIMALSHELTER_DIR_PATH.'inc/' );
}

//Animalshelter libraries Folder Directory
if( ! defined( 'ANIMALSHELTER_DIR_PATH_LIBS' ) ) {
	define( 'ANIMALSHELTER_DIR_PATH_LIBS', ANIMALSHELTER_DIR_PATH_INC.'libraries/' );
}

//Classes Folder Directory
if( ! defined( 'ANIMALSHELTER_DIR_PATH_CLASSES' ) ) {
	define( 'ANIMALSHELTER_DIR_PATH_CLASSES', ANIMALSHELTER_DIR_PATH_INC.'classes/' );
}

//Hooks Folder Directory
if( ! defined( 'ANIMALSHELTER_DIR_PATH_HOOKS' ) ) {
	define( 'ANIMALSHELTER_DIR_PATH_HOOKS', ANIMALSHELTER_DIR_PATH_INC.'hooks/' );
}

//Widgets Folder Directory
if( ! defined( 'ANIMALSHELTER_DIR_PATH_WIDGET' ) ) {
	define( 'ANIMALSHELTER_DIR_PATH_WIDGET', ANIMALSHELTER_DIR_PATH_INC.'widgets/' );
}



// Admin Enqueue script
function animalshelter_admin_script(){
    wp_enqueue_style( 'animalshelter-admin', get_template_directory_uri().'/assets/css/animalshelter_admin.css', false, '1.0.0' );
    wp_enqueue_script( 'animalshelter_admin', get_template_directory_uri().'/assets/js/animalshelter_admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'animalshelter_admin_script' );




/**
 * Include File
 *
 */
require_once( ANIMALSHELTER_DIR_PATH_INC . 'breadcrumbs.php' );
require_once( ANIMALSHELTER_DIR_PATH_INC . 'widgets-reg.php' );
require_once( ANIMALSHELTER_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( ANIMALSHELTER_DIR_PATH_INC . 'animalshelter-functions.php' );
require_once( ANIMALSHELTER_DIR_PATH_INC . 'commoncss.php' );
require_once( ANIMALSHELTER_DIR_PATH_INC . 'support-functions.php' );
require_once( ANIMALSHELTER_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( ANIMALSHELTER_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( ANIMALSHELTER_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( ANIMALSHELTER_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( ANIMALSHELTER_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( ANIMALSHELTER_DIR_PATH_HOOKS . 'hooks.php' );
require_once( ANIMALSHELTER_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( ANIMALSHELTER_DIR_PATH_INC . 'animalshelter-companion/animalshelter-companion.php' );
require_once( ANIMALSHELTER_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( ANIMALSHELTER_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );


/**
 * Instantiate Animalshelter object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$obj = new Animalshelter();
