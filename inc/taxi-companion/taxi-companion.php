<?php
/**
 * @Packge     : Taxi Companion
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

if( !defined( 'WPINC' ) ){
    die;
}

/*************************
    Define Constant
*************************/

// Define version constant
if( ! defined( 'TAXI_COMPANION_VERSION' ) ) {
    define( 'TAXI_COMPANION_VERSION', '1.0' );
}

// Define dir path constant
if( ! defined( 'TAXI_COMPANION_DIR_PATH' ) ) {
    define( 'TAXI_COMPANION_DIR_PATH', get_parent_theme_file_path(). '/inc/taxi-companion/' );
}

// Define inc dir path constant
if( ! defined( 'TAXI_COMPANION_INC_DIR_PATH' ) ) {
    define( 'TAXI_COMPANION_INC_DIR_PATH', TAXI_COMPANION_DIR_PATH . 'inc/' );
}

// Define sidebar widgets dir path constant
if( ! defined( 'TAXI_COMPANION_SW_DIR_PATH' ) ) {
    define( 'TAXI_COMPANION_SW_DIR_PATH', TAXI_COMPANION_INC_DIR_PATH . 'sidebar-widgets/' );
}

// Define elementor widgets dir path constant
if( ! defined( 'TAXI_COMPANION_EW_DIR_PATH' ) ) {
    define( 'TAXI_COMPANION_EW_DIR_PATH', TAXI_COMPANION_INC_DIR_PATH . 'elementor-widgets/' );
}

// Define demo data dir path constant
if( ! defined( 'TAXI_COMPANION_DEMO_DIR_PATH' ) ) {
    define( 'TAXI_COMPANION_DEMO_DIR_PATH', TAXI_COMPANION_INC_DIR_PATH . 'demo-data/' );
}

// Define plugin dir url constant
if( ! defined( 'TAXI_THEME_DIR_URL' ) ) {
    define( 'TAXI_THEME_DIR_URL', get_template_directory_uri() );
}

// Define inc dir url constant
if( ! defined( 'TAXI_COMPANION_DIR_URL' ) ) {
    define( 'TAXI_COMPANION_DIR_URL', TAXI_THEME_DIR_URL . '/inc/taxi-companion/' );
}

// Define inc dir url constant
if( ! defined( 'TAXI_COMPANION_INC_DIR_URL' ) ) {
    define( 'TAXI_COMPANION_INC_DIR_URL', TAXI_COMPANION_DIR_URL . '/inc/' );
}

// Define elementor-widgets dir url constant
if( ! defined( 'TAXI_COMPANION_EW_DIR_URL' ) ) {
    define( 'TAXI_COMPANION_EW_DIR_URL', TAXI_COMPANION_INC_DIR_URL . 'elementor-widgets/' );
}

// Define Demo Data dir url constant
if( ! defined( 'TAXI_COMPANION_DD_DIR_URL' ) ) {
    define( 'TAXI_COMPANION_DD_DIR_URL', TAXI_COMPANION_INC_DIR_URL . 'demo-data/' );
}

// Define Meta dir url constant
if( ! defined( 'TAXI_COMPANION_META_DIR_URL' ) ) {
    define( 'TAXI_COMPANION_META_DIR_URL', TAXI_COMPANION_INC_DIR_URL . 'taxi-meta/' );
}



$current_theme = wp_get_theme();

$is_parent = $current_theme->parent();

if( ( 'Taxi' ==  $current_theme->get( 'Name' ) ) || ( $is_parent && 'Taxi' == $is_parent->get( 'Name' ) ) ) {
    require_once TAXI_COMPANION_DIR_PATH . 'taxi-init.php';
} else {

    add_action( 'admin_notices', 'taxi_companion_admin_notice', 99 );
    function taxi_companion_admin_notice() {
        $url = 'https://wordpress.org/themes/taxi/';
    ?>
        <div class="notice-warning notice">
            <p><?php printf( __( 'In order to use the <strong>Taxi Companion</strong> plugin you have to also install the %1$sBakery Theme%2$s', 'taxi' ), '<a href="' . esc_url( $url ) . '" target="_blank">', '</a>' ); ?></p>
        </div>
        <?php
    }
}
