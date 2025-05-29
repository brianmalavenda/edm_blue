<?php
/**
 * Flash News Section
 *
 * @package Visionary News
 */

$wp_customize->add_section(
	'visionary_news_flash_news_section',
	array(
		'panel' => 'visionary_news_front_page_options',
		'title' => esc_html__( 'Flash News Section', 'visionary-news' ),
	)
);

// Flash News Section - Enable Section.
$wp_customize->add_setting(
	'visionary_news_enable_flash_news_section',
	array(
		'default'           => false,
		'sanitize_callback' => 'visionary_news_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Visionary_News_Toggle_Switch_Custom_Control(
		$wp_customize,
		'visionary_news_enable_flash_news_section',
		array(
			'label'    => esc_html__( 'Enable Flash News Section', 'visionary-news' ),
			'section'  => 'visionary_news_flash_news_section',
			'settings' => 'visionary_news_enable_flash_news_section',
		)
	)
);

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'visionary_news_enable_flash_news_section',
		array(
			'selector' => '#visionary_news_flash_news_section .section-link',
			'settings' => 'visionary_news_enable_flash_news_section',
		)
	);
}

// Flash News Section - Section Title.
$wp_customize->add_setting(
	'visionary_news_flash_news_title',
	array(
		'default'           => __( 'Top News', 'visionary-news' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'visionary_news_flash_news_title',
	array(
		'label'           => esc_html__( 'Section Title', 'visionary-news' ),
		'section'         => 'visionary_news_flash_news_section',
		'settings'        => 'visionary_news_flash_news_title',
		'type'            => 'text',
		'active_callback' => 'visionary_news_is_flash_news_section_enabled',
	)
);

// Flash News Section - Speed Controller.
$wp_customize->add_setting(
	'visionary_news_flash_news_speed_controller',
	array(
		'default'           => 30,
		'sanitize_callback' => 'visionary_news_sanitize_number_range',
	)
);

$wp_customize->add_control(
	'visionary_news_flash_news_speed_controller',
	array(
		'label'           => esc_html__( 'Speed Controller', 'visionary-news' ),
		'description'     => esc_html__( 'Note: Default speed value is 30.', 'visionary-news' ),
		'section'         => 'visionary_news_flash_news_section',
		'settings'        => 'visionary_news_flash_news_speed_controller',
		'type'            => 'number',
		'input_attrs'     => array(
			'min' => 1,
		),
		'active_callback' => 'visionary_news_is_flash_news_section_enabled',
	)
);

// Flash News Section - Content Type.
$wp_customize->add_setting(
	'visionary_news_flash_news_content_type',
	array(
		'default'           => 'post',
		'sanitize_callback' => 'visionary_news_sanitize_select',
	)
);

$wp_customize->add_control(
	'visionary_news_flash_news_content_type',
	array(
		'label'           => esc_html__( 'Select Content Type', 'visionary-news' ),
		'section'         => 'visionary_news_flash_news_section',
		'settings'        => 'visionary_news_flash_news_content_type',
		'type'            => 'select',
		'active_callback' => 'visionary_news_is_flash_news_section_enabled',
		'choices'         => array(
			'post'     => esc_html__( 'Post', 'visionary-news' ),
			'category' => esc_html__( 'Category', 'visionary-news' ),
		),
	)
);

for ( $i = 1; $i <= 5; $i++ ) {

	// Flash News Section - Select Post.
	$wp_customize->add_setting(
		'visionary_news_flash_news_content_post_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'visionary_news_flash_news_content_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Select Post %d', 'visionary-news' ), $i ),
			'section'         => 'visionary_news_flash_news_section',
			'settings'        => 'visionary_news_flash_news_content_post_' . $i,
			'active_callback' => 'visionary_news_is_flash_news_section_and_content_type_post_enabled',
			'type'            => 'select',
			'choices'         => visionary_news_get_post_choices(),
		)
	);

}

// Flash News Section - Select Category.
$wp_customize->add_setting(
	'visionary_news_flash_news_content_category',
	array(
		'sanitize_callback' => 'visionary_news_sanitize_select',
	)
);

$wp_customize->add_control(
	'visionary_news_flash_news_content_category',
	array(
		'label'           => esc_html__( 'Select Category', 'visionary-news' ),
		'section'         => 'visionary_news_flash_news_section',
		'settings'        => 'visionary_news_flash_news_content_category',
		'active_callback' => 'visionary_news_is_flash_news_section_and_content_type_category_enabled',
		'type'            => 'select',
		'choices'         => visionary_news_get_post_cat_choices(),
	)
);
