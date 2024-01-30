<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package supreme-hotel-theme
 */

get_header();

// Check rows exists.
if (have_rows("hero_section")):
    // Loop through rows.
    while (have_rows("hero_section")):
        the_row();
        // Load sub field value.
        $hero_logo = get_sub_field('hero_logo');
        $hero_background = get_sub_field("hero_background");
        $video_image = get_sub_field('video_image');
        $hero_videos = get_sub_field('hero_videos');

        if ($video_image === "image") {
            ?>
            <section id="hero" class="h-screen bg-cover" style="background-image: url('<?php echo $hero_background; ?>');">
                <div class="grid h-screen place-content-center">
                    <img class="opacity-70" width="150px" src="<?php echo $hero_logo; ?>" alt="">
                </div>
            </section>
            <?php
        }
        if ($video_image === "video") {
            ?>
            <section id="hero" class="h-screen relative">
                <video class="md:hidden absolute left-0 top-0 w-full h-screen"
                    poster="<?php echo $hero_videos["placeholder_image_mobile"] ?>" muted preload="auto" autoplay Loop>
                    <source src="<?php echo $hero_videos["mobile_video"] ?>" type="video/webm" />
                    <source src="<?php echo $hero_videos["mobile_video"] ?>" type="video/mp4" />
                </video>
                <video class="max-md:hidden absolute left-0 top-0 w-full h-screen"
                    poster="<?php echo $hero_videos["placeholder_image_desktop"] ?>" muted preload="auto" autoplay Loop>
                    <source src="<?php echo $hero_videos["desktop_video"] ?>" type="video/webm" />
                    <source src="<?php echo $hero_videos["desktop_video"] ?>" type="video/mp4" />
                </video>
                <div class="grid place-content-center relative h-screen">
                    <img width="150px" class="opacity-70" src="<?php echo $hero_logo; ?>" alt="">
                </div>
            </section>
            <?php
        }
    endwhile;
else:
    // Do something...
endif; ?>

<section class="!py-0">
    <!-- Place this div on your page where you want the widget to show -->
    <div id='bookWidget-75797-211214-0-1698929570'> </div>
    <!-- The following will initialize the widget in the above div -->
</section>
<script>
    jQuery(document).ready(function () {
        jQuery('#bookWidget-75797-211214-0-1698929570').bookWidget({
            propid: 211214,
            alignment: 'center',
            formAction: 'https://beds24.com/booking.php',
            formTarget: '_blank',
            weekFirstDay: 1,
            widgetLang: 'en',
            widgetType: 'BookingStrip'
        });
    });
</script>
<?php
// Check rows exists.
if (have_rows("welcome_section")):
    // Loop through rows.
    while (have_rows("welcome_section")):
        the_row();
        // Load sub field value.
        $title = get_sub_field("title");
        $description = get_sub_field("description");
        $image = get_sub_field("image");
        $button = get_sub_field("hero_button");
        ?>
        <section id="welcome-section">
            <main id="main">
                <div class="container grid  lg:gap-14 lg:grid-cols-2 items-center">
                    <div class="relative max-lg:mt-4 max-lg:order-2">
                        <img class="img max-lg:mx-auto" src="<?php echo $image; ?>" alt="">
                    </div>
                    <div class="grid gap-4 lg:justify-items-start content-baseline max-lg:order-1">
                        <h1 class="text-5xl md:text-6xl max-lg:text-center xl:text-7xl">
                            <?php echo $title; ?>
                        </h1>
                        <p class=" text-[23px] md:text-[30px] xl:text-[35px]  ">
                            <?php echo $description; ?>
                        </p>
                        <button class="button  gold text-white ">
                            <a href="<?php echo $button["button_url"]; ?>">
                                <?php echo $button["button_text"]; ?>
                            </a>
                        </button>
                    </div>
                </div>
            </main><!-- #main -->
        </section><!-- #primary -->
        <?php
    endwhile;
else:
    // Do something...
endif; ?>
<?php
// Check rows exists.
if (have_rows("ameneties_section")):
    // Loop through rows.
    while (have_rows("ameneties_section")):
        the_row();
        // Load sub field value.
        $title = get_sub_field("title");
        $description = get_sub_field("description");
        $background = get_sub_field("background");
        $ameneties = get_sub_field("ameneties");
        ?>
        <section id="ameneties-section" class="lg:h-screen lg:max-h-[980px] bg-no-repeat bg-cover"
            style="background-image: url('<?php echo $background; ?>">
            <div class="container h-full">
                <div class="p-4 py-6 md:p-10 lg:p-16 bg-[#3E9CBE] h-full max-w-[830px] w-full ml-auto mr-20">
                    <h1 class=" text-4xl md:text-6xl lg:text-[67px] text-white leading-none mb-7">
                        <?php echo $title; ?>
                    </h1>
                    <p class="text-[21px] md:text-[30px] font-extralight italic text-white leading-[1.2] mb-14">
                        <?php echo $description; ?>
                    </p>
                    <?php
                    if (ameneties) {
                        ?>
                        <div class="grid grid-cols-2 gap-3 md:gap-4  lg:gap-x-0  lg:gap-y-5">
                            <?php
                            foreach ($ameneties as $amenity) {
                                ?>
                                <div class="grid grid-cols-[auto_1fr] gap-3 md:gap-8 lg:gap-10 items-center">
                                    <img class="icon" src="<?php echo $amenity["amenity_icon"]; ?> " alt="" srcset="">
                                    <p class="text-white font-medium text-sm md:text-lg">
                                        <?php echo $amenity["amenity_title"]; ?>
                                    </p>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </section><!-- #primary -->
        <?php
    endwhile;
else:
    // Do something...
endif;

if (get_field("has_slider")) {
    get_template_part('template-parts/layout/section', 'rooms-slider');
}
if (have_rows("restaurant_section")):
    // Loop through rows.
    while (have_rows("restaurant_section")):
        the_row();
        // Load sub field value.
        $title = get_sub_field("title");
        $description = get_sub_field("description");
        $background = get_sub_field("background");
        $button = get_sub_field("button");
        ?>
        <section id="restaurant-section" class="h-screen max-h-[980px] relative">
            <div class="absolute top-0 left-0 w-full h-full z-0 bg-no-repeat bg-cover bg-center"
                style="background-image: url('<?php echo $background; ?>"></div>
            <div class="absolute top-0 left-0 w-full h-full z-[1] bg-gradient-to-r from-black to-transparent opacity-90">
            </div>
            <div class="container h-full grid  lg:grid-cols-2 items-center relative z-[2] ">
                <div class="">
                    <h1 class=" text-[40px] md:text-[73px] text-white leading-none mb-10">
                        <?php echo $title; ?>
                    </h1>
                    <p class="text-[20px] font-extralight italic text-white leading-snug md:leading-[2.2] mb-7">
                        <?php echo $description; ?>
                    </p>
                    <button class="button gold  text-white mx-auto">
                        <a href="<?php echo $button["button_url"]; ?>">
                            <?php echo $button["button_text"]; ?>
                        </a>
                    </button>
                </div>
            </div>
        </section>

        <?php
    endwhile;
else:
    // Do something...
endif; ?>


<?php
$title = get_field("attractions_title");
$attractions_list = get_field("attractions_list");
if ($title && $attractions_list):
    ?>
    <section id="attractions-section" class="lg:min-h-screen bg-white py-10">
        <div class="container">
            <h1 class="text-black text-3xl my-7">
                <?php echo $title ?>
            </h1>
            <div class="splide attractions-splide" role="group" aria-label="Rooms Slider">
                <div class="splide__track">
                    <?php
                    if ($attractions_list) {
                        ?>
                        <ul class="splide__list">
                            <?php
                            foreach ($attractions_list as $slide) {
                                ?>
                                <li class="splide__slide">
                                    <div class="relative">
                                        <img class="mx-auto w-full" src="<?php echo $slide["attraction_image"]; ?>" alt="">
                                    </div>
                                    <h2 class="text-2xl font-semibold">
                                        <?php echo $slide["attraction_title"]; ?>
                                    </h2>
                                    <p>
                                        <?php echo $slide["description_text"] ?>
                                    </p>
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
        new Splide('.attractions-splide', {
            perPage: 3,
            breakpoints: {
                640: {
                    perPage: 1
                },
                767: {
                    gap: "60px",

                },
                1024: {
                    gap: "100px",

                },
            },
            arrows: false,
            pagination: true,
            gap: "150px",
            rewind: true

        }).mount();
    </script>
    <?php
    // Do something...
endif; ?>

<section id="reviews-section" class="lg:h-screen">
    <div class="container h-full grid lg:grid-cols-2 relative">
        <div class="p-10 lg:p-16 bg-[#3E9CBE] h-full w-full grid content-center relative z-[2] ">
            <div class=" w-[135px] h-2.5 bg-[#C3B085] mb-3"></div>

            <h1 class="text-[48px] md:text-[55px] lg:text-[67px] text-white leading-none mt-2 mb-7">People Say</h1>
            <p class="text-[20px] font-extralight italic text-white leading-[1.2] mb-14">Supreme Hotel,
                Albania, is a realm of absolute luxury. From the awe-inspiring sea-view rooms to the exquisite dining
                and top-notch amenities like the infinity pool and spa, every detail exudes opulence. The staff's
                impeccable service creates an unforgettable experience.
                If you crave the finest,"Supreme" is your ultimate escape</p>
            <img class="lg:hidden" src="<?php bloginfo("template_url") ?>/assets/images/img6.jpg" alt="">
        </div>
        <img class="ml-auto absolute right-0 -translate-y-1/2 top-1/2 z-0"
            src="<?php bloginfo("template_url") ?>/assets/images/img6.jpg" alt="">
    </div>

</section><!-- #primary -->

<section id="contact & adress-section" class="lg:h-screen lg:max-h-[980px] relative max-lg:!pt-0">
    <div class="container h-full grid lg:grid-cols-2 items-center relative z-[2] ">
        <div class="">
            <h1 class=" text-[55px] md:text-[65px] lg:text-[73px]  text-black leading-none mb-6 text-center">Visit us
            </h1>
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
        <div id="map" class="h-[500px] w-full lg:max-h-[850px] lg:h-full"></div>

        <!-- prettier-ignore -->
        <script>
            (g => { var h, a, k, p = "The Google Maps JavaScript API", c = "google", l = "importLibrary", q = "__ib__", m = document, b = window; b = b[c] || (b[c] = {}); var d = b.maps || (b.maps = {}), r = new Set, e = new URLSearchParams, u = () => h || (h = new Promise(async (f, n) => { await (a = m.createElement("script")); e.set("libraries", [...r] + ""); for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]); e.set("callback", c + ".maps." + q); a.src = `https://maps.${c}apis.com/maps/api/js?` + e; d[q] = f; a.onerror = () => h = n(Error(p + " could not load.")); a.nonce = m.querySelector("script[nonce]")?.nonce || ""; m.head.append(a) })); d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n)) })
                ({ key: "AIzaSyAqbsGOP8cnsLWVgr3kGAd6Us4vyVdvr2E", v: "beta" });
        </script>

        <script>
            // Initialize and add the map
            let map;
            async function initMap() {
                // The location of Supreme Hotel Albania

                const position = { lat: 41.219313, lng: 19.506437 };
                // Request needed libraries.
                //@ts-ignore
                const { Map } = await google.maps.importLibrary("maps");
                const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");

                // The map, centered at Supreme Hotel Albania
                map = new Map(document.getElementById("map"), {
                    zoom: 16,
                    center: position,
                    mapId: "Supreme Hotel Map",

                });

                // The marker, positioned at Supreme Hotel Albania
                const marker = new AdvancedMarkerElement({
                    map: map,
                    position: position,
                    title: "Supreme Hotel",
                });
            }

            initMap();

        </script>

</section><!-- #primary-->

<?php
get_footer();