<?php
/**
 * Breadcrumb
 *
 * @package Visionary News
 */

$wp_customize->add_section(
	'visionary_news_breadcrumb',
	array(
		'title' => esc_html__( 'Breadcrumb', 'visionary-news' ),
		'panel' => 'visionary_news_theme_options',
	)
);

// Breadcrumb - Enable Breadcrumb.
$wp_customize->add_setting(
	'visionary_news_enable_breadcrumb',
	array(
		'sanitize_callback' => 'visionary_news_sanitize_switch',
		'default'           => true,
	)
);

$wp_customize->add_control(
	new Visionary_News_Toggle_Switch_Custom_Control(
		$wp_customize,
		'visionary_news_enable_breadcrumb',
		array(
			'label'   => esc_html__( 'Enable Breadcrumb', 'visionary-news' ),
			'section' => 'visionary_news_breadcrumb',
		)
	)
);

// Breadcrumb - Separator.
$wp_customize->add_setting(
	'visionary_news_breadcrumb_separator',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default'           => '/',
	)
);

$wp_customize->add_control(
	'visionary_news_breadcrumb_separator',
	array(
		'label'           => esc_html__( 'Separator', 'visionary-news' ),
		'active_callback' => 'visionary_news_is_breadcrumb_enabled',
		'section'         => 'visionary_news_breadcrumb',
	)
);
