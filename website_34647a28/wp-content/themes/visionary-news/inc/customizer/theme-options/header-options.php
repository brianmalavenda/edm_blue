<?php
/**
 * Header Options
 *
 * @package Visionary News
 */

$wp_customize->add_section(
	'visionary_news_header_options',
	array(
		'panel' => 'visionary_news_theme_options',
		'title' => esc_html__( 'Header Options', 'visionary-news' ),
	)
);

// Header Options - Header Button Custom Label.
$wp_customize->add_setting(
	'visionary_news_header_custom_button_label',
	array(
		'default'           => __( 'Subscribe', 'visionary-news' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'visionary_news_header_custom_button_label',
	array(
		'label'    => esc_html__( 'Header Custom Button', 'visionary-news' ),
		'section'  => 'visionary_news_header_options',
		'settings' => 'visionary_news_header_custom_button_label',
		'type'     => 'text',
	)
);

// Header Options - Header Button Custom URL.
$wp_customize->add_setting(
	'visionary_news_header_custom_button_url',
	array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	'visionary_news_header_custom_button_url',
	array(
		'label'    => esc_html__( 'Button Link', 'visionary-news' ),
		'section'  => 'visionary_news_header_options',
		'settings' => 'visionary_news_header_custom_button_url',
		'type'     => 'url',
	)
);
