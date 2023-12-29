<?php
/* Template Name: Rooms&Suites template */
get_header();
?>
<section id="hero-rooms&Suites " class="h-screen bg-cover relative"
    style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/Rooms&Suites.jpg');">
    <div class="absolute top-0 left-0 w-full h-full z-[1] bg-gradient-to-r from-black to-transparent opacity-90">
        <div class="container h-full grid place-content-center z-10">
            <h1 class="text-white text-5xl md:text-6xl lg:text-8xl text-center mb-10">
                <?php the_title(""); ?>
            </h1>
            <p class="text-white text-center font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Nostrum deserunt
                molestiae et
                laudantium amet.
                Adipisci consequatur suscipit ratione non dolore.</p>
        </div>
</section>
<section id="textinfo-section" class=" bg-white !py-10">
    <div class="container items-center h-full justify-between">
        <div class="justify-items-center">
            <h1 class="text-black text-3xl text-center mb-16">Rooms & Suites</h1>
            <p class="text-black text-xl text-center mb-16">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Dolor reprehenderit quae aperiam accusantium necessitatibus, est qui quasi. Corrupti aliquam eligendi
                sed sint pariatur autem, odio obcaecati voluptatum non modi id aut eius animi aliquid, optio praesentium
                asperiores, ea distinctio quos.</p>

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
                            href="<?php echo esc_url(home_url('/')); ?>standard-double-room/">Superior Double
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
                            href="<?php echo esc_url(home_url('/')); ?>standard-double-room/">Standard Triple
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
                            href="<?php echo esc_url(home_url('/')); ?>standard-double-room/">Superior Triple
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
                            href="<?php echo esc_url(home_url('/')); ?>standard-double-room/">Family Room</a>
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
                            href="<?php echo esc_url(home_url('/')); ?>standard-double-room/">Deluxe Sea View Suite</a>
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