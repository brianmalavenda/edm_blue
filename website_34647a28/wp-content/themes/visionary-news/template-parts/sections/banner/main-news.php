<?php
$main_news_query = new WP_Query( $main_news_args );
if ( $main_news_query->have_posts() ) {
	?>
	<div class="banner-main-part">
		<div class="banner-main-wrap">
			<?php
			$i = 1;
			while ( $main_news_query->have_posts() ) :
				$main_news_query->the_post();
				$class_attr = $i === 1 ? 'list-layout' : 'grid-layout';
				?>
				<div class="blog-post-container <?php echo esc_attr( $class_attr ); ?>">
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
