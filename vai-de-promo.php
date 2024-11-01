<?php

/**
 *
 * @link              https://www.amopromo.com/
 * @since             1.0.0
 * @package           Vai_De_Promo
 *
 * @wordpress-plugin
 * Plugin Name:       Vai De Promo
 * Plugin URI:        https://wordpress.org/plugins/vai-de-promo/
 * Description:       Este é um plugin para afiliados do Vai De Promo. Você poderá enriquecer matérias com preços de voos que são atualizados o tempo todo
 * Version:           1.0.4
 * Author:            Amo Promo
 * Author URI:        https://www.amopromo.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       vai-de-promo
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
define( 'VAI_DE_PROMO_VERSION', '1.0.4' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-vai-de-promo-activator.php
 */
function activate_vai_de_promo() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-vai-de-promo-activator.php';
	Vai_De_Promo_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-vai-de-promo-deactivator.php
 */
function deactivate_vai_de_promo() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-vai-de-promo-deactivator.php';
	Vai_De_Promo_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_vai_de_promo' );
register_deactivation_hook( __FILE__, 'deactivate_vai_de_promo' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-vai-de-promo.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_vai_de_promo() {
	$plugin = new Vai_De_Promo();
	$plugin->run();
}
run_vai_de_promo();
