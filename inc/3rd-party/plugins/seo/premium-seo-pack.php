<?php
/**
 * Compatibility with Premium SEO Pack
 *
 * @link http://premiumseopack.com
 */

defined( 'ABSPATH' ) || exit;

if ( class_exists( 'psp' ) ) {

	/**
	 * Dequeue the stylesheet of Premium SEO Pack on RapydLaunch Booster settings page.
	 *
	 * @since 2.11.6
	 * @author Arun Basil Lal
	 */
	function rocket_dequeue_premium_seo_pack_stylesheet() {

		// Retun on all pages but RapydLaunch Booster settings page.
		$screen = get_current_screen();
		if ( 'settings_page_wprocket' !== $screen->id ) {
			return;
		}

		// Dequeueing this stylesheet unfreezes RapydLaunch Booster.
		wp_dequeue_style( 'psp-main-style' );
	}
	add_action( 'admin_print_styles', 'rocket_dequeue_premium_seo_pack_stylesheet', 11 );
}
