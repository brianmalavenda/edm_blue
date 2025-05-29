<?php
/**
 * Front Page Options
 *
 * @package Visionary News
 */

$wp_customize->add_panel(
	'visionary_news_front_page_options',
	array(
		'title'    => esc_html__( 'Front Page Options', 'visionary-news' ),
		'priority' => 130,
	)
);

// Flash News Section.
require get_template_directory() . '/inc/customizer/front-page-options/flash-news.php';

// Banner Section.
require get_template_directory() . '/inc/customizer/front-page-options/banner.php';
