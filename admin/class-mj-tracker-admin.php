<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    MediaJel Tracker
 * @subpackage mediajel-tracker/admin
 * @author     JP Baroma <jonathanbaroma@mediajel.com>
 */
class MJ_Tracker_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.1.2
	 * @access   private
	 * @var      string    $MJ_Tracker    The ID of this plugin.
	 */
	private $MJ_Tracker;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.1.2
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * All options for the MediaJel scripts.
	 *
	 * @since    1.1.2
	 * @access   private
	 * @var      array    $mediajel_tracker_options    An array of options for the MediaJel Scripts.
	 */
	private $mediajel_tracker_options;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.1.2
	 * @param      string    $MJ_Tracker       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $MJ_Tracker, $version ) {

		$this->MJ_Tracker = $MJ_Tracker;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.1.2
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

		wp_enqueue_style( $this->MJ_Tracker, plugin_dir_url( __FILE__ ) . 'css/mediajel-tracker-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.1.2
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

		wp_enqueue_script( $this->MJ_Tracker, plugin_dir_url( __FILE__ ) . 'js/mediajel-tracker-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Add the MediaJel Tracker page
	 *
	 * @since    1.1.2
	 */

	

	public function jpb_add_mediajel_page() {
		
		add_menu_page(
			'MediaJel Tracker', // page_title
			'MediaJel Tracker', // menu_title
			'manage_options', // capability
			'mediajel-tracker', // menu_slug
			array( $this, 'jpb_mediajel_tracker_create_admin_page' ), // function
			'dashicons-admin-generic', // icon_url
			2 // position
		);
		
	}

	public function jpb_mediajel_tracker_create_admin_page() {
		$this->mediajel_tracker_options = get_option( 'mediajel_tracker_option_name' ); ?>

		<div class="wrap">
			<h2>MediaJel Tracker</h2>
			<p></p>
			<?php settings_errors(); ?>

			<form method="post" action="options.php">
				<?php
					settings_fields( 'mediajel_tracker_option_group' );
					do_settings_sections( 'mediajel-tracker-admin' );
					submit_button();
				?>
			</form>
		</div>
	<?php }

	/**
	 * Add the setting sections and fields
	 *
	 * @since    1.1.2
	 */

	

	public function jpb_register_settings() {
		
		register_setting(
			'mediajel_tracker_option_group', // option_group
			'mediajel_tracker_option_name', // option_name
			array( $this, 'jpb_mediajel_tracker_sanitize' ) // sanitize_callback
		);

		add_settings_section(
			'Tracker_setting_section', // id
			'Universal Tracker (MVP)', // title
			array( $this, 'jpb_Tracker_section_info' ), // callback
			'mediajel-tracker-admin' // page
		);

		add_settings_field(
			'jpb_Tracker_app_id', // id
			'APP ID', // title
			array( $this, 'jpb_Tracker_app_id_callback' ), // callback
			'mediajel-tracker-admin', // page
			'Tracker_setting_section' // section
		);

		add_settings_field(
			'jpb_Tracker_testing', // id
			'Testing', // title
			array( $this, 'jpb_Tracker_testing_callback' ), // callback
			'mediajel-tracker-admin', // page
			'Tracker_setting_section' // section
		);
	}
		
	

	public function jpb_mediajel_tracker_sanitize($input) {
		$sanitary_values = array();
		if ( isset( $input['jpb_Tracker_app_id'] ) ) {
			$sanitary_values['jpb_Tracker_app_id'] = sanitize_text_field( $input['jpb_Tracker_app_id'] );
		}

		if ( isset( $input['jpb_Tracker_testing'] ) ) {
			$sanitary_values['jpb_Tracker_testing'] = $input['jpb_Tracker_testing'];
		}

		return $sanitary_values;
	}

	public function jpb_Tracker_section_info() {
		
	}

	public function jpb_Tracker_app_id_callback() {
		printf(
			'<input class="regular-text" type="text" name="mediajel_tracker_option_name[jpb_Tracker_app_id]" id="jpb_Tracker_app_id" value="%s">',
			isset( $this->mediajel_tracker_options['jpb_Tracker_app_id'] ) ? esc_attr( $this->mediajel_tracker_options['jpb_Tracker_app_id']) : ''
		);
	}

	public function jpb_Tracker_testing_callback() {
		printf(
			'<input type="checkbox" name="mediajel_tracker_option_name[jpb_Tracker_testing]" id="jpb_Tracker_testing" value="jpb_Tracker_testing" %s> <label for="jpb_Tracker_testing">Please have this ticked if on testing mode</label>',
			( isset( $this->mediajel_tracker_options['jpb_Tracker_testing'] ) && $this->mediajel_tracker_options['jpb_Tracker_testing'] === 'jpb_Tracker_testing' ) ? 'checked' : ''
		);
	}




}
