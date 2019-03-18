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
 * Before Wrapper
 *
 * @Preloader
 *
 */
add_action( 'taxi_preloader', 'taxi_site_preloader', 10 );

/**
 * Header
 *
 * @Header Menu
 * @Header Bottom
 * 
 */

add_action( 'taxi_header', 'taxi_header_cb', 10 );

/**
 * Hook for footer
 *
 */
add_action( 'taxi_footer', 'taxi_footer_area', 10 );
add_action( 'taxi_footer', 'taxi_back_to_top', 20 );

/**
 * Hook for Blog, single, page, search, archive pages wrapper.
 */
add_action( 'taxi_wrp_start', 'taxi_wrp_start_cb', 10 );
add_action( 'taxi_wrp_end', 'taxi_wrp_end_cb', 10 );

/**
 * Hook for Page wrapper.
 */
add_action( 'taxi_page_wrp_start', 'taxi_page_wrp_start_cb', 10 );
add_action( 'taxi_page_wrp_end', 'taxi_page_wrp_end_cb', 10 );

/**
 * Hook for Blog, single, search, archive pages column.
 */
add_action( 'taxi_blog_col_start', 'taxi_blog_col_start_cb', 10 );
add_action( 'taxi_blog_col_end', 'taxi_blog_col_end_cb', 10 );

/**
 * Hook for Page column.
 */
add_action( 'taxi_page_col_start', 'taxi_page_col_start_cb', 10 );
add_action( 'taxi_page_col_end', 'taxi_page_col_end_cb', 10 );

/**
 * Hook for blog posts thumbnail.
 */
add_action( 'taxi_blog_posts_thumb', 'taxi_blog_posts_thumb_cb', 10 );

/**
 * Hook for blog posts title.
 */
add_action( 'taxi_blog_posts_title', 'taxi_blog_posts_title_cb', 10 );

/**
 * Hook for blog posts meta.
 */
add_action( 'taxi_blog_posts_meta', 'taxi_blog_posts_meta_cb', 10 );

/**
 * Hook for blog posts bottom meta.
 */
add_action( 'taxi_blog_posts_bottom_meta', 'taxi_blog_posts_bottom_meta_cb', 10 );

/**
 * Hook for blog posts excerpt.
 */
add_action( 'taxi_blog_posts_excerpt', 'taxi_blog_posts_excerpt_cb', 10 );

/**
 * Hook for blog posts content.
 */
add_action( 'taxi_blog_posts_content', 'taxi_blog_posts_content_cb', 10 );

/**
 * Hook for blog sidebar.
 */
add_action( 'taxi_blog_sidebar', 'taxi_blog_sidebar_cb', 10 );

/**
 * Hook for page sidebar.
 */
add_action( 'taxi_page_sidebar', 'taxi_page_sidebar_cb', 10 );

/**
 * Hook for blog single post social share option.
 */
add_action( 'taxi_blog_posts_share', 'taxi_blog_posts_share_cb', 10 );

/**
 * Hook for blog single post meta category, tag, next - previous link and comments form.
 */
add_action( 'taxi_blog_single_meta', 'taxi_blog_single_meta_cb', 10 );

/**
 * Hook for blog single footer nav next - previous link and comments form.
 */
add_action( 'taxi_blog_single_footer_nav', 'taxi_blog_single_footer_nav_cb', 10 );

/**
 * Hook for page content.
 */
add_action( 'taxi_page_content', 'taxi_page_content_cb', 10 );


/**
 * Hook for 404 page.
 */
add_action( 'taxi_fof', 'taxi_fof_cb', 10 );
