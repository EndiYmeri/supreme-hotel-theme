<?php
/* Template Name: Contact Page template */

get_header();
?>
<section id="hero-contact" class="h-screen bg-cover bg-center relative"
    style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/IMG4.jpg');">
    <div class="absolute top-0 left-0 w-full h-full z-[1] bg-gradient-to-r from-black to-transparent opacity-90">
        <div class="container h-full grid place-content-center z-10">
            <h1 class="text-white text-5xl md:text-6xl lg:text-8xl text-center mb-10">
                <?php the_title(""); ?>
            </h1>

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
                ({ key: "", v: "beta" });
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
