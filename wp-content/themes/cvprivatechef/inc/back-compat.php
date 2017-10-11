<?php
/**
 * CV Private Chef back compat functionality
 *
 * Prevents CV Private Chef from running on WordPress versions prior to 4.7,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.7.
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since CV Private Chef 1.0
 */

/**
 * Prevent switching to CV Private Chef on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since CV Private Chef 1.0
 */
function cvprivatechef_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'cvprivatechef_upgrade_notice' );
}
add_action( 'after_switch_theme', 'cvprivatechef_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * CV Private Chef on WordPress versions prior to 4.7.
 *
 * @since CV Private Chef 1.0
 *
 * @global string $wp_version WordPress version.
 */
function cvprivatechef_upgrade_notice() {
	$message = sprintf( __( 'CV Private Chef requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'cvprivatechef' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.7.
 *
 * @since CV Private Chef 1.0
 *
 * @global string $wp_version WordPress version.
 */
function cvprivatechef_customize() {
	wp_die( sprintf( __( 'CV Private Chef requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'cvprivatechef' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'cvprivatechef_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.7.
 *
 * @since CV Private Chef 1.0
 *
 * @global string $wp_version WordPress version.
 */
function cvprivatechef_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'CV Private Chef requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'cvprivatechef' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'cvprivatechef_preview' );
