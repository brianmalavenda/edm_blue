<?php
/**
 * Excerpt
 *
 * @package Visionary News
 */

$wp_customize->add_section(
	'visionary_news_excerpt_options',
	array(
		'panel' => 'visionary_news_theme_options',
		'title' => esc_html__( 'Excerpt', 'visionary-news' ),
	)
);

// Excerpt - Excerpt Length.
$wp_customize->add_setting(
	'visionary_news_excerpt_length',
	array(
		'default'           => 20,
		'sanitize_callback' => 'visionary_news_sanitize_number_range',
		'validate_callback' => 'visionary_news_validate_excerpt_length',
	)
);

$wp_customize->add_control(
	'visionary_news_excerpt_length',
	array(
		'label'       => esc_html__( 'Excerpt Length (no. of words)', 'visionary-news' ),
		'description' => esc_html__( 'Note: Min 1 & Max 100. Please input the valid number and save. Then refresh the page to see the change.', 'visionary-news' ),
		'section'     => 'visionary_news_excerpt_options',
		'settings'    => 'visionary_news_excerpt_length',
		'type'        => 'number',
		'input_attrs' => array(
			'min'  => 1,
			'max'  => 100,
			'step' => 1,
		),
	)
);
