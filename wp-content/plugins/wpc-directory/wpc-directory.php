<?php

/*
Plugin Name: WPC Directory
Plugin URI: https://wpcodeus.com/
Description: An extension for Visual Composer that display an community directory option
Author: WP Codeus
Version: 1.0.0
Author URI: https://wpcodeus.com/
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
     die ('Silly human what are you doing here');
}


// Before VC Init

add_action( 'vc_before_init', 'wpc_vc_before_init_actions' );

function wpc_vc_before_init_actions() {

// Require new custom Element

include( plugin_dir_path( __FILE__ ) . 'vc-directory-element.php');

}

// Link directory stylesheet

function wpc_community_directory_scripts() {
    wp_enqueue_style( 'wpc_community_directory_stylesheet',  plugin_dir_url( __FILE__ ) . 'styling/directory-styling.css' );
}
add_action( 'wp_enqueue_scripts', 'wpc_community_directory_scripts' );