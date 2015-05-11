<?php
/*
Plugin Name: WooCommerce čeština
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=7F53XKXAB2HSG
Plugin URI: http://expres-web.cz
Description: Přeloží plugin WooCommerce do češtiny.
Version: 2.1.3
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
 
// Překlad uživ. částni
function wcc_load_textdomain() {
	$mofile = WP_PLUGIN_DIR . '/woocommerce-cestina/jazyky/user/' . apply_filters( 'woocommerce_locale', get_locale() ) . '.mo';

	if ( file_exists( $mofile ) )
		return load_textdomain( 'woocommerce', $mofile );
}
add_action( 'woocommerce_loaded', 'wcc_load_textdomain' );

// Překlad admin. částni
function wcca_load_textdomain() {
	$mofile = WP_PLUGIN_DIR . '/woocommerce-cestina/jazyky/admin/' . apply_filters( 'woocommerce_locale', get_locale() ) . '.mo';

	if ( file_exists( $mofile ) )
		return load_textdomain( 'woocommerce', $mofile );
}
add_action( 'woocommerce_loaded', 'wcca_load_textdomain' );

// Překlad Admin Bar Addition
function wccb_load_textdomain() {
	$mofile = WP_PLUGIN_DIR . '/woocommerce-cestina/jazyky/admin-bar-addition/' . apply_filters( 'woocommerce-admin-bar-addition_locale', get_locale() ) . '.mo';

	if ( file_exists( $mofile ) )
		return load_textdomain( 'woocommerce-admin-bar-addition', $mofile );
}
add_action( 'woocommerce_loaded', 'wccb_load_textdomain' );

// Překlad All in One Seo pack
function wccs_load_textdomain() {
	$mofile = WP_PLUGIN_DIR . '/woocommerce-cestina/jazyky/all-in-one-seo-pack/' . apply_filters( 'woo_ai_locale', get_locale() ) . '.mo';

	if ( file_exists( $mofile ) )
		return load_textdomain( 'woo_ai', $mofile );
}
add_action( 'woocommerce_loaded', 'wccs_load_textdomain' );

// Překlad Delivery notes
function wccdn_load_textdomain() {
	$mofile = WP_PLUGIN_DIR . '/woocommerce-cestina/jazyky/delivery-notes/' . apply_filters( 'woocommerce-delivery-notes_locale', get_locale() ) . '.mo';

	if ( file_exists( $mofile ) )
		return load_textdomain( 'woocommerce-delivery-notes', $mofile );
}
add_action( 'woocommerce_loaded', 'wccdn_load_textdomain' );

// Překlad Video product tab
function wccvpt_load_textdomain() {
	$mofile = WP_PLUGIN_DIR . '/woocommerce-cestina/jazyky/video-product-tab/' . apply_filters( 'wc_video_product_tab_locale', get_locale() ) . '.mo';

	if ( file_exists( $mofile ) )
		return load_textdomain( 'wc_video_product_tab', $mofile );
}
add_action( 'woocommerce_loaded', 'wccvpt_load_textdomain' );

// Překlad Photos product tab
function wccppt_load_textdomain() {
	$mofile = WP_PLUGIN_DIR . '/woocommerce-cestina/jazyky/photos-product-tab/' . apply_filters( 'wc_photos_product_tab_locale', get_locale() ) . '.mo';

	if ( file_exists( $mofile ) )
		return load_textdomain( 'wc_photos_product_tab', $mofile );
}
add_action( 'woocommerce_loaded', 'wccppt_load_textdomain' );