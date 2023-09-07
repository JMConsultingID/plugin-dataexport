<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://amantrabali.com
 * @since      1.0.0
 *
 * @package    Plugin_Dataexport
 * @subpackage Plugin_Dataexport/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Plugin_Dataexport
 * @subpackage Plugin_Dataexport/includes
 * @author     Ardika <ardi@jm-consulting.id>
 */
class Plugin_Dataexport_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'plugin-dataexport',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
