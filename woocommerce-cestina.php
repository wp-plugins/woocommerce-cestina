<?php
/*
Plugin Name: WooCommerce čeština
Plugin URI: http://expres-web.cz
Description: Přeloží plugin WooCommerce do češtiny.
Version: 2.1
Author: Expres-Web.cz
Author URI: http://www.expres-web.cz

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License along
with this program; if not, write to the Free Software Foundation, Inc.,
51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Maybe load the WooCommerce čeština.
 *
 * @since 2.1
 */
function wcc_load_textdomain() {
	$mofile = WP_PLUGIN_DIR . '/woocommerce-cestina/jazyky/user/' . apply_filters( 'woocommerce_locale', get_locale() ) . '.mo';

	if ( file_exists( $mofile ) )
		return load_textdomain( 'woocommerce', $mofile );
}
add_action( 'woocommerce_loaded', 'wcc_load_textdomain' );

function wcca_load_textdomain() {
	$mofile = WP_PLUGIN_DIR . '/woocommerce-cestina/jazyky/admin/' . apply_filters( 'woocommerce_locale', get_locale() ) . '.mo';

	if ( file_exists( $mofile ) )
		return load_textdomain( 'woocommerce', $mofile );
}
add_action( 'woocommerce_loaded', 'wcca_load_textdomain' );
