<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package supreme-hotel-theme
 */

get_header();
?>
<section id="hero" class="h-screen bg-cover" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/hero-image.jpg');">
    <div class="container grid grid-cols-2 items-center h-full justify-between">
        <div class="grid gap-2 justify-items-start"> 
            <h1  class="text-white text-[164px]">Hello</h1>
            <p class="text-xl text-white font-semibold">
            "Supreme" is a luxury hotel in Durres, Albania, offering an exquisite coastal retreat. With stunning sea views, elegant suites, and top-notch amenities including a spa and infinity pool, it's a haven of opulence. Experience impeccable service, gourmet dining, and a touch of Albanian charm at this lavish getaway. 
            </p>
            <button class="button">Rooms & Suites</button>
        </div>
        <div class="grid gap-7 justify-end">
            <img class="img" src="<?php bloginfo('template_url'); ?>/assets/images/room.jpg" alt="">
            <img class="img" src="<?php bloginfo('template_url'); ?>/assets/images/outside.jpg" alt="">
            <img class="img" src="<?php bloginfo('template_url'); ?>/assets/images/drone-view.jpg" alt="">
            <img class="img" src="<?php bloginfo('template_url'); ?>/assets/images/shrimps.jpg" alt="">
        </div>
    </div>
</section>
<section id="welcome-section">
    <main id="main">
            <div class="container grid grid-cols-2">
                <div class="relative">
                    <img class="img" src="<?php bloginfo('template_url'); ?>/assets/images/chairs.jpg" alt="">
                    <img class="img absolute -bottom-11 left-40" src="<?php bloginfo('template_url'); ?>/assets/images/staff.jpg" alt="">
                </div>
                <div class="grid justify-items-end content-baseline">
                    <h1 class="text-7xl">Welcome to Supreme Hotel</h1>
                    <p class="text-[35px]  ">"Welcome to Supreme, Durres' epitome of luxury. Your extraordinary stay begins now, where stunning views, elegant suites, and impeccable service await. Enjoy every moment of indulgence."</p>
                    <button class="button  bg-[#C3B085] text-white ml-auto">READ MORE</button>

                </div>
            </div>


    </main><!-- #main -->
</section><!-- #primary -->

<section id="ameneties-section" class="h-screen bg-[#87cefa]">
    <main id="main">
            <div class="container">
               
            </div>


    </main><!-- #main -->
</section><!-- #primary -->

<section id="rooms-suites-section">
    <main id="main">
            <div class="container grid justify-items-center">
                    <p class="text-[35px] font-medium text-xl mb-8">RAISING COMFORT TO THE HIGHEST LEVEL</p>
                    <h1 class="text-7xl mb-16">Rooms & Suites</h1>
                    <div class="grid grid-cols-3  justify-items-center gap-11">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/room1.jpg" alt="">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/room2.jpg" alt="">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/room3.jpg" alt="">
                    </div>
                    <button class="button bg-[#C3B085] text-white mx-auto">VIEW MORE</button>

            </div>


    </main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();