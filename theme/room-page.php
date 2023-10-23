<?php
/* Template Name: Room template */
get_header();
?>
<section id="hero-room" class="h-screen bg-cover"
    style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/Suite1.jpg');">
    <div class="container h-full grid place-content-center">
        <h1 class="text-white text-8xl text-center mb-10">
            <?php the_title(""); ?>
        </h1>
        <p class="text-white font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum deserunt
            molestiae etlaudantium amet.Adipisci consequatur suscipit ratione non dolore.</p>
    </div>
</section>
<section id="textinfo-section" class=" bg-white">
    <div class="container items-center h-full justify-between">
        <div class="justify-items-center">
            <h1 class="text-black text-3xl text-center mb-16"><?php the_title(""); ?></h1>
            <p class="text-black text-xl text-center mb-16">YOU WILL BE FASCINATED BY THE SIMPLICITY YET LUXURIOUS
                CONTEMPORARY DESIGN AND BY THE WARM, RELAXING ATMOSPHERE GENERATED INSIDE THE ROOM. WITH A BEAUTIFULLY
                DECORATED INTERIOR,PREMIUM BEDDING AND LUXURY TOILETRIES AND AMENITIES,IT PROVIDES A HEAVEN OF
                COMFORT AND […]</p>
        </div>
    </div>
</section>
<section id="rooms-section" class="h-screen bg-white py-10">
    <div class="container">
        <h1 class="text-black text-3xl my-7"><?php the_title(""); ?></h>
            <div class="grid grid-cols-4 my-7">
                <div>
                    <img class="img" src="<?php bloginfo('template_url'); ?>/assets/images/room1.jpg" alt="">
                    <!-- <h1 class="text-black text-[20px] text-center my-7">Twin / Double Rooms</h1> -->
                </div>
                <div>
                    <img class="img" src="<?php bloginfo('template_url'); ?>/assets/images/room2.jpg" alt="">
                    <!-- <h1 class="text-black text-[20px] text-center my-7">Double Room with Balcony</h1> -->
                </div>
                <div>
                    <img class="img" src="<?php bloginfo('template_url'); ?>/assets/images/room3.jpg" alt="">
                    <!-- <h1 class="text-black text-[20px] text-center my-7">Double Room with Balcony Sea veiw</h1> -->
                </div>
                <div>
                    <img class="img" src="<?php bloginfo('template_url'); ?>/assets/images/Suite3.jpg" alt="">
                    <!-- <h1 class="text-black text-[20px] text-center my-7">Double Room with Tarrace Sea veiw</h1> -->
                </div>
            </div>
    </div>

    <?php
get_footer();
?>