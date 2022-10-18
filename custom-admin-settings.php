<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the
 * plugin admin area. This file also defines a function that starts the plugin.
 *
 * @link              http://...
 * @since             1.0.0
 * @package           Custom_Admin_USD_Settings
 *
 * @wordpress-plugin
 * Plugin Name:       Custom Admin USD Settings
 * Plugin URI:        http://...
 * Description:       Plugin to define USD value for exchange in estates properties.
 * Version:           1.0.0
 * Author:            ...
 * Author URI:        https://...
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

// Include the shared dependency.
include_once( plugin_dir_path( __FILE__ ) . 'shared/class-deserializer.php' );

// Include the dependencies needed to instantiate the plugin.
foreach ( glob( plugin_dir_path( __FILE__ ) . 'admin/*.php' ) as $file ) {
  include_once $file;
}

add_action( 'plugins_loaded', 'tc_Custom_Admin_USD_Settings' );
/**
 * Starts the plugin.
 *
 * @since 1.0.0
 */
function tc_Custom_Admin_USD_Settings() {

  $serializer = new Serializer();
  $serializer->init();

  $deserializer = new Deserializer();

  $plugin = new Submenu( new Submenu_Page( $deserializer ) );
  $plugin->init();
}