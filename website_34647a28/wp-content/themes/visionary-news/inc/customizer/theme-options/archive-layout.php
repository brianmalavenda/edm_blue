<?php
/**
 * Archive Layout
 *
 * @package Visionary News
 */

$wp_customize->add_section(
	'visionary_news_archive_layout',
	array(
		'title' => esc_html__( 'Archive Layout', 'visionary-news' ),
		'panel' => 'visionary_news_theme_options',
	)
);

// Archive Layout - Column Layout.
$wp_customize->add_setting(
	'visionary_news_archive_column_layout',
	array(
		'default'           => 'column-2',
		'sanitize_callback' => 'visionary_news_sanitize_select',
	)
);

$wp_customize->add_control(
	'visionary_news_archive_column_layout',
	array(
		'label'   => esc_html__( 'Column Layout', 'visionary-news' ),
		'section' => 'visionary_news_archive_layout',
		'type'    => 'select',
		'choices' => array(
			'column-2' => __( 'Column 2', 'visionary-news' ),
			'column-3' => __( 'Column 3', 'visionary-news' ),
		),
	)
);
