<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package supreme-hotel-theme
 */

?>

<header id="masthead" class="fixed top-0 left-0 w-full z-50 bg-transparent py-11 ">
	<div class="flex justify-between  container items-center">

	<div>
		<?php
		if ( is_front_page() ) :
			?>
			<img class="w-[240px]" src="<?php bloginfo('template_url') ?>/assets/images/SVG/logo-white.svg" />
			<!-- <h1><?php bloginfo( 'name' ); ?></h1> -->
			<?php
		else :
			?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img class="w-[240px]" src="<?php bloginfo('template_url') ?>/assets/images/SVG/logo-white.svg" />
			</a>
			<?php
		endif;

		$supreme_hotel_theme_description = get_bloginfo( 'description', 'display' );
		if ( $supreme_hotel_theme_description || is_customize_preview() ) :
			?>
			<p><?php echo $supreme_hotel_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
		<?php endif; ?>
	</div>

	<nav id="site-navigation" class="" aria-label="<?php esc_attr_e( 'Main Navigation', 'supreme-hotel-theme' ); ?>">
		<!-- <button aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'supreme-hotel-theme' ); ?></button> -->

		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s flex gap-20" aria-label="submenu">%3$s</ul>',
			)
		);
		?>
	</nav><!-- #site-navigation -->
	</div>

</header><!-- #masthead -->
