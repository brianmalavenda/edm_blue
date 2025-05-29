<?php
/**
 * Footer Options
 *
 * @package Visionary News
 */

$wp_customize->add_section(
	'visionary_news_footer_options',
	array(
		'panel' => 'visionary_news_theme_options',
		'title' => esc_html__( 'Footer Options', 'visionary-news' ),
	)
);

// Footer Options - Copyright Text.
/* translators: 1: Year, 2: Site Title with home URL. */
$copyright_default = sprintf( esc_html_x( 'Copyright &copy; %1$s %2$s', '1: Year, 2: Site Title with home URL', 'visionary-news' ), '[the-year]', '[site-link]' );
$wp_customize->add_setting(
	'visionary_news_footer_copyright_text',
	array(
		'default'           => $copyright_default,
		'sanitize_callback' => 'wp_kses_post',
	)
);

$wp_customize->add_control(
	'visionary_news_footer_copyright_text',
	array(
		'label'    => esc_html__( 'Copyright Text', 'visionary-news' ),
		'section'  => 'visionary_news_footer_options',
		'settings' => 'visionary_news_footer_copyright_text',
		'type'     => 'textarea',
	)
);
