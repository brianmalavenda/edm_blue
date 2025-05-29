<?php

/**
 * Dynamic CSS
 */
function visionary_news_dynamic_css() {

	$site_title_font       = get_theme_mod( 'visionary_news_site_title_font', 'Hind' );
	$site_description_font = get_theme_mod( 'visionary_news_site_description_font', 'Roboto' );
	$header_font           = get_theme_mod( 'visionary_news_header_font', 'Exo' );
	$body_font             = get_theme_mod( 'visionary_news_body_font', 'Roboto' );

	$custom_css  = '';
	$custom_css .= '
	/* Color */
	:root {
		--site-title-color: ' . esc_attr( '#' . get_header_textcolor() ) . ';
		--custom-bg-clr: ' . esc_attr( '#' . get_background_color() ) . ';
	}
	';

	$custom_css .= '
	/* Typograhpy */
	:root {
		--site-title-font: "' . esc_attr( $site_title_font ) . '", serif;
		--site-description-font: "' . esc_attr( $site_description_font ) . '", serif;
		--font-heading: "' . esc_attr( $header_font ) . '", serif;
		--font-body: "' . esc_attr( $body_font ) . '", serif;
	}';

	wp_add_inline_style( 'visionary-news-style', $custom_css );

}

add_action( 'wp_enqueue_scripts', 'visionary_news_dynamic_css', 99 );
