<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package supreme-hotel-theme
 */

?>

<footer id="main-footer" class="bg-[#480634]">
    <div class="container border-b-2 border-white">
        <div id="footer-top" class=" pt-32">
            <h1 class="text-[36px] md:text-[56px]  text-white text-center leading-none mb-1">REGISTER NOW!</h1>
            <h1 class="text-[28px] md:text-[35px]  text-white text-center leading-none mb-1">AND GET THE LATEST OFFERS
            </h1>
            <div class="bg-blue-100 p-4">
                <div class="w-full lg:max-w-md mx-auto text-center">
                    <form class="mt-4 flex w-full items-center">
                        <input type="email" placeholder="Your email..." class="w-full  bg-transparent border py-2 px-6">
                        <button type="submit"
                            class="bg-white border text-[#480634] py-2 px-4 hover:bg-white transition duration-200">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <div id="footer-main" class="grid  lg:grid-cols-3 items-center">
            <div class="menu-left max-lg:order-2">
                <?php if (has_nav_menu('footer-menu-left')): ?>
                    <nav aria-label="<?php esc_attr_e('Footer Menu', 'supreme-hotel-theme'); ?>">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer-menu-left',
                                'menu_class' => 'footer-menu max-lg:text-center lg:pl-[95px]',
                                'depth' => 1,
                            )
                        );
                        ?>
                    </nav>
                <?php endif; ?>
            </div>
            <div class="menu-logo max-lg:mb-3 max-lg:order-1">

                <?php
                if (is_front_page()):
                    ?>
                    <img class="w-[200px] lg:w-[300px] mt-4 mx-auto"
                        src="<?php bloginfo('template_url') ?>/assets/SVG/logo-white-vertical.svg" />
                    <!-- <h1><?php bloginfo('name'); ?></h1> -->
                    <?php
                else:
                    ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <img class="w-[200px] lg:w-[300px] mt-4 mx-auto"
                            src="<?php bloginfo('template_url') ?>/assets/SVG/logo-white-vertical.svg" />
                    </a>
                    <?php
                endif;
                ?>
            </div>
            <div class="menu-right max-lg:order-3 lg:justify-self-end">
                <?php if (has_nav_menu('footer-menu-right')): ?>
                    <nav aria-label="<?php esc_attr_e('Footer Menu', 'supreme-hotel-theme'); ?>">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer-menu-right',
                                'menu_class' => 'footer-menu text-center lg:text-right lg:pr-[95px]',
                                'depth' => 1,
                            )
                        );
                        ?>
                    </nav>
                <?php endif; ?>
            </div>

        </div>
        <div id="footer-bottom" class="text-center text-white font-bold text-sm md:text-base py-4 md:py-8">
            info@supreme.com.al / 00 355 67 40 22 112
        </div>
    </div>
    <div id=" copyright" class="text-center text-white font-light text-sm md:text-base py-2 md:py-4">
        © Copyright Supreme Hotel & Spa
    </div>

</footer><!-- #colophon -->