<?php
/**
 * Post Options
 *
 * @package Visionary News
 */

$wp_customize->add_section(
	'visionary_news_post_options',
	array(
		'title' => esc_html__( 'Post Options', 'visionary-news' ),
		'panel' => 'visionary_news_theme_options',
	)
);

// Post Options - Hide Date.
$wp_customize->add_setting(
	'visionary_news_post_hide_date',
	array(
		'default'           => false,
		'sanitize_callback' => 'visionary_news_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Visionary_News_Toggle_Switch_Custom_Control(
		$wp_customize,
		'visionary_news_post_hide_date',
		array(
			'label'   => esc_html__( 'Hide Date', 'visionary-news' ),
			'section' => 'visionary_news_post_options',
		)
	)
);

// Post Options - Hide Author.
$wp_customize->add_setting(
	'visionary_news_post_hide_author',
	array(
		'default'           => false,
		'sanitize_callback' => 'visionary_news_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Visionary_News_Toggle_Switch_Custom_Control(
		$wp_customize,
		'visionary_news_post_hide_author',
		array(
			'label'   => esc_html__( 'Hide Author', 'visionary-news' ),
			'section' => 'visionary_news_post_options',
		)
	)
);

// Post Options - Hide Category.
$wp_customize->add_setting(
	'visionary_news_post_hide_category',
	array(
		'default'           => false,
		'sanitize_callback' => 'visionary_news_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Visionary_News_Toggle_Switch_Custom_Control(
		$wp_customize,
		'visionary_news_post_hide_category',
		array(
			'label'   => esc_html__( 'Hide Category', 'visionary-news' ),
			'section' => 'visionary_news_post_options',
		)
	)
);

// Post Options - Hide Tag.
$wp_customize->add_setting(
	'visionary_news_post_hide_tags',
	array(
		'default'           => false,
		'sanitize_callback' => 'visionary_news_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Visionary_News_Toggle_Switch_Custom_Control(
		$wp_customize,
		'visionary_news_post_hide_tags',
		array(
			'label'   => esc_html__( 'Hide Tag', 'visionary-news' ),
			'section' => 'visionary_news_post_options',
		)
	)
);

// Post Options - Related Post Label.
$wp_customize->add_setting(
	'visionary_news_post_related_post_label',
	array(
		'default'           => __( 'Related Posts', 'visionary-news' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'visionary_news_post_related_post_label',
	array(
		'label'    => esc_html__( 'Related Posts Label', 'visionary-news' ),
		'section'  => 'visionary_news_post_options',
		'settings' => 'visionary_news_post_related_post_label',
		'type'     => 'text',
	)
);
