<?php 
/**
 * @Packge     : taxi
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if( ! defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'taxi_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'taxi' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(
    /**
     * General Section
     */
    array(
        'id'   => 'taxi_general_options_section',
        'args' => array(
            'title'    => esc_html__( 'General', 'taxi' ),
            'panel'    => 'taxi_options_panel',
            'priority' => 1,
        ),
    ),
    /**
     * Header Section
     */
    array(
        'id'   => 'taxi_headertop_options_section',
        'args' => array(
            'title'    => esc_html__( 'Header Top', 'taxi' ),
            'panel'    => 'taxi_options_panel',
            'priority' => 2,
        ),
    ),
    /**
     * Blog Section
     */
    array(
        'id'   => 'taxi_blog_options_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'taxi' ),
            'panel'    => 'taxi_options_panel',
            'priority' => 3,
        ),
    ),

	/**
	 * Page Section
	 */
	array(
		'id'   => 'taxi_page_options_section',
		'args' => array(
			'title'    => esc_html__( 'page', 'taxi' ),
			'panel'    => 'taxi_options_panel',
			'priority' => 4,
		),
	),


	/**
     * 404 Page Section
     */
    array(
        'id'   => 'taxi_fof_options_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'taxi' ),
            'panel'    => 'taxi_options_panel',
            'priority' => 6,
        ),
    ),
    /**
     * Footer Section
     */
    array(
        'id'   => 'taxi_footer_options_section',
        'args' => array(
            'title'    => esc_html__( 'Footer', 'taxi' ),
            'panel'    => 'taxi_options_panel',
            'priority' => 7,
        ),
    ),

);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );
