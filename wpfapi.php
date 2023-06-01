<?php
/**
* @link              https://efraim.cat
* @since             1.0.0
* @package           Wpfapi
*
* @wordpress-plugin
* Plugin Name:       WpfAPI
* Plugin URI:        https://github.com/Efraimcat/wpfunosapi/
* Description:       Funcionalidades para funos.es RESTAPI
* Version:           1.0.6
* Author:            Efraim Bayarri
* Author URI:        https://efraim.cat
* License:           GPL-2.0+
* License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
* Text Domain:       wpfapi
* Domain Path:       /languages
* Requires PHP: 	   7.4
* Requires at least: 5.9
* Tested up to: 	   6.2
* GitHub Plugin URI: https://github.com/Efraimcat/wpfunosAPI
*/
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'WPFAPI_VERSION', '1.0.6' );

function activate_wpfapi() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wpfapi-activator.php';
	Wpfapi_Activator::activate();
}
function deactivate_wpfapi() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wpfapi-deactivator.php';
	Wpfapi_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wpfapi' );
register_deactivation_hook( __FILE__, 'deactivate_wpfapi' );

require plugin_dir_path( __FILE__ ) . 'includes/class-wpfapi.php';

function run_wpfapi() {
	$plugin = new Wpfapi();
	$plugin->run();
}
run_wpfapi();
