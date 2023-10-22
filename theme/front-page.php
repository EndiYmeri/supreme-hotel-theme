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
<section id="hero" class="h-screen bg-cover"
    style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/hero-image.jpg');">
    <div class="container grid grid-cols-2 items-center h-full justify-between">
        <div class="grid gap-2 justify-items-start">
            <?php while (have_rows("hero_section")):
                    the_row(); ?>
            <h1 class="text-white text-[164px]">
                <?php echo the_sub_field("title"); ?>
            </h1>
            <?php
                endwhile; ?>
            <p class="text-xl text-white font-semibold">
                "Supreme" is a luxury hotel in Durres, Albania, offering an exquisite coastal retreat. With stunning sea
                views, elegant suites, and top-notch amenities including a spa and infinity pool, it's a haven of
                opulence. Experience impeccable service, gourmet dining, and a touch of Albanian charm at this lavish
                getaway.
            </p>
            <button class="button">Rooms & Suites</button>
        </div>
        <div class="grid gap-7 justify-end h-full overflow-y-scroll">
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
                <img class="img absolute -bottom-11 left-40"
                    src="<?php bloginfo('template_url'); ?>/assets/images/staff.jpg" alt="">
            </div>
            <div class="grid justify-items-end content-baseline">
                <h1 class="text-7xl">Welcome to Supreme Hotel</h1>
                <p class="text-[35px]  ">"Welcome to Supreme, Durres' epitome of luxury. Your extraordinary stay begins
                    now, where stunning views, elegant suites, and impeccable service await. Enjoy every moment of
                    indulgence."</p>
                <button class="button  bg-[#C3B085] text-white ml-auto">READ MORE</button>

            </div>
        </div>


    </main><!-- #main -->
</section><!-- #primary -->

<section id="ameneties-section" class="h-screen max-h-[980px] bg-no-repeat bg-cover"
    style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/beach-view.jpg');">
    <div class="container h-full">
        <div class="p-16 bg-blue h-full max-w-[830px] w-full ml-auto mr-20">
            <h1 class="text-[67px] text-white leading-none mb-7">Our Amenities</h1>
            <p class="text-[30px] font-extralight italic text-white leading-[1.2] mb-14">These amenities at "Supreme"
                aim to
                create an unforgettable luxury experience for every guest.</p>
            <div class="grid grid-cols-2 gap-y-5">

                <div class="grid grid-cols-[auto_1fr] gap-10 items-center">
                    <img class="icon" src="<?php bloginfo('template_url') ?>/assets/SVG/laders.svg" alt="" srcset="">
                    <p class="text-white font-medium text-lg">Swimming Pool</p>
                </div>
                <div class="grid grid-cols-[auto_1fr] gap-10 items-center">
                    <img class="icon" src="<?php bloginfo('template_url') ?>/assets/SVG/swimmer.svg" alt="" srcset="">
                    <p class="text-white font-medium text-lg">Surfing Lessons</p>
                </div>
                <div class="grid grid-cols-[auto_1fr] gap-10 items-center">
                    <img class="icon" src="<?php bloginfo('template_url') ?>/assets/SVG/Spa.svg" alt="" srcset="">
                    <p class="text-white font-medium text-lg">Spa & Massage</p>
                </div>
                <div class="grid grid-cols-[auto_1fr] gap-10 items-center">
                    <img class="icon" src="<?php bloginfo('template_url') ?>/assets/SVG/beach.svg" alt="" srcset="">
                    <p class="text-white font-medium text-lg">Private Beach</p>

                </div>
                <div class="grid grid-cols-[auto_1fr] gap-10 items-center">
                    <img class="icon" src="<?php bloginfo('template_url') ?>/assets/SVG/gym.svg" alt="" srcset="">
                    <p class="text-white font-medium text-lg">Gym & Yoga</p>
                </div>
                <div class="grid grid-cols-[auto_1fr] gap-10 items-center">
                    <img class="icon" src="<?php bloginfo('template_url') ?>/assets/SVG/speaker.svg" alt="" srcset="">
                    <p class="text-white font-medium text-lg">Conference Room</p>
                </div>

                <div class="grid grid-cols-[auto_1fr] gap-10 items-center">
                    <img class="icon" src="<?php bloginfo('template_url') ?>/assets/SVG/boat.svg" alt="" srcset="">
                    <p class="text-white font-medium text-lg">Boat Tours</p>
                </div>
                <div class="grid grid-cols-[auto_1fr] gap-10 items-center">
                    <img class="icon" src="<?php bloginfo('template_url') ?>/assets/SVG/diving.svg" alt="" srcset="">
                    <p class="text-white font-medium text-lg">Diving & Snorling</p>
                </div>
            </div>
        </div>
    </div>
</section><!-- #primary -->

<section id=" rooms-suites-section">

    <main id="main">
        <div class="container grid justify-items-center">
            <p class="text-[35px] font-medium text-xl mb-8">RAISING COMFORT TO THE HIGHEST LEVEL</p>
            <h1 class="text-7xl mb-16">Rooms & Suites</h1>

            <div class="swiper swiper-rooms h-[500px] w-full">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/room1.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/room2.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/room3.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/room1.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/room2.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/room3.jpg" alt="">
                    </div>
                    ...
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>
            <div class="grid grid-cols-3  justify-items-center gap-11">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/room1.jpg" alt="">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/room2.jpg" alt="">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/room3.jpg" alt="">
            </div>
            <button class="button bg-[#C3B085] text-white mx-auto mt-[75px] ">VIEW MORE</button>

        </div>


    </main><!-- #main -->
</section><!-- #primary -->

<section id="restaurant-section" class="h-screen max-h-[980px] relative">
    <!-- Slider main container -->
    <div class="swiper swiper-restaurant w-full h-full">
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="absolute top-0 left-0 w-full h-full z-0 bg-no-repeat bg-cover bg-center"
                    style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/IMG4.jpg');"></div>
                <div
                    class="absolute top-0 left-0 w-full h-full z-[1] bg-gradient-to-r from-black to-transparent opacity-90">
                </div>
                <div class="container h-full grid grid-cols-2 items-center relative z-[2] ">
                    <div class="">
                        <h1 class="text-[73px] text-white leading-none mb-10">Panorama Restaurant</h1>
                        <p class="text-[20px] font-extralight italic text-white leading-[2.2] mb-7">"Supreme" Hotel in
                            Durres,
                            Albania, is a realm of absolute luxury.From the awe-inspiring sea-view rooms to the
                            exquisite dining and
                            top-notch amenities like the infinity pool and spa,
                            every detail exudes opulence. The staff's impeccable service creates an unforgettable
                            experience.
                            If you crave the finest,"Supreme" is your ultimate escape</p>
                        <button class="button bg-[#C3B085] text-white mx-auto">VIEW MENU</button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="absolute top-0 left-0 w-full h-full z-0 bg-no-repeat bg-cover bg-center"
                    style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/IMG4.jpg');"></div>
                <div
                    class="absolute top-0 left-0 w-full h-full z-[1] bg-gradient-to-r from-black to-transparent opacity-90">
                </div>
                <div class="container h-full grid grid-cols-2 items-center relative z-[2] ">
                    <div class="">
                        <h1 class="text-[73px] text-white leading-none mb-10">Supreme Restaurant</h1>
                        <p class="text-[20px] font-extralight italic text-white leading-[2.2] mb-7">"Supreme" Hotel in
                            Durres,
                            Albania, is a realm of absolute luxury.From the awe-inspiring sea-view rooms to the
                            exquisite dining and
                            top-notch amenities like the infinity pool and spa,
                            every detail exudes opulence. The staff's impeccable service creates an unforgettable
                            experience.
                            If you crave the finest,"Supreme" is your ultimate escape</p>
                        <button class="button bg-[#C3B085] text-white mx-auto">VIEW MENU</button>
                    </div>
                </div>
            </div>
        </div>
        ...
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <!-- <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div> -->

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>


</section><!-- #primary-->


<section id="reviews-section" class="h-screen">
    <div class="container h-full grid grid-cols-2 relative">
        <div class="p-16 bg-blue h-full w-full relative z-[2] ">
            <div class="w-[135px] h-2.5 bg-[#C3B085] mb-3"></div>
            <p class="text-[20px] font-medium  text-white pl-8">AT THE HEART OF THE COMMUNITY</p>
            <h1 class="text-[67px] text-white leading-none mb-7">People Say</h1>
            <p class="text-[20px] font-extralight italic text-white leading-[1.2] mb-14">"Supreme" Hotel in Durres,
                Albania, is a realm of absolute luxury. From the awe-inspiring sea-view rooms to the exquisite dining
                and top-notch amenities like the infinity pool and spa, every detail exudes opulence. The staff's
                impeccable service creates an unforgettable experience.
                If you crave the finest,"Supreme" is your ultimate escape</p>
        </div>
        <img class="ml-auto absolute right-0 -translate-y-1/2 top-1/2 z-0"
            src="<?php bloginfo("template_url")?>/assets/images/img6.jpg" alt="">
    </div>

</section><!-- #primary -->

<section id="contact & adress-section" class="h-screen max-h-[980px] relative">
    <main id="main">

        <div class="absolute top-0 left-0 w-full h-full z-[1]"></div>
        <div class="container h-full grid grid-cols-2 items-center relative z-[2] ">
            <div class="">
                <h1 class="text-[73px]  text-black leading-none mb-6 text-center">Visit us</h1>
                <div class="w-[135px] h-[3px] bg-[#C3B085] mb-3 mx-auto" a></div>
                <div class="grid gap-2">
                    <div class="grid gap-5 grid-cols-[auto_1fr] items-center">
                        <i class="fa-solid fa-location-dot" style="color: #a3a3a3;"></i>
                        <p class="text-black font-medium text-base leading-loose">Supreme Hotel & Spa, rruga "Besa",
                            Qerre,
                            2504,
                            Kavaje, Albania</p>
                    </div>
                    <div class="grid gap-5 grid-cols-[auto_1fr] items-center">
                        <i class="fa-solid fa-envelope" style="color: #a3a3a3;"></i>
                        <p class="text-black font-medium text-base leading-loose">info@supreme.com.al</p>
                    </div>
                    <div class="grid gap-5 grid-cols-[auto_1fr] items-center">
                        <i class="fa-solid fa-square-phone" style="color: #a3a3a3;"></i>
                        <p class="text-black font-medium text-base leading-loose ">+355 55 8000 11</p>
                    </div>
                    <div class="grid gap-5 grid-cols-[auto_1fr] items-center">
                        <i class="fa-solid fa-phone" style="color: #a3a3a3;"></i>
                        <p class="text-black font-medium text-base leading-loose">+355 67 40 20 111</p>
                    </div>

                </div>
            </div>
            <div class="map"></div>
    </main><!-- #main -->
</section><!-- #primary-->

<?php
get_footer();