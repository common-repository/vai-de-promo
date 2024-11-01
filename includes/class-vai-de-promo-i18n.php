<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.vaidepromo.com.br/
 * @since      1.0.0
 *
 * @package    Vai_De_Promo
 * @subpackage Vai_De_Promo/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Vai_De_Promo
 * @subpackage Vai_De_Promo/includes
 * @author     2XT <plugins@2xt.com.br>
 */
class Vai_De_Promo_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'vai-de-promo',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
