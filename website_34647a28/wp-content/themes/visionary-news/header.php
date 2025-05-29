<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Visionary News
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'visionary-news' ); ?></a>

		<div id="loader" class="loader-4">
			<div class="loader-container">
				<div id="preloader">
				</div>
			</div>
		</div><!-- #loader -->

		<header id="masthead" class="site-header">

			<?php
			$header_button     = get_theme_mod( 'visionary_news_header_custom_button_label', __( 'Subscribe', 'visionary-news' ) );
			$header_button_url = get_theme_mod( 'visionary_news_header_custom_button_url', '' );
			?>

			<?php $header_image = empty( get_header_image() ) ? '' : 'has-bg-image'; ?>
			<div class="visionary-news-middle-header <?php echo esc_attr( $header_image ); ?>">
				<?php if ( ! empty( get_header_image() ) ) : ?>
					<div class="header-bg-image">
						<img src="<?php echo esc_url( get_header_image() ); ?>" alt="<?php esc_attr_e( 'Header Image', 'visionary-news' ); ?>">
					</div>	
				<?php endif; ?>
				<div class="section-wrapper">
					<div class="visionary-news-middle-header-wrapper">
						<div class="header-button">
							<!-- customn button -->
							<?php if ( ! empty( $header_button ) ) { ?>
								<button class="header-custom-button">
									<a href="<?php echo esc_url( $header_button_url ); ?>"><?php echo esc_html( $header_button ); ?></a>
								</button>
							<?php } ?>
						</div>
						<!-- site branding -->
						<div class="site-branding">
							<?php if ( has_custom_logo() ) { ?>
								<div class="site-logo">
									<?php the_custom_logo(); ?>
								</div>
							<?php } ?>
							<div class="site-identity">
								<?php
								if ( is_front_page() && is_home() ) :
									?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
									<?php
							else :
								?>
								<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
								<?php
							endif;
							$visionary_news_description = get_bloginfo( 'description', 'display' );
							if ( $visionary_news_description || is_customize_preview() ) :
								?>
								<p class="site-description"><?php echo $visionary_news_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
							<?php endif; ?>
						</div>	
					</div>	
					<?php if ( has_nav_menu( 'social' ) ) : ?>
						<div class="header-social-icon">
							<div class="header-social-icon-container">
								<?php
								wp_nav_menu(
									array(
										'container'      => 'ul',
										'menu_class'     => 'social-links',
										'theme_location' => 'social',
										'link_before'    => '<span class="screen-reader-text">',
										'link_after'     => '</span>',
									)
								);
								?>
							</div>
						</div>
					<?php endif; ?>
				</div>	
			</div>
		</div>
		<div class="visionary-news-navigation-outer-wrapper">
			<div class="visionary-news-bottom-header">
				<div class="section-wrapper">
					<div class="visionary-news-bottom-header-wrapper">
						<!-- navigation -->
						<div class="navigation">
							<nav id="site-navigation" class="main-navigation">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
									<span class="ham-icon"></span>
									<span class="ham-icon"></span>
									<span class="ham-icon"></span>
								</button>
								<div class="navigation-area">
									<?php
									if ( has_nav_menu( 'primary' ) ) {
										wp_nav_menu(
											array(
												'theme_location' => 'primary',
												'menu_id' => 'primary-menu',
											)
										);
									}
									?>
								</div>
							</nav><!-- #site-navigation -->
						</div>
						<div class="bottom-header-right-part">
							<div class="visionary-news-header-search">
								<div class="header-search-wrap">
									<a href="#" class="search-icon"><i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i></a>
									<div class="header-search-form">
										<?php get_search_form(); ?>
									</div>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>	
		<!-- end of navigation -->
	</header><!-- #masthead -->

	<?php
	if ( ! is_front_page() || is_home() ) {
		if ( is_front_page() ) {

			require get_template_directory() . '/sections/sections.php';

		}
		?>
		<div class="visionary-news-main-wrapper">
			<div class="section-wrapper">
				<div class="visionary-news-container-wrapper">
				<?php } ?>
