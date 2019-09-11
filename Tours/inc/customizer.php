<?php
/**
 * WP Bootstrap Starter Theme Customizer
 *
 * @package WP_Bootstrap_Starter
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_wp_customize $wp_customize Theme Customizer object.
 */
function wp_bootstrap_starter_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    // Add Social Media Section
    $wp_customize->add_section(
        'social-media',
        array(
            'title' => __( 'Social Media', '_s' ),
            'priority' => 30,
            'description' => __( 'Enter the URL to your account for each service for the icon to appear in the header.', '_s' )
        )
    );

    // Add Facebook Setting
    $wp_customize->add_setting( 'facebook', array( 'default' => '' ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook', array( 'label' => __( 'Facebook', '_s' ), 'section' => 'social-media', 'settings' => 'facebook', ) ) );
    // Add Twitter Setting
    $wp_customize->add_setting( 'twitter', array( 'default' => '' ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter', array( 'label' => __( 'Twitter', '_s' ), 'section' => 'social-media', 'settings' => 'twitter', ) ) );
    // Add Twitter Setting
    $wp_customize->add_setting( 'linkedin', array( 'default' => '' ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'linkedin', array( 'label' => __( 'Linkedin', '_s' ), 'section' => 'social-media', 'settings' => 'linkedin', ) ) );
    // Add Twitter Setting
    $wp_customize->add_setting( 'instagram', array( 'default' => '' ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'instagram', array( 'label' => __( 'Instagram', '_s' ), 'section' => 'social-media', 'settings' => 'instagram', ) ) );
    // Add Twitter Setting
    $wp_customize->add_setting( 'youtube', array( 'default' => '' ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'youtube', array( 'label' => __( 'Youtube', '_s' ), 'section' => 'social-media', 'settings' => 'youtube', ) ) );
    

    // Add Copyright Section
    $wp_customize->add_section(
        'copyright',
        array(
            'title' => __( 'Copyright', '_s' ),
            'priority' => 30,
            'description' => __( 'Enter the copyright text', '_s' )
        )
    );
    // Add Copyright Setting
    $wp_customize->add_setting( 'copyright', array( 'default' => '' ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'copyright', array( 'label' => __( 'Copyrights', '_s' ), 'section' => 'copyright', 'settings' => 'copyright', ) ) );

}
add_action( 'customize_register', 'wp_bootstrap_starter_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wp_bootstrap_starter_customize_preview_js() {
	wp_enqueue_script( 'wp_bootstrap_starter_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'wp_bootstrap_starter_customize_preview_js' );



function m1_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'm1_logo' ); // Add setting for logo uploader

    // Add control for logo uploader (actual uploader)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'm1_logo', array(
        'label'    => __( 'Upload Logo (replaces text)', 'm1' ),
        'section'  => 'title_tagline',
        'settings' => 'm1_logo',
    ) ) );
}
add_action( 'customize_register', 'm1_customize_register' );


