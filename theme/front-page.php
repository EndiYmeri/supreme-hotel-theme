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
<section id="hero" class="h-screen bg-cover pt-28"
    style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/hero-image.jpg');">
    <div class="container grid  lg:grid-cols-2  items-center h-full justify-between">
        <div class="grid gap-2 justify-items-start ">
            <h1 class="text-white text-[60px] sm:text-[80px]  md:text-[110px]  lg:text-[164px]">
                Hello
            </h1>
            <p class="text-sm font-normal leading-tight md:text-xl text-white md:font-semibold">
                "Supreme" is a luxury hotel in Durres, Albania, offering an exquisite coastal retreat. With stunning sea
                views, elegant suites, and top-notch amenities including a spa and infinity pool, it's a haven of
                opulence. Experience impeccable service, gourmet dining, and a touch of Albanian charm at this lavish
                getaway.
            </p>
            <button class="button max-lg:w-full">Rooms & Suites</button>
        </div>
        <!-- <div class="grid hidden  grid-cols-2 gap-7 lg:grid-cols-1 w-full justify-items-center lg:justify-items-end lg:overflow-y-scroll">
            <img class="img" src="<?php bloginfo('template_url'); ?>/assets/images/room.jpg" alt="">
            <img class="img" src="<?php bloginfo('template_url'); ?>/assets/images/outside.jpg" alt="">
            <img class="img" src="<?php bloginfo('template_url'); ?>/assets/images/drone-view.jpg" alt="">
            <img class="img lg:hidden" src="<?php bloginfo('template_url'); ?>/assets/images/shrimps.jpg" alt="">
        </div> -->
    </div>
</section>
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

<section id="welcome-section">
    <main id="main">
        <div class="container grid  lg:gap-3 lg:grid-cols-2">
            <div class="relative max-lg:mt-4 max-lg:order-2">
                <img class="img max-lg:mx-auto" src="<?php bloginfo('template_url'); ?>/assets/images/chairs.jpg"
                    alt="">
                <img class="img max-lg:hidden absolute -bottom-11 left-40"
                    src="<?php bloginfo('template_url'); ?>/assets/images/staff.jpg" alt="">
            </div>
            <div class="grid gap-4 lg:justify-items-end content-baseline max-lg:order-1">
                <h1 class="text-5xl md:text-6xl max-lg:text-center xl:text-7xl">Welcome to Supreme Hotel</h1>
                <img class="img lg:hidden" src="<?php bloginfo('template_url'); ?>/assets/images/staff.jpg" alt="">
                <p class=" text-[23px] md:text-[30px] xl:text-[35px]  ">"Welcome to Supreme, Durres' epitome of luxury.
                    Your extraordinary stay begins
                    now, where stunning views, elegant suites, and impeccable service await. Enjoy every moment of
                    indulgence."</p>
                <button class="button  gold text-white ml-auto">READ MORE</button>

            </div>
        </div>


    </main><!-- #main -->
</section><!-- #primary -->

<section id="ameneties-section" class="lg:h-screen lg:max-h-[980px] bg-no-repeat bg-cover"
    style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/beach-view.jpg');">
    <div class="container h-full">
        <div class="p-4 py-6 md:p-10 lg:p-16 bg-[#480634] h-full max-w-[830px] w-full ml-auto mr-20">
            <h1 class=" text-4xl md:text-6xl lg:text-[67px] text-white leading-none mb-7">Our Amenities</h1>
            <p class="text-[21px] md:text-[30px] font-extralight italic text-white leading-[1.2] mb-14">These amenities
                at "Supreme"
                aim to
                create an unforgettable luxury experience for every guest.</p>
            <div class="grid grid-cols-2 gap-3 md:gap-4  lg:gap-x-0  lg:gap-y-5">
                <div class="grid grid-cols-[auto_1fr] gap-3 md:gap-8 lg:gap-10 items-center">
                    <img class="icon" src="<?php bloginfo('template_url') ?>/assets/SVG/laders.svg" alt="" srcset="">
                    <p class="text-white font-medium text-sm md:text-lg">Swimming Pool</p>
                </div>
                <div class="grid grid-cols-[auto_1fr] gap-3 md:gap-8 lg:gap-10 items-center">
                    <img class="icon" src="<?php bloginfo('template_url') ?>/assets/SVG/swimmer.svg" alt="" srcset="">
                    <p class="text-white font-medium text-sm md:text-lg">Surfing Lessons</p>
                </div>
                <div class="grid grid-cols-[auto_1fr] gap-3 md:gap-8 lg:gap-10 items-center">
                    <img class="icon" src="<?php bloginfo('template_url') ?>/assets/SVG/Spa.svg" alt="" srcset="">
                    <p class="text-white font-medium text-sm md:text-lg">Spa & Massage</p>
                </div>
                <div class="grid grid-cols-[auto_1fr] gap-3 md:gap-8 lg:gap-10 items-center">
                    <img class="icon" src="<?php bloginfo('template_url') ?>/assets/SVG/beach.svg" alt="" srcset="">
                    <p class="text-white font-medium text-sm md:text-lg">Private Beach</p>

                </div>
                <div class="grid grid-cols-[auto_1fr] gap-3 md:gap-8 lg:gap-10 items-center">
                    <img class="icon" src="<?php bloginfo('template_url') ?>/assets/SVG/gym.svg" alt="" srcset="">
                    <p class="text-white font-medium text-sm md:text-lg">Gym & Yoga</p>
                </div>
                <div class="grid grid-cols-[auto_1fr] gap-3 md:gap-8 lg:gap-10 items-center">
                    <img class="icon" src="<?php bloginfo('template_url') ?>/assets/SVG/speaker.svg" alt="" srcset="">
                    <p class="text-white font-medium text-sm md:text-lg">Conference Room</p>
                </div>

                <div class="grid grid-cols-[auto_1fr] gap-3 md:gap-8 lg:gap-10 items-center">
                    <img class="icon" src="<?php bloginfo('template_url') ?>/assets/SVG/boat.svg" alt="" srcset="">
                    <p class="text-white font-medium text-sm md:text-lg">Boat Tours</p>
                </div>
                <div class="grid grid-cols-[auto_1fr] gap-3 md:gap-8 lg:gap-10 items-center">
                    <img class="icon" src="<?php bloginfo('template_url') ?>/assets/SVG/diving.svg" alt="" srcset="">
                    <p class="text-white font-medium text-sm md:text-lg">Diving & Snorling</p>
                </div>
            </div>
        </div>

    </div>
</section><!-- #primary -->

<section id="rooms-section" class="lg:h-screen bg-white py-10">
    <div class="container">
        <h1 class="text-black text-3xl my-7">Our Rooms</h1>
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

<section id="restaurant-section" class="h-screen max-h-[980px] relative">

    <div class="absolute top-0 left-0 w-full h-full z-0 bg-no-repeat bg-cover bg-center"
        style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/IMG4.jpg');"></div>
    <div class="absolute top-0 left-0 w-full h-full z-[1] bg-gradient-to-r from-black to-transparent opacity-90">
    </div>
    <div class="container h-full grid  lg:grid-cols-2 items-center relative z-[2] ">
        <div class="">
            <h1 class=" text-[40px] md:text-[73px] text-white leading-none mb-10">Panorama Restaurant</h1>
            <p class="text-[20px] font-extralight italic text-white leading-snug md:leading-[2.2] mb-7">"Supreme" Hotel
                in
                Durres,
                Albania, is a realm of absolute luxury.From the awe-inspiring sea-view rooms to the
                exquisite dining and
                top-notch amenities like the infinity pool and spa,
                every detail exudes opulence. The staff's impeccable service creates an unforgettable
                experience.
                If you crave the finest,"Supreme" is your ultimate escape</p>
            <button class="button gold  text-white mx-auto">VIEW MENU</button>
        </div>
    </div>
</section><!-- #primary-->


<section id="reviews-section" class="lg:h-screen">
    <div class="container h-full grid lg:grid-cols-2 relative">
        <div class="p-10 lg:p-16 bg-[#480634] h-full w-full grid content-center relative z-[2] ">
            <div class=" w-[135px] h-2.5 bg-[#C3B085] mb-3"></div>
            <p class="text-base md:text-[20px] font-medium  text-white pl-8">AT THE HEART OF THE COMMUNITY</p>
            <h1 class="text-[48px] md:text-[55px] lg:text-[67px] text-white leading-none mt-2 mb-7">People Say</h1>
            <p class="text-[20px] font-extralight italic text-white leading-[1.2] mb-14">"Supreme" Hotel in Durres,
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