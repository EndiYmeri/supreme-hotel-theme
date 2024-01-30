<?php
/* Template Name: Rooms&Suites template */
get_header();


$title = get_field("slider_title");
$slides_list = get_field("slides_list");
// Check rows exists.
if (have_rows("hero_section")):
    // Loop through rows.
    while (have_rows("hero_section")):
        the_row();
        // Load sub field value.
        $hero_description = get_sub_field("hero_description");
        $hero_image = get_sub_field("hero_image");
        ?>
        <section id="hero-room" class="h-[400px] md:h-[600px] lg:bg-center bg-cover relative"
            style="background-image: url('<?php echo $hero_image; ?>');">
            <div class="absolute top-0 left-0 w-full h-full z-[1] bg-gradient-to-r from-black to-transparent opacity-90">
                <div class="container h-full grid place-content-center z-10">
                    <h1 class="text-white text-5xl md:text-6xl lg:text-8xl text-center mb-10">
                        <?php the_title(""); ?>
                    </h1>
                    <!-- <p class="text-white font-light">
                        <?php echo $hero_description ?>
                    </p> -->
                </div>
        </section>
        <?php
    endwhile;
else:
    // Do something...
endif; ?>

<section class="rooms container">
    <?php
    if ($slides_list) {
        ?>
        <ul class="grid gap-5 grid-cols-2 md:grid-cols-3 ">
            <?php
            foreach ($slides_list as $slide) {
                ?>
                <li x-data="{open: false}" @mouseover="open = true" @mouseout="open = false" class="splide__slide">
                    <a class="py-1 -mt-[2px] text-lg hover:underline" href="<?php echo $slide["slide_link"] ?>">
                        <div class="relative">
                            <?php
                            if ($slide["hover_text"]) {
                                ?>
                                <div x-show="open" x-transition class="py-2 px-4 bg-white absolute w-full  left-0 bottom-0">
                                    <p class="text-sm md:text-base">
                                        <?php echo $slide["hover_text"]; ?>
                                    </p>
                                </div>
                                <?php
                            }
                            ?>
                            <img class="mx-auto" src="<?php echo $slide["slide_image"]; ?>" alt="">
                        </div>
                        <?php echo $slide["slide_title"]; ?>
                    </a>
                </li>
                <?php
            } ?>
        </ul>
        <?php
    }
    ?>
</section>

<?php
get_footer();
?>