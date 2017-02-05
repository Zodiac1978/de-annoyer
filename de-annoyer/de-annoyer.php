<?php
/**
 * Plugin Name: De-Annoyer
 * Description: Replace custom logo images with dashicons for some plugins
 * Plugin URI:  http://torstenlandsiedel.de
 * Version:     1.0
 * Author:      Torsten Landsiedel
 * Author URI:  http://torstenlandsiedel.de
 * Licence:     GPL 2
 * License URI: http://opensource.org/licenses/GPL-2.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function deannoyer_load_custom_wp_admin_style() {

  wp_enqueue_style( 'custom_wp_admin_css', plugins_url( 'admin-style.css', __FILE__ ), array(), '1.0.0' );

}
add_action( 'admin_enqueue_scripts', 'deannoyer_load_custom_wp_admin_style' );