<?php
$featured_news_query = new WP_Query( $featured_news_args );
if ( $featured_news_query->have_posts() ) {
	$section_title       = get_theme_mod( 'visionary_news_featured_news_title', __( 'Featured News', 'visionary-news' ) );
	$view_all_button     = get_theme_mod( 'visionary_news_featured_news_button_label', __( 'View All', 'visionary-news' ) );
	$view_all_button_url = get_theme_mod( 'visionary_news_featured_news_button_link', '#' );
	?>
	<div class="featured-posts">
		<?php if ( ! empty( $section_title || $view_all_button ) ) : ?>
			<div class="title-heading">
				<h3 class="section-title">
					<?php echo esc_html( $section_title ); ?>
				</h3>
				<?php if ( ! empty( $view_all_button ) ) { ?>
					<a href="<?php echo esc_url( $view_all_button_url ); ?>" class="view-all"><?php echo esc_html( $view_all_button ); ?></a>
				<?php } ?>
			</div>
		<?php endif; ?>
		<div class="featured-posts-wrap">
			<?php
			$i = 1;
			while ( $featured_news_query->have_posts() ) :
				$featured_news_query->the_post();
				?>
				<div class="blog-post-container <?php echo esc_attr( $i === 1 ? 'tile-layout' : 'small-list-layout' ); ?>">
					<div class="blog-post-inner">
						<?php if ( has_post_thumbnail() ) { ?>
							<div class="blog-post-image">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'post-thumbnail' ); ?></a>
							</div>
						<?php } ?>
						<div class="blog-post-detail">
							<?php visionary_news_categories_list(); ?>
							<h2 class="entry-title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h2>
							<div class="post-meta">
								<?php
								visionary_news_posted_by();
								visionary_news_posted_on();
								?>
							</div>
						</div>
					</div>
				</div>
				<?php
				$i++;
			endwhile;
			wp_reset_postdata();
			?>
		</div>
	</div>
	<?php
}
