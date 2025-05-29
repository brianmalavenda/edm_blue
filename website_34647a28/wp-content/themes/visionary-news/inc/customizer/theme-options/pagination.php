<?php
/**
 * Pagination
 *
 * @package Visionary News
 */

$wp_customize->add_section(
	'visionary_news_pagination',
	array(
		'panel' => 'visionary_news_theme_options',
		'title' => esc_html__( 'Pagination', 'visionary-news' ),
	)
);

// Pagination - Enable Pagination.
$wp_customize->add_setting(
	'visionary_news_enable_pagination',
	array(
		'default'           => true,
		'sanitize_callback' => 'visionary_news_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Visionary_News_Toggle_Switch_Custom_Control(
		$wp_customize,
		'visionary_news_enable_pagination',
		array(
			'label'    => esc_html__( 'Enable Pagination', 'visionary-news' ),
			'section'  => 'visionary_news_pagination',
			'settings' => 'visionary_news_enable_pagination',
			'type'     => 'checkbox',
		)
	)
);

// Pagination - Pagination Type.
$wp_customize->add_setting(
	'visionary_news_pagination_type',
	array(
		'default'           => 'numeric',
		'sanitize_callback' => 'visionary_news_sanitize_select',
	)
);

$wp_customize->add_control(
	'visionary_news_pagination_type',
	array(
		'label'           => esc_html__( 'Pagination Type', 'visionary-news' ),
		'section'         => 'visionary_news_pagination',
		'settings'        => 'visionary_news_pagination_type',
		'active_callback' => 'visionary_news_is_pagination_enabled',
		'type'            => 'select',
		'choices'         => array(
			'default' => __( 'Default (Older/Newer)', 'visionary-news' ),
			'numeric' => __( 'Numeric', 'visionary-news' ),
		),
	)
);
