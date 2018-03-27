<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       www.arkvit.com
 * @since      1.0.0
 *
 * @package    Arkvit_Eventa
 * @subpackage Arkvit_Eventa/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Arkvit_Eventa
 * @subpackage Arkvit_Eventa/includes
 * @author     Arkvit ehf. <arkvit@arkvit.is>
 */
class Arkvit_Eventa_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'arkvit-eventa',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
