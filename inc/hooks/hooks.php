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
 * Before Wrapper
 *
 * @Preloader
 *
 */
add_action( 'animalshelter_preloader', 'animalshelter_site_preloader', 10 );

/**
 * Header
 *
 * @Header Menu
 * @Header Bottom
 * 
 */

add_action( 'animalshelter_header', 'animalshelter_header_cb', 10 );

/**
 * Hook for footer
 *
 */
add_action( 'animalshelter_footer', 'animalshelter_footer_area', 10 );
add_action( 'animalshelter_footer', 'animalshelter_back_to_top', 20 );

/**
 * Hook for Blog, single, page, search, archive pages wrapper.
 */
add_action( 'animalshelter_wrp_start', 'animalshelter_wrp_start_cb', 10 );
add_action( 'animalshelter_wrp_end', 'animalshelter_wrp_end_cb', 10 );

/**
 * Hook for Blog, single, search, archive pages column.
 */
add_action( 'animalshelter_blog_col_start', 'animalshelter_blog_col_start_cb', 10 );
add_action( 'animalshelter_blog_col_end', 'animalshelter_blog_col_end_cb', 10 );

/**
 * Hook for blog posts thumbnail.
 */
add_action( 'animalshelter_blog_posts_thumb', 'animalshelter_blog_posts_thumb_cb', 10 );

/**
 * Hook for blog posts title.
 */
add_action( 'animalshelter_blog_posts_title', 'animalshelter_blog_posts_title_cb', 10 );

/**
 * Hook for blog posts meta.
 */
add_action( 'animalshelter_blog_posts_meta', 'animalshelter_blog_posts_meta_cb', 10 );

/**
 * Hook for blog posts bottom meta.
 */
add_action( 'animalshelter_blog_posts_bottom_meta', 'animalshelter_blog_posts_bottom_meta_cb', 10 );

/**
 * Hook for blog posts excerpt.
 */
add_action( 'animalshelter_blog_posts_excerpt', 'animalshelter_blog_posts_excerpt_cb', 10 );

/**
 * Hook for blog posts content.
 */
add_action( 'animalshelter_blog_posts_content', 'animalshelter_blog_posts_content_cb', 10 );

/**
 * Hook for blog sidebar.
 */
add_action( 'animalshelter_blog_sidebar', 'animalshelter_blog_sidebar_cb', 10 );

/**
 * Hook for blog single post social share option.
 */
add_action( 'animalshelter_blog_posts_share', 'animalshelter_blog_posts_share_cb', 10 );

/**
 * Hook for blog single post meta category, tag, next - previous link and comments form.
 */
add_action( 'animalshelter_blog_single_meta', 'animalshelter_blog_single_meta_cb', 10 );

/**
 * Hook for blog single footer nav next - previous link and comments form.
 */
add_action( 'animalshelter_blog_single_footer_nav', 'animalshelter_blog_single_footer_nav_cb', 10 );

/**
 * Hook for page content.
 */
add_action( 'animalshelter_page_content', 'animalshelter_page_content_cb', 10 );


/**
 * Hook for 404 page.
 */
add_action( 'animalshelter_fof', 'animalshelter_fof_cb', 10 );
