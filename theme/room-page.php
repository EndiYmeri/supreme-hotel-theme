<?php
/* Template Name: Room template */
get_header();
?>

<?php // Check rows exists.
if (have_rows("hero_section")):
    // Loop through rows.
    while (have_rows("hero_section")):
        the_row();
        // Load sub field value.
        $hero_description = get_sub_field("hero_description");
        $hero_image = get_sub_field("hero_image");
        ?>
        <section id="hero-room" class="h-screen bg-cover relative" style="background-image: url('<?php echo $hero_image; ?>');">
            <div class="absolute top-0 left-0 w-full h-full z-[1] bg-gradient-to-r from-black to-transparent opacity-90">
                <div class="container h-full grid place-content-center z-10">
                    <h1 class="text-white text-5xl md:text-6xl lg:text-8xl text-center mb-10">
                        <?php the_title(""); ?>
                    </h1>
                    <p class="text-white font-light">
                        <?php echo $hero_description ?>
                    </p>
                </div>
        </section>
        <?php
    endwhile;
else:
    // Do something...
endif; ?>

<main class="container py-4 ">
    <div class="grid md:grid-cols-[70%_30%] ">
        <div class="relative ">
            <div class="sticky top-[100px]">
                <section id="textinfo-section" class="py-10 bg-white pr-5 border-b-[2px] border-[#E1C678]">
                    <div class="container items-center h-full justify-between">
                        <div class="justify-items-center">
                            <?php // Check rows exists.
                            if (have_rows("room_description")):
                                // Loop through rows.
                                while (have_rows("room_description")):

                                    the_row();
                                    // Load sub field value.
                                    $section_title = get_sub_field("room_description_title");
                                    $section_text = get_sub_field("room_description_content");
                                    ?>
                                    <h1 class="text-black text-3xl text-left mb-16 uppercase">
                                        <?php echo $section_title; ?>
                                    </h1>
                                    <p class="text-black text-xl text-left mb-2">
                                        <?php echo $section_text; ?>
                                    </p>
                                    <?php
                                endwhile;
                            else:
                                // Do something...
                            endif; ?>
                        </div>
                </section>
                <section id="textinfo-section" class="py-10 bg-white pr-5 border-b-[2px] border-[#E1C678]">
                    <div class="container items-center h-full justify-between">
                        <div class="justify-items-center">
                            <?php // Check rows exists.
                            if (have_rows("commodities")):
                                // Loop through rows.
                                while (have_rows("commodities")):
                                    the_row();
                                    // Load sub field value.
                                    $section_title = get_sub_field("commodities_title");
                                    $commodity_list = get_field("commodities")["commodities_list"];

                                    ?>
                                    <h1 class="text-black text-3xl text-left mb-16 uppercase">
                                        <?php echo $section_title; ?>
                                    </h1>
                                    <ul class="grid grid-cols-2">
                                        <?php
                                        foreach ($commodity_list as $commodity) {
                                            $text = $commodity["commodity"]["text"];
                                            $iconURL = $commodity["commodity"]["icon"];
                                            ?>
                                            <li class="text-black text-xl text-left">
                                                <?php echo $text; ?>
                                            </li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                    <?php
                                endwhile;
                            else:
                                // Do something...
                            endif; ?>
                        </div>
                    </div>
                </section>
                <section id="textinfo-section" class="py-10 bg-white pr-5 border-b-[2px] border-[#E1C678]">
                    <div class="container items-center h-full justify-between">
                        <div class="justify-items-center">

                            <?php
                            $rules_title = get_field('rules')["title"];
                            $check_in_title = get_field('rules')["check_in"]["title"];
                            $check_in_desc = get_field('rules')["check_in"]["description"];
                            $check_out_title = get_field('rules')["check_out"]["title"];
                            $check_out_desc = get_field('rules')["check_out"]["description"];
                            ?>
                            <h1 class="text-black text-3xl text-left mb-2 uppercase">
                                <?php echo $rules_title; ?>
                            </h1>
                            <div class="grid max-md:gap-4 md:grid-cols-2">
                                <div>
                                    <h1 class="text-black text-xl font-normal text-left mb-2 uppercase">
                                        <?php echo $check_in_title; ?>
                                    </h1>
                                    <p>
                                        <?php echo $check_in_desc; ?>
                                    </p>
                                </div>
                                <div>
                                    <h1 class="text-black text-xl font-normal text-left mb-2 uppercase">
                                        <?php echo $check_out_title; ?>
                                    </h1>
                                    <p>
                                        <?php echo $check_out_desc; ?>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <section id="textinfo-section" class="py-10 bg-white pr-5 border-b-[2px] border-[#E1C678]">
                    <div class="container items-center h-full justify-between">
                        <div class="justify-items-center">
                            <h1 class="text-black text-3xl text-left mb-16 uppercase">
                                Reviews
                            </h1>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="grid gap-4 items-center max-w-[600px] ">
            <?php
            $images = get_field("images");
            if ($images): ?>
                <?php foreach ($images as $image): ?>
                    <div>
                        <img class="img" src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($image); ?>">
                    </div>

                <?php endforeach; ?>
            <?php endif;
            ?>

        </div>
    </div>
</main>
<section id="rooms-section" class="bg-white py-10">
    <div class="container">
        <h1 class="text-black text-3xl my-7">
            <?php the_title(""); ?>
        </h1>
        <div class="splide rooms-splide" role="group" aria-label="Rooms Slider">
            <div class="splide__track">
                <ul class="splide__list">
                    <li x-data="{open: false}" @mouseover="open = true" @mouseout="open = false" class="splide__slide">
                        <div class="relative">
                            <div x-show="open" x-transition class="py-2 px-4 bg-white absolute w-full  left-0 bottom-0">
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
                            <div x-show="open" x-transition class="py-2 px-4 bg-white absolute w-full  left-0 bottom-0">
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
                            <div x-show="open" x-transition class="py-2 px-4 bg-white absolute w-full  left-0 bottom-0">
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
                                class="py-2 px-4 bg-white absolute w-full  left-0 bottom-0">
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
                            <div x-show="open" x-transition class="py-2 px-4 bg-white absolute w-full  left-0 bottom-0">
                                <p class="text-sm md:text-base">Max 2 guests</p>
                            </div>
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/room2.jpg" alt="">
                        </div>
                        <a class="py-1 -mt-[2px] text-lg hover:underline"
                            href="<?php echo esc_url(home_url('/')); ?>standard-double-room/">Family Room</a>
                    </li>
                    <li x-data="{open: false}" @mouseover="open = true" @mouseout="open = false" class="splide__slide">
                        <div class="relative">
                            <div x-show="open" x-transition class="py-2 px-4 bg-white absolute w-full  left-0 bottom-0">
                                <p class="text-sm md:text-base">Max 2 guests</p>
                            </div>
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/room3.jpg" alt="">
                        </div>
                        <a class="py-1 -mt-[2px] text-lg hover:underline"
                            href="<?php echo esc_url(home_url('/')); ?>/standard-double-room/">Deluxe Sea View Suite</a>
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