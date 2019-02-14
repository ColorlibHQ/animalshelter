<?php
/*
 * Plugin Name:       Animalshelter Companion
 * Plugin URI:        https://colorlib.com/wp/themes/animalshelter/
 * Description:       Animalshelter Companion is a companion for Animalshelter theme.
 * Version:           1.0
 * Author:            Colorlib
 * Author URI:        https://colorlib.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       animalshelter-companion
 * Domain Path:       /languages
 */

if( !defined( 'WPINC' ) ){
    die;
}

/*************************
    Define Constant
*************************/

// Define version constant
if( ! defined( 'ANIMALSHELTER_COMPANION_VERSION' ) ) {
    define( 'ANIMALSHELTER_COMPANION_VERSION', '1.0' );
}

// Define dir path constant
if( ! defined( 'ANIMALSHELTER_COMPANION_DIR_PATH' ) ) {
    define( 'ANIMALSHELTER_COMPANION_DIR_PATH', ANIMALSHELTER_DIR_PATH_INC. 'animalshelter-companion/' );
}

// Define inc dir path constant
if( ! defined( 'ANIMALSHELTER_COMPANION_INC_DIR_PATH' ) ) {
    define( 'ANIMALSHELTER_COMPANION_INC_DIR_PATH', ANIMALSHELTER_COMPANION_DIR_PATH . 'inc/' );
}

// Define sidebar widgets dir path constant
if( ! defined( 'ANIMALSHELTER_COMPANION_SW_DIR_PATH' ) ) {
    define( 'ANIMALSHELTER_COMPANION_SW_DIR_PATH', ANIMALSHELTER_COMPANION_INC_DIR_PATH . 'sidebar-widgets/' );
}

// Define elementor widgets dir path constant
if( ! defined( 'ANIMALSHELTER_COMPANION_EW_DIR_PATH' ) ) {
    define( 'ANIMALSHELTER_COMPANION_EW_DIR_PATH', ANIMALSHELTER_COMPANION_INC_DIR_PATH . 'elementor-widgets/' );
}

// Define demo data dir path constant
if( ! defined( 'ANIMALSHELTER_COMPANION_DEMO_DIR_PATH' ) ) {
    define( 'ANIMALSHELTER_COMPANION_DEMO_DIR_PATH', ANIMALSHELTER_COMPANION_INC_DIR_PATH . 'demo-data/' );
}

// Define dir url constant
if( ! defined( 'ANIMALSHELTER_COMPANION_DIR_URL' ) ) {
    define( 'ANIMALSHELTER_COMPANION_DIR_URL', ANIMALSHELTER_DIR_URI . 'inc/animalshelter-companion/' );
}


require_once ANIMALSHELTER_COMPANION_DIR_PATH . 'animalshelter-init.php';