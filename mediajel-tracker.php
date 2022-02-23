<?php

/**
 * @package          MediaJel Tracker
 *
 * Plugin Name:       MediaJel Tracker
 * Plugin URI:        https://wordpress.org/plugins/mediajel-tracker
 * Description:       Custom settings page for MediaJel tracker
 * Version:           1.1.3
 * Author:            MediaJel
 * Author URI:        https://www.mediajel.com
 * License:           GPLv2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       mj-tracker
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * 
 */
define( 'MJ_Tracker_VERSION', '1.1.3' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-mj-tracker-activator.php
 */
function activate_mj_tracker() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mj-tracker-activator.php';
	MJ_Tracker_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_mj_tracker() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mj-tracker-deactivator.php';
	MJ_Tracker_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_mj_tracker' );
register_deactivation_hook( __FILE__, 'deactivate_mj_tracker' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-mj-tracker.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.1.3
 */
function run_mj_tracker() {

	$plugin = new mj_tracker();
	$plugin->run();

}
run_mj_tracker();
