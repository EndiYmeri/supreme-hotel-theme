<?php
/* Template Name: Rooms template */
get_header();
?>
<section id="hero-rooms" class="h-screen bg-cover relative"
    style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/Suite1.jpg');">
    <div class="absolute top-0 left-0 w-full h-full z-[1] bg-gradient-to-r from-black to-transparent opacity-90">
        <div class="container h-full grid place-content-center z-10">
            <h1 class="text-white text-8xl text-center mb-10">
                <?php the_title(""); ?>
            </h1>
            <p class="text-white font-light text-center">Modern Luxury Signature</p>
        </div>
</section>
<section id="textinfo-section" class=" bg-white">
    <div class="container items-center h-full justify-between">
        <div class="justify-items-center">
            <h1 class="text-black text-3xl text-center mb-16">
                <?php the_title(""); ?>
            </h1>
            <p class="text-black text-xl text-center mb-16">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Excepturi blanditiis doloribus ut, amet similique vel voluptates numquam! Molestias velit, reprehenderit
                animi delectus modi consequatur dignissimos a fuga veniam aspernatur eius odit consectetur molestiae
                pariatur et recusandae officiis quas quidem alias necessitatibus est magnam autem rem? Harum assumenda
                nam illum iste?</p>

        </div>
    </div>
</section>
<section id="rooms-section" class="lg:h-screen bg-white py-10">
    <div class="container">
        <h1 class="text-black text-3xl my-7">
            <?php the_title(""); ?>
        </h1>
        <div class="splide rooms-splide" role="group" aria-label="Rooms Slider">
            <div class="splide__track">
                <ul class="splide__list">
                    <li x-data="{open: false}" @mouseover="open = true" @mouseout="open = false" class="splide__slide">
                        <div class="relative">
                            <div x-show="open" x-transition
                                class=" py-1 px-2 md:py-2 md:px-4 bg-white absolute w-full  left-0 bottom-0">
                                <p class="text-sm md:text-base">Max 2 guests</p>
                            </div>
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/room1.jpg" alt="">
                        </div>
                        <a class="py-1 -mt-[2px] text-lg hover:underline"
                            href="<?php echo esc_url(home_url('/')); ?>standard-double-room/">Standard Double
                            Room</a>
                    </li>
                    <li x-data="{open: false}" @mouseover="open = true" @mouseout="open = false" class="splide__slide">
                        <div class="relative">
                            <div x-show="open" x-transition
                                class=" py-1 px-2 md:py-2 md:px-4 bg-white absolute w-full  left-0 bottom-0">
                                <p class="text-sm md:text-base">Max 2 guests</p>
                            </div>
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/room2.jpg" alt="">
                        </div>
                        <a class="py-1 -mt-[2px] text-lg hover:underline"
                            href="<?php echo esc_url(home_url('/')); ?>superior-double-room/">Superior Double
                            Room</a>
                    </li>
                    <li x-data="{open: false}" @mouseover="open = true" @mouseout="open = false" class="splide__slide">
                        <div class="relative">
                            <div x-show="open" x-transition
                                class=" py-1 px-2 md:py-2 md:px-4 bg-white absolute w-full  left-0 bottom-0">
                                <p class="text-sm md:text-base">Max 2 guests</p>
                            </div>
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/room3.jpg" alt="">
                        </div>
                        <a class="py-1 -mt-[2px] text-lg hover:underline"
                            href="<?php echo esc_url(home_url('/')); ?>standard-triple-room/">Standard Triple
                            Room</a>
                    </li>
                    <li x-data="{open: false}" @mouseover="open = true" @mouseout="open = false" class="splide__slide">
                        <div class="relative">
                            <div x-show="open" @mouseout="open = false" x-transition
                                class=" py-1 px-2 md:py-2 md:px-4 bg-white absolute w-full  left-0 bottom-0">
                                <p class="text-sm md:text-base">Max 2 guests</p>
                            </div>
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/room1.jpg" alt="">
                        </div>
                        <a class="py-1 -mt-[2px] text-lg hover:underline"
                            href="<?php echo esc_url(home_url('/')); ?>superior-triple-room/">Superior Triple
                            Room</a>
                    </li>
                    <li x-data="{open: false}" @mouseover="open = true" @mouseout="open = false" class="splide__slide">
                        <div class="relative">
                            <div x-show="open" x-transition
                                class=" py-1 px-2 md:py-2 md:px-4 bg-white absolute w-full  left-0 bottom-0">
                                <p class="text-sm md:text-base">Max 2 guests</p>
                            </div>
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/room2.jpg" alt="">
                        </div>
                        <a class="py-1 -mt-[2px] text-lg hover:underline"
                            href="<?php echo esc_url(home_url('/')); ?>family-room/">Family Room</a>
                    </li>
                    <li x-data="{open: false}" @mouseover="open = true" @mouseout="open = false" class="splide__slide">
                        <div class="relative">
                            <div x-show="open" x-transition
                                class=" py-1 px-2 md:py-2 md:px-4 bg-white absolute w-full  left-0 bottom-0">
                                <p class="text-sm md:text-base">Max 2 guests</p>
                            </div>
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/room3.jpg" alt="">
                        </div>
                        <a class="py-1 -mt-[2px] text-lg hover:underline"
                            href="<?php echo esc_url(home_url('/')); ?>deluxe-sea-view/">Deluxe Sea View Suite</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<script>
    new Splide('.rooms-splide', {
        perPage: 3,
        breakpoints: {
            640: {
                perPage: 2,
            },
            767: {
                perPage: 2,
            },
        },
        pagination: false,
        gap: 20,
        rewind: true

    }).mount();
</script>
<?php
get_footer();
?>