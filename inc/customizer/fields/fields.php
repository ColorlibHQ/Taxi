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
 * General Section Fields
 ***********************************/


// Theme Main Color Picker
Epsilon_Customizer::add_field(
    'taxi_themecolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Theme Main Color.', 'taxi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'taxi_general_options_section',
        'default'     => '#f9d700',
    )
);

// Google map api key field
$url = 'https://developers.google.com/maps/documentation/geocoding/get-api-key';

Epsilon_Customizer::add_field(
    'taxi_map_apikey',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Google map api key', 'taxi' ),
        'description'       => sprintf( __( 'Set google map api key. To get api key %s click here %s.', 'taxi' ), '<a target="_blank" href="'.esc_url( $url  ).'">', '</a>' ),
        'section'           => 'taxi_general_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => '',
        
    )
);

/***********************************
 * Header Section Fields
 ***********************************/

// Header top Phone number
Epsilon_Customizer::add_field(
	'taxi_header_top_pattern_bg',
	array(
		'type'        => 'epsilon-image',
        'label'       => esc_html__( 'Header Top Pattern', 'taxi' ),
        'description' => esc_html__( 'Upload header top pattern image, Suggestion image size width 1920px height 30px', 'taxi' ),
		'section'     => 'taxi_headertop_options_section',
		'sanitize_callback' => 'sanitize_text_field',
		'default'     => '',
	)
);


// Header Nav Bar Background Color Picker
Epsilon_Customizer::add_field(
    'taxi_header_navbar_bgColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Nav-bar Background Color', 'taxi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'taxi_headertop_options_section',
        'default'     => '#000',
    )
);
// Header Sticky  Nav Bar Background Color Picker
Epsilon_Customizer::add_field(
    'taxi_header_navbarsticky_bgColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Sticky Nav Bar Background Color', 'taxi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'taxi_headertop_options_section',
        'default'     => '#000',
    )
);
// Header Nav Bar Menu Color Picker
Epsilon_Customizer::add_field(
    'taxi_header_navbar_menuColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Nav Bar Menu Color', 'taxi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'taxi_headertop_options_section',
        'default'     => '#fff',
    )
);
// Header Nav Bar Menu Hover Color Picker
Epsilon_Customizer::add_field(
    'taxi_header_navbar_menuHovColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Nav Bar Menu Hover Color', 'taxi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'taxi_headertop_options_section',
        'default'     => '',
    )
);
// Header sticky nav bar menu color picker
Epsilon_Customizer::add_field(
    'taxi_header_sticky_navbar_menuColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header Nav Bar Menu Color', 'taxi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'taxi_headertop_options_section',
        'default'     => '#fff',
    )
);
// Header sticky nav bar menu hover color picker
Epsilon_Customizer::add_field(
    'taxi_header_sticky_navbar_menuHovColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header Nav Bar Menu Hover Color', 'taxi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'taxi_headertop_options_section',
        'default'     => '',
    )
);
// Page Header Background Color Picker
Epsilon_Customizer::add_field(
    'taxi_headerbgcolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Background Color', 'taxi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'colors',
        'default'     => 'rgba(4,9,30,0.85)',
    )
);
// Page Header text Color Picker
Epsilon_Customizer::add_field(
    'taxi_headertextcolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Text Color', 'taxi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'colors',
        'default'     => '#fff',
    )
);
// Header overlay switch field
Epsilon_Customizer::add_field(
    'taxi-headeroverlay-toggle-settings',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Toggle header overlay', 'taxi' ),
        'section'     => 'colors',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
// Header overlay color
Epsilon_Customizer::add_field(
    'taxi_headeroverlaycolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Overlay Color', 'taxi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'colors',
        'default'     => 'rgba(0, 0, 0, 0.8)',
    )
);

/***********************************
 * Blog Section Fields
 ***********************************/
// Featured Post
Epsilon_Customizer::add_field(
	'taxi-featured-post-toggle',
	array(
		'type'        => 'epsilon-toggle',
		'label'       => esc_html__( 'Featured post Show/Hide', 'taxi' ),
		'section'     => 'taxi_blog_options_section',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
Epsilon_Customizer::add_field(
	'taxi_featured_post',
	array(
		'type'        => 'text',
		'label'       => esc_html__( 'Featured Post ID', 'taxi' ),
		'section'     => 'taxi_blog_options_section',
		'sanitize_callback' => 'sanitize_text_field',
		'default'     => '',
	)
);

// Category show
Epsilon_Customizer::add_field(
	'taxi-category-show',
	array(
		'type'        => 'epsilon-toggle',
		'label'       => esc_html__( 'Featured Category Show/Hide', 'taxi' ),
		'section'     => 'taxi_blog_options_section',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
// Category Number
Epsilon_Customizer::add_field(
	'taxi_cat_number',
	array(
		'type'        => 'epsilon-slider',
		'label'       => esc_html__( 'Featured Category Number', 'taxi' ),
		'description' => esc_html__( 'Set how many featured categories you want to show in blog page top.', 'taxi' ),
		'section'     => 'taxi_blog_options_section',
		'sanitize_callback' => 'sanitize_text_field',
		'default'     => '3',
	)
);

// Post excerpt length field
Epsilon_Customizer::add_field(
    'taxi_post_excerpt',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Post Excerpt', 'taxi' ),
        'description' => esc_html__( 'Set post excerpt length.', 'taxi' ),
        'section'     => 'taxi_blog_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);
// Blog sidebar layout field
Epsilon_Customizer::add_field(
    'taxi-blog-sidebar-settings',
    array(
        'type'     => 'epsilon-layouts',
        'label'    => esc_html__( 'Blog Layout', 'taxi' ),
        'section'  => 'taxi_blog_options_section',
        'description' => esc_html__( 'Select the option to set blog page sidebar position.', 'taxi' ),
        'layouts'  => array(
            '1' => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/one-column.png',
            '2' => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/epsilon-section-titleright.jpg',
            '3' => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/epsilon-section-titleleft.jpg',
        ),
        'default'  => array(
            'columnsCount' => 2,
            'columns'      => array(
                1 => array(
                    'index' => 1,
                ),
                2 => array(
                    'index' => 2,
                ),
                3 => array(
                    'index' => 3,
                ),
            ),
        ),
        'min_span' => 4,
        'fixed'    => true
    )
);
if( defined( 'TAXI_COMPANION_VERSION' ) ) {
// Header social switch field
Epsilon_Customizer::add_field(
    'taxi-blog-social-share-toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Social Share Show/Hide', 'taxi' ),
        'section'     => 'taxi_blog_options_section',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

// Header social switch field
Epsilon_Customizer::add_field(
    'taxi-blog-like-toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Like Button Show/Hide', 'taxi' ),
        'section'     => 'taxi_blog_options_section',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
}



/***********************************
 * Page Section Fields
 ***********************************/

// Blog sidebar layout field
Epsilon_Customizer::add_field(
	'taxi-page-sidebar-settings',
	array(
		'type'     => 'epsilon-layouts',
		'label'    => esc_html__( 'page Layout', 'taxi' ),
		'section'  => 'taxi_page_options_section',
		'description' => esc_html__( 'Select the option to set page sidebar position.', 'taxi' ),
		'layouts'  => array(
			'1' => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/one-column.png',
			'2' => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/epsilon-section-titleright.jpg',
			'3' => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/epsilon-section-titleleft.jpg',
		),
		'default'  => array(
			'columnsCount' => 1,
			'columns'      => array(
				1 => array(
					'index' => 1,
				),
				2 => array(
					'index' => 2,
				),
				3 => array(
					'index' => 3,
				)
			),
		),
		'min_span' => 4,
		'fixed'    => true
	)
);



/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Epsilon_Customizer::add_field(
    'taxi_fof_text_one',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'taxi' ),
        'section'           => 'taxi_fof_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Ooops 404 Error !'
    )
);
// 404 text #2 field
Epsilon_Customizer::add_field(
    'taxi_fof_text_two',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'taxi' ),
        'section'           => 'taxi_fof_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Either something went wrong or the page dosen\'t exist anymore.'
    )
);
// 404 text #1 color field
Epsilon_Customizer::add_field(
    'taxi_fof_textonecolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'taxi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'taxi_fof_options_section',
        'default'     => '#404551', 
    )
);
// 404 text #2 color field
Epsilon_Customizer::add_field(
    'taxi_fof_texttwocolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'taxi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'taxi_fof_options_section',
        'default'     => '#abadbe',
    )
);
// 404 background color field
Epsilon_Customizer::add_field(
    'taxi_fof_bgcolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Page Background Color', 'taxi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'taxi_fof_options_section',
        'default'     => '#fff',
    )
);

/***********************************
 * Footer Section Fields
 ***********************************/

// Footer widget toggle field
Epsilon_Customizer::add_field(
    'taxi-widget-toggle-settings',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'taxi' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'taxi' ),
        'section'     => 'taxi_footer_options_section',
        'default'     => false,
    )
);

// Footer copy right text add settings

// Copy right text
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'taxi' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );

Epsilon_Customizer::add_field(
    'taxi-copyright-text-settings',
    array(
        'type'        => 'epsilon-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'taxi' ),
        'section'     => 'taxi_footer_options_section',
        'default'     => wp_kses_post( $copyText ),
    )
);
// Footer widget background color field
Epsilon_Customizer::add_field(
    'taxi_footer_bgimg_settings',
    array(
        'type'        => 'epsilon-image',
        'label'       => esc_html__( 'Footer Widget Background Image', 'taxi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'taxi_footer_options_section',
    )
);

// Footer Bottom Pattren Image
Epsilon_Customizer::add_field(
    'taxi_footer_bottom_pattern',
    array(
        'type'        => 'epsilon-image',
        'label'       => esc_html__( 'Footer Bottom Pattern Image', 'taxi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'taxi_footer_options_section',
    )
);
// Footer widget background color field
Epsilon_Customizer::add_field(
    'taxi_footer_widget_bgColor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widget Background Color', 'taxi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'taxi_footer_options_section',
        'default'     => '#04091e',
    )
);
// Footer widget text color field
Epsilon_Customizer::add_field(
    'taxi_footer_widget_color_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widget Text Color', 'taxi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'taxi_footer_options_section',
        'default'     => '#fff',
    )
);
// Footer widget title color field
Epsilon_Customizer::add_field(
    'taxi_footer_widgettitlecolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widgets Title Color', 'taxi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'taxi_footer_options_section',
        'default'     => '#fff',
    )
);
// Footer widget anchor color field
Epsilon_Customizer::add_field(
    'taxi_footer_widget_anchorcolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widget Anchor Color', 'taxi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'taxi_footer_options_section',
        'default'     => '#777',
    )
);
// Footer widget anchor hover Color
Epsilon_Customizer::add_field(
    'taxi_footer_widget_anchorhovcolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widget Anchor Hover Color', 'taxi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'taxi_footer_options_section',
        'default'     => '#f9d700',
    )
);


// Footer bottom text Color
Epsilon_Customizer::add_field(
    'taxi_footer_bottom_textcolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Bottom Text Color', 'taxi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'taxi_footer_options_section',
        'default'     => '#fff',
    )
);
// Footer bottom text Color
Epsilon_Customizer::add_field(
    'taxi_footer_bottom_anchorcolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Bottom Anchor Color', 'taxi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'taxi_footer_options_section',
        'default'     => '#f9d700',
    )
);
// Footer bottom text Color
Epsilon_Customizer::add_field(
    'taxi_footer_bottom_anchorhovercolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Bottom Anchor Hover Color', 'taxi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'taxi_footer_options_section',
        'default'     => '#f9d700',
    )
);
