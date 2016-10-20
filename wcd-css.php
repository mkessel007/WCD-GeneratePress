<?php

function wcd_generatepress_styles_method() {
	wp_enqueue_style(
		'wcd-generatepress-style',
		plugin_dir_url( __FILE__ ) . '/style.css'
	);
        $bodyHeight = get_theme_mod( 'wcd_body_height' );
        $h1Height = get_theme_mod( 'wcd_h1_height' );
        $h2Height = get_theme_mod( 'wcd_h2_height' );
        $h3Height = get_theme_mod( 'wcd_h3_height' );
        $custom_css = "
                body{
                        line-height: {$bodyHeight} !important;
                }
                h1{
                        line-height: {$h1Height} !important;
                }
                h2{
                        line-height: {$h2Height} !important;
                }
                h3{
                        line-height: {$h3Height} !important;
                }";
        wp_add_inline_style( 'wcd-generatepress-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'wcd_generatepress_styles_method' );