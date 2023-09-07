<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://amantrabali.com
 * @since             1.0.0
 * @package           Plugin_Dataexport
 *
 * @wordpress-plugin
 * Plugin Name:       Plugin Data Export
 * Plugin URI:        https://amantrabali.com
 * Description:       This plugin for export the information Plugin on your website
 * Version:           1.0.0
 * Author:            Ardika
 * Author URI:        https://amantrabali.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       plugin-dataexport
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_DATAEXPORT_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-dataexport-activator.php
 */
function activate_plugin_dataexport() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-dataexport-activator.php';
	Plugin_Dataexport_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-dataexport-deactivator.php
 */
function deactivate_plugin_dataexport() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-dataexport-deactivator.php';
	Plugin_Dataexport_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_plugin_dataexport' );
register_deactivation_hook( __FILE__, 'deactivate_plugin_dataexport' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-plugin-dataexport.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_plugin_dataexport() {

	$plugin = new Plugin_Dataexport();
	$plugin->run();

}
run_plugin_dataexport();
