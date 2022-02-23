<?php

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    MediaJel Tracker
 * @subpackage mediajel-tracker/public
 * @author     JP Baroma <jonathanbaroma@mediajel.com>
 */
class MJ_Tracker_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.1.3
	 * @access   private
	 * @var      string    $MJ_Tracker    The ID of this plugin.
	 */
	private $MJ_Tracker;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.1.3
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.1.3
	 * @param      string    $MJ_Tracker       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $MJ_Tracker, $version ) {

		$this->MJ_Tracker = $MJ_Tracker;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.1.3
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in MJ_Tracker_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The MJ_Tracker_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->MJ_Tracker, plugin_dir_url( __FILE__ ) . 'css/mj-tracker-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.1.3
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in MJ_Tracker_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The MJ_Tracker_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->MJ_Tracker, plugin_dir_url( __FILE__ ) . 'js/mj-tracker-public.js', array( 'jquery' ), $this->version, false );

		//wp_enqueue_script( 'tags-mj-ninja', 'https://tags.mediajel.ninja/?appId=jpbaroma', array( '' ), '', false );

		

	}

	/**
	 * Add the script on the header.
	 *
	 * @since    1.1.3
	 */
	public function jpb_display_Settings() {

		/**
		 * Display the header script
		 */

		$environment = "";
		$mj_scripts_options = get_option( 'mediajel_tracker_option_name' ); // Array of All Options

		$hs_app_id = $mj_scripts_options['jpb_Tracker_app_id'];
		$hs_cart = $mj_scripts_options['jpb_Tracker_cart'];
		$hs_testing = $mj_scripts_options['jpb_Tracker_testing'];

		if ( $hs_cart == 'none' ) {
			$environment = "";
		}
		else {
			$environment = '&environment='.$hs_cart;
		}
		


		if ( $hs_app_id != "") {//recently added
			if ($hs_testing == "jpb_Tracker_testing") {
				wp_enqueue_script( 'tags-mj-ninja', 'https://tags.mediajel.ninja/?appId='.$hs_app_id . $environment, '', $this->version, false );
				//echo '<script src="https://tags.mediajel.ninja/?appId='.$hs_app_id.'"></script>';
			}
			else {
				wp_enqueue_script( 'tags-cnna', 'https://tags.cnna.io/?appId='.$hs_app_id . $environment, '', $this->version, false );
				//echo '<script src="https://tags.cnna.io/?appId='.$hs_app_id.'"></script>';
			}
		}


		

		

	}

	

}
