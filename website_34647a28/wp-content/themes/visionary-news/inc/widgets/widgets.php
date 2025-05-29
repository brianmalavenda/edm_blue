<?php

// List Posts Thumbnail Widget.
require get_template_directory() . '/inc/widgets/list-posts-thumbnail-widget.php';

// List Posts Widget.
require get_template_directory() . '/inc/widgets/list-posts-widget.php';

// Grid Posts Widget.
require get_template_directory() . '/inc/widgets/grid-posts-widget.php';

// Tile Posts Widget.
require get_template_directory() . '/inc/widgets/tile-posts-widget.php';

// Category Widget.
require get_template_directory() . '/inc/widgets/categories-widget.php';

// Social Icons Widget.
require get_template_directory() . '/inc/widgets/social-icons-widget.php';

/**
 * Register Widgets
 */
function visionary_news_register_widgets() {

	register_widget( 'Visionary_News_List_Posts_Thumbnail_Widget' );

	register_widget( 'Visionary_News_List_Posts_Widget' );

	register_widget( 'Visionary_News_Grid_Posts_Widget' );

	register_widget( 'Visionary_News_Tile_Posts_Widget' );

	register_widget( 'Visionary_News_Categories_Widget' );

	register_widget( 'Visionary_News_Social_Icons_Widget' );

}
add_action( 'widgets_init', 'visionary_news_register_widgets' );
