<?php 
/**
 * @Packge     : Animalshelter
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
    'animalshelter_themecolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Theme Main Color.', 'animalshelter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'animalshelter_general_options_section',
        'default'     => '#fab700',
    )
);
// Google map api key field
$url = 'https://developers.google.com/maps/documentation/geocoding/get-api-key';

Epsilon_Customizer::add_field(
    'animalshelter_map_apikey',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Google map api key', 'animalshelter' ),
        'description'       => sprintf( __( 'Set google map api key. To get api key %s click here %s.', 'animalshelter' ), '<a target="_blank" href="'.esc_url( $url  ).'">', '</a>' ),
        'section'           => 'animalshelter_general_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => '',
        
    )
);

/***********************************
 * Header Section Fields
 ***********************************/

// Header Nav Bar Background Color Picker
Epsilon_Customizer::add_field(
    'animalshelter_header_navbar_bgColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Nav Bar Background Color', 'animalshelter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'animalshelter_headertop_options_section',
        'default'     => '',
    )
);
// Header Sticky  Nav Bar Background Color Picker
Epsilon_Customizer::add_field(
    'animalshelter_header_navbarsticky_bgColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Sticky Nav Bar Background Color', 'animalshelter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'animalshelter_headertop_options_section',
        'default'     => 'rgba(0, 0, 0, 0.7)',
    )
);
// Header Nav Bar Menu Color Picker
Epsilon_Customizer::add_field(
    'animalshelter_header_navbar_menuColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Nav Bar Menu Color', 'animalshelter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'animalshelter_headertop_options_section',
        'default'     => '#fff',
    )
);
// Header Nav Bar Menu Hover Color Picker
Epsilon_Customizer::add_field(
    'animalshelter_header_navbar_menuHovColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Nav Bar Menu Hover Color', 'animalshelter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'animalshelter_headertop_options_section',
        'default'     => '#fff',
    )
);
// Header sticky nav bar menu color picker
Epsilon_Customizer::add_field(
    'animalshelter_header_sticky_navbar_menuColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header Nav Bar Menu Color', 'animalshelter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'animalshelter_headertop_options_section',
        'default'     => '#fff',
    )
);
// Header sticky nav bar menu hover color picker
Epsilon_Customizer::add_field(
    'animalshelter_header_sticky_navbar_menuHovColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header Nav Bar Menu Hover Color', 'animalshelter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'animalshelter_headertop_options_section',
        'default'     => '#fff',
    )
);
// Page Header Background Color Picker
Epsilon_Customizer::add_field(
    'animalshelter_headerbgcolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Background Color', 'animalshelter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'colors',
        'default'     => '#fab700',
    )
);
// Page Header text Color Picker
Epsilon_Customizer::add_field(
    'animalshelter_headertextcolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Text Color', 'animalshelter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'colors',
        'default'     => '#fff',
    )
);
// Header overlay switch field
Epsilon_Customizer::add_field(
    'animalshelter-headeroverlay-toggle-settings',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Toggle header overlay', 'animalshelter' ),
        'section'     => 'colors',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
// Header overlay color
Epsilon_Customizer::add_field(
    'animalshelter_headeroverlaycolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Overlay Color', 'animalshelter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'colors',
        'default'     => 'rgba(0, 0, 0, 0.7)',
    )
);

/***********************************
 * Blog Section Fields
 ***********************************/


// Post excerpt length field
Epsilon_Customizer::add_field(
    'animalshelter_post_excerpt',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Post Excerpt', 'animalshelter' ),
        'description' => esc_html__( 'Set post excerpt length.', 'animalshelter' ),
        'section'     => 'animalshelter_blog_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);
// Blog sidebar layout field
Epsilon_Customizer::add_field(
    'animalshelter-blog-sidebar-settings',
    array(
        'type'     => 'epsilon-layouts',
        'label'    => esc_html__( 'Blog Layout', 'animalshelter' ),
        'section'  => 'animalshelter_blog_options_section',
        'description' => esc_html__( 'Select the option to set blog page sidebar position.', 'animalshelter' ),
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
                ),
            ),
        ),
        'min_span' => 4,
        'fixed'    => true
    )
);
if( defined( 'ANIMALSHELTER_COMPANION_VERSION' ) ) {
// Header social switch field
Epsilon_Customizer::add_field(
    'animalshelter-blog-social-share-toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Social Share Show/Hide', 'animalshelter' ),
        'section'     => 'animalshelter_blog_options_section',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

// Header social switch field
Epsilon_Customizer::add_field(
    'animalshelter-blog-like-toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Like Button Show/Hide', 'animalshelter' ),
        'section'     => 'animalshelter_blog_options_section',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
}
/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Epsilon_Customizer::add_field(
    'animalshelter_fof_text_one',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'animalshelter' ),
        'section'           => 'animalshelter_fof_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Ooops 404 Error !'
    )
);
// 404 text #2 field
Epsilon_Customizer::add_field(
    'animalshelter_fof_text_two',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'animalshelter' ),
        'section'           => 'animalshelter_fof_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Either something went wrong or the page dosen\'t exist anymore.'
    )
);
// 404 text #1 color field
Epsilon_Customizer::add_field(
    'animalshelter_fof_textonecolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'animalshelter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'animalshelter_fof_options_section',
        'default'     => '#404551', 
    )
);
// 404 text #2 color field
Epsilon_Customizer::add_field(
    'animalshelter_fof_texttwocolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'animalshelter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'animalshelter_fof_options_section',
        'default'     => '#abadbe',
    )
);
// 404 background color field
Epsilon_Customizer::add_field(
    'animalshelter_fof_bgcolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Page Background Color', 'animalshelter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'animalshelter_fof_options_section',
        'default'     => '#fff',
    )
);

/***********************************
 * Footer Section Fields
 ***********************************/

// Footer widget toggle field
Epsilon_Customizer::add_field(
    'animalshelter-widget-toggle-settings',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'animalshelter' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'animalshelter' ),
        'section'     => 'animalshelter_footer_options_section',
        'default'     => false,
    )
);

// Footer copy right text add settings

// Copy right text
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s. Copyright &copy; %s  |  All rights reserved', 'animalshelter' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );

Epsilon_Customizer::add_field(
    'animalshelter-copyright-text-settings',
    array(
        'type'        => 'epsilon-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'animalshelter' ),
        'section'     => 'animalshelter_footer_options_section',
        'default'     => wp_kses_post( $copyText ),
    )
);
// Footer widget background color field
Epsilon_Customizer::add_field(
    'animalshelter_footer_bgimg_settings',
    array(
        'type'        => 'epsilon-image',
        'label'       => esc_html__( 'Footer Widget Background Image', 'animalshelter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'animalshelter_footer_options_section',
    )
);
// Footer widget background color field
Epsilon_Customizer::add_field(
    'animalshelter_footer_widget_bgColor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widget Background Color', 'animalshelter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'animalshelter_footer_options_section',
        'default'     => '#04091e',
    )
);
// Footer widget text color field
Epsilon_Customizer::add_field(
    'animalshelter_footer_widget_color_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widget Text Color', 'animalshelter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'animalshelter_footer_options_section',
        'default'     => '#777777',
    )
);
// Footer widget title color field
Epsilon_Customizer::add_field(
    'animalshelter_footer_widgettitlecolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widgets Title Color', 'animalshelter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'animalshelter_footer_options_section',
        'default'     => '#fff',
    )
);
// Footer widget anchor color field
Epsilon_Customizer::add_field(
    'animalshelter_footer_widget_anchorcolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widget Anchor Color', 'animalshelter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'animalshelter_footer_options_section',
        'default'     => '#777',
    )
);
// Footer widget anchor hover Color
Epsilon_Customizer::add_field(
    'animalshelter_footer_widget_anchorhovcolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widget Anchor Hover Color', 'animalshelter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'animalshelter_footer_options_section',
        'default'     => '#fab700',
    )
);

// Footer bottom bg Color
Epsilon_Customizer::add_field(
    'animalshelter_footer_bottom_bgcolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Bottom Background Color', 'animalshelter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'animalshelter_footer_options_section',
        'default'     => '#23202e',
    )
);
// Footer bottom text Color
Epsilon_Customizer::add_field(
    'animalshelter_footer_bottom_textcolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Bottom Text Color', 'animalshelter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'animalshelter_footer_options_section',
        'default'     => '#fff',
    )
);
// Footer bottom text Color
Epsilon_Customizer::add_field(
    'animalshelter_footer_bottom_anchorcolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Bottom Anchor Color', 'animalshelter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'animalshelter_footer_options_section',
        'default'     => '#777777',
    )
);
// Footer bottom text Color
Epsilon_Customizer::add_field(
    'animalshelter_footer_bottom_anchorhovercolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Bottom Anchor Hover Color', 'animalshelter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'animalshelter_footer_options_section',
        'default'     => '#fab700',
    )
);
