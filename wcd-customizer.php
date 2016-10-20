<?php

function wcd_generatepress_kirki_fields( $wp_customize ) {

    Kirki::add_field( 'wcd_body_height', array(
        'settings' => 'wcd_body_height',
        'label'    => __( 'Body Line Height', 'translation_domain' ),
        'section'  => 'font_section',
        'type'     => 'dimension',
        'priority' => 10,
        'default'  => '1.4em',
    ) );

    Kirki::add_field( 'wcd_h1_height', array(
        'settings' => 'wcd_h1_height',
        'label'    => __( 'H1 Line Height', 'translation_domain' ),
        'section'  => 'font_content_section',
        'type'     => 'dimension',
        'priority' => 10,
        'default'  => '1.4em',
    ) );

    Kirki::add_field( 'wcd_h2_height', array(
        'settings' => 'wcd_h2_height',
        'label'    => __( 'H2 Line Height', 'translation_domain' ),
        'section'  => 'font_content_section',
        'type'     => 'dimension',
        'priority' => 300,
        'default'  => '1.4em',
    ) );

    Kirki::add_field( 'wcd_h3_height', array(
        'settings' => 'wcd_h3_height',
        'label'    => __( 'H3 Line Height', 'translation_domain' ),
        'section'  => 'font_content_section',
        'type'     => 'dimension',
        'priority' => 350,
        'default'  => '1.4em',
    ) );
   

}
add_filter( 'kirki/fields', 'wcd_generatepress_kirki_fields' );