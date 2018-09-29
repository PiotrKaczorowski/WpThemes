<?php
function zadanie_customize_register_logo( $wp_customize ) {
    $wp_customize->add_section('zadanie_logo_section', array(
        'title'    => __('Add logo', 'zadanie'),
        'description' => '',
        'priority' => 120,
    ));    
    $wp_customize->add_setting( 'zadanie_logo'); 
         
    // Add control for logo uploader (actual uploader)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'zadanie_logo', array(
        'label'    => __( 'Upload Logo', 'zadanie' ),
        'section'  => 'zadanie_logo_section',
        'settings' => 'zadanie_logo',
    ) ) );
    
}

function zadanie_customize_register_baner( $wp_customize ) {
    $wp_customize->add_section('zadanie_baner_section', array(
        'title'    => __('Add baner', 'zadanie'),
        'description' => '',
        'priority' => 120,
    ));    
    $wp_customize->add_setting( 'zadanie_baner'); 
         
    // Add control for logo uploader (actual uploader)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'zadanie_baner', array(
        'label'    => __( 'Upload baner', 'zadanie' ),
        'section'  => 'zadanie_baner_section',
        'settings' => 'zadanie_baner',
    ) ) );
}
add_action( 'customize_register', 'zadanie_customize_register_logo' );
add_action( 'customize_register', 'zadanie_customize_register_baner' );