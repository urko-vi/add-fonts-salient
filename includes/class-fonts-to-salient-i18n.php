<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/urko-vi/
 * @since      1.0.0
 *
 * @package    Fonts_To_Salient
 * @subpackage Fonts_To_Salient/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Fonts_To_Salient
 * @subpackage Fonts_To_Salient/includes
 * @author     Urko Villanueva <urko.informatica@gmail.com>
 */
class Fonts_To_Salient_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'fonts-to-salient',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
