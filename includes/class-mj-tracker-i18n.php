<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    MJ_Settings
 * @subpackage MJ_Settings/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.1.2
 * @package    MediaJel Tracker
 * @subpackage mediajel-tracker/includes
 * @author     JP Baroma <jonathanbaroma@mediajel.com>
 */
class MJ_Tracker_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.1.2
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'mj-tracker',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
