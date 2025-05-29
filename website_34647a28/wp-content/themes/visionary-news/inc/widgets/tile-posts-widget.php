<?php
if ( ! class_exists( 'Visionary_News_Tile_Posts_Widget' ) ) {
	/**
	 * Adds Visionary_News_Tile_Posts_Widget Widget.
	 */
	class Visionary_News_Tile_Posts_Widget extends WP_Widget {

		/**
		 * Register widget with WordPress.
		 */
		public function __construct() {
			$visionary_news_tile_posts_widget_ops = array(
				'classname'   => 'tile-posts ascendoor-widget style-1',
				'description' => __( 'Retrive Tile Posts Widgets', 'visionary-news' ),
			);
			parent::__construct(
				'visionary_news_tile_posts_widget',
				__( 'Ascendoor Tile Posts Widget', 'visionary-news' ),
				$visionary_news_tile_posts_widget_ops
			);
		}

		/**
		 * Front-end display of widget.
		 *
		 * @see WP_Widget::widget()
		 *
		 * @param array $args     Widget arguments.
		 * @param array $instance Saved values from database.
		 */
		public function widget( $args, $instance ) {
			if ( ! isset( $args['widget_id'] ) ) {
				$args['widget_id'] = $this->id;
			}
			$tile_title        = ( ! empty( $instance['title'] ) ) ? $instance['title'] : '';
			$tile_title        = apply_filters( 'widget_title', $tile_title, $instance, $this->id_base );
			$tile_button_label = ( ! empty( $instance['button_label'] ) ) ? $instance['button_label'] : '';
			$tile_count        = isset( $instance['number'] ) ? absint( $instance['number'] ) : 3;
			$tile_offset       = isset( $instance['offset'] ) ? absint( $instance['offset'] ) : '';
			$tile_category     = isset( $instance['category'] ) ? absint( $instance['category'] ) : '';
			$tile_button_link  = ( ! empty( $instance['button_link'] ) ) ? $instance['button_link'] : esc_url( get_category_link( $tile_category ) );

			echo $args['before_widget'];
			?>
			<div class="main-container-wrap">
				<?php if ( ! empty( $tile_title || $tile_button_label ) ) { ?>
					<div class="title-heading">
						<?php echo $args['before_title'] . esc_html( $tile_title ) . $args['after_title']; ?>
						<?php if ( ! empty( $tile_button_label ) ) : ?>
							<a href="<?php echo esc_url( $tile_button_link ); ?>" class="view-all"><?php echo esc_html( $tile_button_label ); ?></a>
						<?php endif; ?>
					</div>
				<?php } ?>
				<div class="tile-posts-wrapper">
					<?php
					$tile_args = array(
						'post_type'      => 'post',
						'posts_per_page' => absint( $tile_count ),
						'offset'         => absint( $tile_offset ),
						'cat'            => absint( $tile_category ),
					);

					$query = new WP_Query( $tile_args );
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) :
							$query->the_post();
							?>
							<div class="blog-post-container tile-layout">
								<div class="blog-post-inner">
									<?php if ( has_post_thumbnail() ) { ?>
										<div class="blog-post-image">
											<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
										</div>
									<?php } ?>
									<div class="blog-post-detail">
										<?php visionary_news_categories_list(); ?>
										<h2 class="entry-title">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</h2>
										<?php if ( ! has_post_thumbnail() ) { ?>
											<p class="post-excerpt">
												<?php echo wp_kses_post( wp_trim_words( get_the_content(), 20 ) ); ?>
											</p>
										<?php } ?>
										<div class="post-meta">
											<?php visionary_news_posted_by(); ?>
											<?php visionary_news_posted_on(); ?>
										</div>
									</div>
								</div>
							</div>
							<?php
						endwhile;
					}
					?>
				</div>
			</div>
			<?php
			echo $args['after_widget'];
		}

		/**
		 * Back-end widget form.
		 *
		 * @see WP_Widget::form()
		 *
		 * @param array $instance Previously saved values from database.
		 */
		public function form( $instance ) {
			$tile_title        = isset( $instance['title'] ) ? $instance['title'] : '';
			$tile_button_label = isset( $instance['button_label'] ) ? $instance['button_label'] : '';
			$tile_button_link  = isset( $instance['button_link'] ) ? $instance['button_link'] : '';
			$tile_count        = isset( $instance['number'] ) ? absint( $instance['number'] ) : 3;
			$tile_offset       = isset( $instance['offset'] ) ? absint( $instance['offset'] ) : '';
			$tile_category     = isset( $instance['category'] ) ? absint( $instance['category'] ) : '';
			?>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Section Title:', 'visionary-news' ); ?></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $tile_title ); ?>" />
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'button_label' ) ); ?>"><?php esc_html_e( 'View All Button:', 'visionary-news' ); ?></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'button_label' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'button_label' ) ); ?>" type="text" value="<?php echo esc_attr( $tile_button_label ); ?>" />
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'button_link' ) ); ?>"><?php esc_html_e( 'View All Button URL:', 'visionary-news' ); ?></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'button_link' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'button_link' ) ); ?>" type="text" value="<?php echo esc_attr( $tile_button_link ); ?>" />
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>"><?php esc_html_e( 'Number of posts to show (Min:1 | Max:4):', 'visionary-news' ); ?></label>
				<input class="tiny-text" id="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'number' ) ); ?>" type="number" step="1" min="1" max="4" value="<?php echo absint( $tile_count ); ?>" size="3" />
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'offset' ) ); ?>"><?php esc_html_e( 'Number of posts to displace or pass over:', 'visionary-news' ); ?></label>
				<input class="tiny-text" id="<?php echo esc_attr( $this->get_field_id( 'offset' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'offset' ) ); ?>" type="number" step="1" min="0" value="<?php echo absint( $tile_offset ); ?>" size="3" />
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'category' ) ); ?>"><?php esc_html_e( 'Select the category to show posts:', 'visionary-news' ); ?></label>
				<select id="<?php echo esc_attr( $this->get_field_id( 'category' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'category' ) ); ?>" class="widefat" style="width:100%;">
					<?php
					$categories = visionary_news_get_post_cat_choices();
					foreach ( $categories as $category => $value ) {
						?>
						<option value="<?php echo absint( $category ); ?>" <?php selected( $tile_category, $category ); ?>><?php echo esc_html( $value ); ?></option>
						<?php
					}
					?>
				</select>
			</p>
			<?php
		}

		/**
		 * Sanitize widget form values as they are saved.
		 *
		 * @see WP_Widget::update()
		 *
		 * @param array $new_instance Values just sent to be saved.
		 * @param array $old_instance Previously saved values from database.
		 *
		 * @return array Updated safe values to be saved.
		 */
		public function update( $new_instance, $old_instance ) {
			$instance                 = $old_instance;
			$instance['title']        = sanitize_text_field( $new_instance['title'] );
			$instance['button_label'] = sanitize_text_field( $new_instance['button_label'] );
			$instance['button_link']  = esc_url_raw( $new_instance['button_link'] );
			$instance['number']       = (int) $new_instance['number'];
			if ( $instance['number'] < 1 ) {
				$instance['number'] = 1;
			} elseif ( $instance['number'] > 4 ) {
				$instance['number'] = 4;
			}
			$instance['offset']   = (int) $new_instance['offset'];
			$instance['category'] = (int) $new_instance['category'];
			return $instance;
		}
	}
}
