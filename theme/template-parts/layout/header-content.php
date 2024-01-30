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
	<div class="flex justify-center lg:justify-between  container items-center">
		<div>
			<?php
			if (is_front_page()):
				?>
				<img class="w-[70px]" src="<?php bloginfo('template_url') ?>/assets/SVG/small-logo.svg" />
				<!-- <h1><?php bloginfo('name'); ?></h1> -->
				<?php
			else:
				?>
				<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
					<img class="w-[70px]" src="<?php bloginfo('template_url') ?>/assets/SVG/small-logo.svg" />
				</a>
				<?php
			endif;
			?>
		</div>
		<nav id="mobile-nav" class="lg:hidden ml-auto" x-data="{open: false}">
			<div class="burger-menu grid gap-[6px] p-2 relative z-50" x-on:click="open = !open" @click="handleClick">

				<div class="line w-6 bg-white h-[2px] first-line"></div>
				<div class="line w-6 bg-white h-[2px] middle-line"></div>
				<div class="line w-6 bg-white h-[2px] last-line"></div>
			</div>
			<script>
				function handleClick(e) {
					const body = document.querySelector('body')
					body.classList.toggle("overflow-hidden")
				}
			</script>

			<div x-show="open" x-transition class="absolute w-full h-screen bg-[#3E9CBE] left-0 top-0">
				<div class="h-full grid place-content-center gap-10">
					<?php
					if (is_front_page()):
						?>
						<img class="w-[70px] mx-auto" src="<?php bloginfo('template_url') ?>/assets/SVG/small-logo.svg" />
						<!-- <h1><?php bloginfo('name'); ?></h1> -->
						<?php
					else:
						?>
						<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
							<img class="w-[70px] mx-auto"
								src="<?php bloginfo('template_url') ?>/assets/SVG/small-logo.svg" />
						</a>
						<?php
					endif;
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id' => 'primary-menu',
							'container_class' => 'h-full menu-mobile',
							'items_wrap' => '<ul id="%1$s" class="%2$s h-full grid place-content-center text-center gap-5" aria-label="submenu">%3$s</ul>',
						)
					);
					?>
				</div>
			</div>
		</nav>
		<nav id="site-navigation" class="max-lg:hidden"
			aria-label="<?php esc_attr_e('Main Navigation', 'supreme-hotel-theme'); ?>">
			<!-- <button aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'supreme-hotel-theme'); ?></button> -->

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id' => 'primary-menu',
					'items_wrap' => '<ul id="%1$s" class="%2$s flex gap-20" aria-label="submenu">%3$s</ul>',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</div>

</header><!-- #masthead -->