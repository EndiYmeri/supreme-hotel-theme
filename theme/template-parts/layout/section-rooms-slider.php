<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package supreme-hotel-theme
 */

$title = get_field("slider_title");
$slides_list = get_field("slides_list");
?>
<section id="rooms-section" class="lg:min-h-screen bg-white py-10">
    <div class="container">
        <h1 class="text-black text-3xl my-7">
            <?php echo $title ?>
        </h1>
        <div class="splide rooms-splide" role="group" aria-label="Rooms Slider">
            <div class="splide__track">
                <?php
                if ($slides_list) {
                    ?>
                    <ul class="splide__list">
                        <?php
                        foreach ($slides_list as $slide) {
                            ?>
                            <li x-data="{open: false}" @mouseover="open = true" @mouseout="open = false" class="splide__slide">
                                <a class="py-1 -mt-[2px] text-lg hover:underline" href="<?php echo $slide["slide_link"] ?>">
                                    <div class="relative">
                                        <?php
                                        if ($slide["hover_text"]) {
                                            ?>
                                            <div x-show="open" x-transition
                                                class="py-2 px-4 bg-white absolute w-full  left-0 bottom-0">
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