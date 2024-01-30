<?php
/* Template Name: Gallery template */
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
        <section id="hero-room" class="h-[400px] md:h-[600px] bg-cover bg-center relative" <?php
        if ($hero_image) {
            ?>
                style="background-image: url('<?php echo $hero_image; ?>');" <?php
        } else {
            ?> style="background-color: #3E9CBE;"
                <?php
        }
        ?>>
            <div class=" absolute top-0 left-0 w-full h-full z-[1] bg-gradient-to-r from-black to-transparent
            opacity-90">
                <div class="container h-full grid place-content-center z-10">
                    <h1 class="text-white text-5xl md:text-6xl lg:text-8xl text-center mb-10">
                        <?php the_title(""); ?>
                    </h1>
                    <!--                     
                    <p class="text-white font-light">
                        <?php echo $hero_description ?>
                    </p> -->
                </div>
        </section>
        <?php
    endwhile;
else:
    // Do something...
endif;
?>
<main class="container">

    <?php
    if (have_rows("event_section")):
        // Loop through rows.
        while (have_rows("event_section")):
            the_row();
            // Load sub field value.
            $event_title = get_sub_field("event_title");
            $event_description = get_sub_field("event_description");
            $event_description = get_sub_field("event_description");
            $event_slider = get_sub_field("event_slider_shortcode");
            if ($slider) {
                echo do_shortcode($slider);
            }
            ?>
            <section id="<?php echo $event_title; ?>" class="my-7 lg:my-10">
                <h1 class="text-black text-3xl text-center  mb-4 lg:mb-6">
                    <?php echo $event_title; ?>
                </h1>
                <p class="text-black text-xl text-center mb-4 lg:mb-6">
                    <?php echo $event_description; ?>
                </p>
                <?php
                if ($event_slider) {
                    echo do_shortcode($event_slider);
                }
                ?>
            </section>
            <?php
        endwhile;
    else:
        // Do something...
    endif;

    ?>
</main>

<?php

if (get_field("has_slider")) {
    get_template_part('template-parts/layout/section', 'rooms-slider');
}
?>

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