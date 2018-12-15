<?php
/**
 * @package Rentit_Bootstrap_4_Select_Updater
 * @version 1.0
 */
/*
Plugin Name: Rentit Bootstrap 4 Select Updater (bug)
Plugin URI: https://wordpress.org/plugins/hello-dolly/
Description: this make renit theme js and css file up to date
Version: 1.0
Author URI: https://ma.tt/
Text Domain: Rentit_Bootstrap_4_Select_Updater
*/
//SOURCE:https://github.com/snapappointments/bootstrap-select

/* add forntend */
add_action( 'wp_enqueue_scripts', 'Rentit_Bootstrap_4_Select_Updater_dequeue_scripts', 400 );
add_action( 'wp_enqueue_scripts', 'Rentit_Bootstrap_4_Select_Updater_enqueue_scripts', 400 );
/* add backend */
add_action( 'admin_enqueue_scripts', 'Rentit_Bootstrap_4_Select_Updater_dequeue_scripts', 400 );
add_action( 'admin_enqueue_scripts', 'Rentit_Bootstrap_4_Select_Updater_enqueue_scripts', 400 );
/******************************************/
//Updating scripts
/******************************************/
function Rentit_Bootstrap_4_Select_Updater_dequeue_scripts() {
	wp_deregister_script( 'renita_bootstrap-select.min' );
}
function Rentit_Bootstrap_4_Select_Updater_enqueue_scripts() {
	wp_enqueue_script( 'renita_bootstrap-select.min', plugins_url("bootstrap-select/dist/js/bootstrap-select.min.js",__FILE__ ), array( 'renita_bootstrap_min_js' ), '1.13.5', true );
}
/*************************************
*************************************/
/* add backend */
add_action( 'admin_enqueue_scripts', 'Rentit_Bootstrap_4_Select_Updater_dequeue_styles', 400 );
add_action( 'admin_enqueue_scripts', 'Rentit_Bootstrap_4_Select_Updater_enqueue_styles', 400 );
/* add forntend */
add_action( 'wp_enqueue_scripts', 'Rentit_Bootstrap_4_Select_Updater_dequeue_styles', 400 );
add_action( 'wp_enqueue_scripts', 'Rentit_Bootstrap_4_Select_Updater_enqueue_styles', 400 );
/******************************************/
//Updating styles
/******************************************/
function Rentit_Bootstrap_4_Select_Updater_dequeue_styles() {}
function Rentit_Bootstrap_4_Select_Updater_enqueue_styles() {}


