<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/urko-vi/
 * @since             1.0.0
 * @package           Fonts_To_Salient
 *
 * @wordpress-plugin
 * Plugin Name:       Add Fonts To Salient
 * Plugin URI:        https://github.com/urko-vi/add-fonts-salient/blob/master/.gitignore
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Urko Villanueva
 * Author URI:        https://github.com/urko-vi/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       fonts-to-salient
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
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-fonts-to-salient-activator.php
 */
function activate_fonts_to_salient() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-fonts-to-salient-activator.php';
	Fonts_To_Salient_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-fonts-to-salient-deactivator.php
 */
function deactivate_fonts_to_salient() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-fonts-to-salient-deactivator.php';
	Fonts_To_Salient_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_fonts_to_salient' );
register_deactivation_hook( __FILE__, 'deactivate_fonts_to_salient' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-fonts-to-salient.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_fonts_to_salient() {

	$plugin = new Fonts_To_Salient();
	$plugin->run();

}
run_fonts_to_salient();
