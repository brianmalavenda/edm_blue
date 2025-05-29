<?php
/**
 * Sidebar Option
 *
 * @package Visionary News
 */

$wp_customize->add_section(
	'visionary_news_sidebar_option',
	array(
		'title' => esc_html__( 'Layout', 'visionary-news' ),
		'panel' => 'visionary_news_theme_options',
	)
);

// Sidebar Option - Global Sidebar Position.
$wp_customize->add_setting(
	'visionary_news_sidebar_position',
	array(
		'sanitize_callback' => 'visionary_news_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'visionary_news_sidebar_position',
	array(
		'label'   => esc_html__( 'Global Sidebar Position', 'visionary-news' ),
		'section' => 'visionary_news_sidebar_option',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'visionary-news' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'visionary-news' ),
		),
	)
);

// Sidebar Option - Post Sidebar Position.
$wp_customize->add_setting(
	'visionary_news_post_sidebar_position',
	array(
		'sanitize_callback' => 'visionary_news_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'visionary_news_post_sidebar_position',
	array(
		'label'   => esc_html__( 'Post Sidebar Position', 'visionary-news' ),
		'section' => 'visionary_news_sidebar_option',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'visionary-news' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'visionary-news' ),
		),
	)
);

// Sidebar Option - Page Sidebar Position.
$wp_customize->add_setting(
	'visionary_news_page_sidebar_position',
	array(
		'sanitize_callback' => 'visionary_news_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'visionary_news_page_sidebar_position',
	array(
		'label'   => esc_html__( 'Page Sidebar Position', 'visionary-news' ),
		'section' => 'visionary_news_sidebar_option',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'visionary-news' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'visionary-news' ),
		),
	)
);
