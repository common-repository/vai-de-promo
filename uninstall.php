<?php

/**

 *
 * @link       https://www.vaidepromo.com.br/
 * @since      1.0.0
 *
 * @package    Vai_De_Promo
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

$option_name = 'vai_de_promo';

delete_option($option_name);