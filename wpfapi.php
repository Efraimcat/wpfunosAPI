<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://efraim.cat
 * @since             1.0.0
 * @package           Wpfapi
 *
 * @wordpress-plugin
 * Plugin Name:       WpfAPI
 * Plugin URI:        https://https://github.com/Efraimcat/wpfapi/
 * Description:       This is a description of the plugin.
 * Version:           1.0.0
 * Author:            Efraim Bayarri
 * Author URI:        https://efraim.cat
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wpfapi
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
define( 'WPFAPI_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wpfapi-activator.php
 */
function activate_wpfapi() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wpfapi-activator.php';
	Wpfapi_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wpfapi-deactivator.php
 */
function deactivate_wpfapi() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wpfapi-deactivator.php';
	Wpfapi_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wpfapi' );
register_deactivation_hook( __FILE__, 'deactivate_wpfapi' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wpfapi.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wpfapi() {

	$plugin = new Wpfapi();
	$plugin->run();

}
run_wpfapi();
