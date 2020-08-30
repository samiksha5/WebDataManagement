<?php
/**
 * eyepress Theme Customizer
 *
 * @package eyepress
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
//Sanitize sidebar options
if ( ! function_exists( 'blog_bank_classic_sanitize_header_position' ) ) :
function blog_bank_classic_sanitize_header_position($value){ 
    if(!in_array($value, array('center','left'))){
        $value = 'center';
    }
    return $value;
}
endif;


function blog_bank_classic_customize_register( $wp_customize ) {

     $wp_customize->add_setting('bbank_blog_header', array(
        'default'        => 'center',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'blog_bank_classic_sanitize_header_position',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('bbank_blog_header_control', array(
        'label'      => esc_html__('Header position', 'blog-bank-classic'),
        'description'     => esc_html__('Set blog header position.', 'blog-bank-classic'),
        'section'    => 'bbank_general_settings',
        'settings'   => 'bbank_blog_header',
        'type'       => 'select',
        'choices'    => array(
            'center' => esc_html__('Header Center', 'blog-bank-classic'),
            'left' => esc_html__('Header Left', 'blog-bank-classic'),
        ),
    ));


}
add_action( 'customize_register', 'blog_bank_classic_customize_register',99 );

