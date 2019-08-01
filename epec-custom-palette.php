<?php
/*
Plugin Name: epec-custom-palette
Plugin URI: http://zero-plugin.com
Description: Un plugin d'introduction pour le développement sous WordPress
Version: 0.1
Author: Sami
Author URI: http://votre-site.com
License: GPL2
*/

function myfunction_by_myself() {
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'Brand Color 1', 'epec-custom-palette' ),
            'slug' => 'brand_color_1',
            'color' => '#6128A1',
        ),
        array(
            'name' => __( 'Brand Color 2', 'epec-custom-palette' ),
            'slug' => 'brand_color_2',
            'color' => '#E94B59',
        ),
        array(
            'name' => __( 'Very Dark Gray', 'epec-custom-palette' ),
            'slug' => 'very_dark_gray',
            'color' => '#111111',
        ),
        array(
            'name' => __( 'White', 'epec-custom-palette' ),
            'slug' => 'white',
            'color' => '#FFFFFF',
        ),
    ) );
}
 
add_action( 'after_setup_theme', 'myfunction_by_myself' );

function my_scripts() {
    wp_register_style( 'prefix-style', plugins_url('style.css', __FILE__) );
    wp_enqueue_style( 'prefix-style' );
    }
    add_action('wp_enqueue_scripts','my_scripts');