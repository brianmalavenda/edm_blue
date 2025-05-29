<?php
/**
 * Typography
 *
 * @package Visionary News
 */

$wp_customize->add_section(
	'visionary_news_typography',
	array(
		'panel' => 'visionary_news_theme_options',
		'title' => esc_html__( 'Typography', 'visionary-news' ),
	)
);

// Typography - Site Title Font.
$wp_customize->add_setting(
	'visionary_news_site_title_font',
	array(
		'default'           => 'Hind',
		'sanitize_callback' => 'visionary_news_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'visionary_news_site_title_font',
	array(
		'label'    => esc_html__( 'Site Title Font Family', 'visionary-news' ),
		'section'  => 'visionary_news_typography',
		'settings' => 'visionary_news_site_title_font',
		'type'     => 'select',
		'choices'  => visionary_news_get_all_google_font_families(),
	)
);

// Typography - Site Description Font.
$wp_customize->add_setting(
	'visionary_news_site_description_font',
	array(
		'default'           => 'Roboto',
		'sanitize_callback' => 'visionary_news_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'visionary_news_site_description_font',
	array(
		'label'    => esc_html__( 'Site Description Font Family', 'visionary-news' ),
		'section'  => 'visionary_news_typography',
		'settings' => 'visionary_news_site_description_font',
		'type'     => 'select',
		'choices'  => visionary_news_get_all_google_font_families(),
	)
);

// Typography - Header Font.
$wp_customize->add_setting(
	'visionary_news_header_font',
	array(
		'default'           => 'Exo',
		'sanitize_callback' => 'visionary_news_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'visionary_news_header_font',
	array(
		'label'    => esc_html__( 'Header Font Family', 'visionary-news' ),
		'section'  => 'visionary_news_typography',
		'settings' => 'visionary_news_header_font',
		'type'     => 'select',
		'choices'  => visionary_news_get_all_google_font_families(),
	)
);

// Typography - Body Font.
$wp_customize->add_setting(
	'visionary_news_body_font',
	array(
		'default'           => 'Roboto',
		'sanitize_callback' => 'visionary_news_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'visionary_news_body_font',
	array(
		'label'    => esc_html__( 'Body Font Family', 'visionary-news' ),
		'section'  => 'visionary_news_typography',
		'settings' => 'visionary_news_body_font',
		'type'     => 'select',
		'choices'  => visionary_news_get_all_google_font_families(),
	)
);
