<?php
/* Template Name: Rooms&Suites template */
get_header();
?>
<section id="hero-rooms&Suites " class="h-screen bg-cover"
    style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/Rooms&Suites.jpg');">
    <div class="container h-full grid place-content-center">
        <h1 class="text-white text-8xl text-center mb-10">
            <?php the_title(""); ?>
        </h1>
        <p class="text-white font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum deserunt
            molestiae et
            laudantium amet.
            Adipisci consequatur suscipit ratione non dolore.</p>
    </div>
</section>
<section id="textinfo-section" class=" bg-white">
    <div class="container items-center h-full justify-between">
        <div class="justify-items-center">
            <h1 class="text-black text-3xl text-center mb-16">Rooms & Suites</h1>
            <p class="text-black text-xl text-center mb-16">Dhomat jane 1+1,2+1 dhe 3+1.Por kemi dhe suitat me pamje
                nga
                te gjitha anet</p>

        </div>
    </div>
</section>
<section id="rooms-section" class="h-screen bg-white py-10">
    <div class="container">
        <h1 class="text-black text-3xl my-7">Rooms & Suites</h>
            <div class="grid grid-cols-4 my-7">
                <div>
                    <a href="<?php echo esc_url( home_url( '/double-rooms' ) ); ?>">
                        <img class="img" src="<?php bloginfo('template_url'); ?>/assets/images/room1.jpg" alt="">
                        <h1 class="text-black text-[20px] text-center my-7">Double Rooms</h1>
                    </a>
                </div>
                <div>
                    <a href="<?php echo esc_url( home_url( '/triple-rooms' ) ); ?>">
                        <img class="img" src="<?php bloginfo('template_url'); ?>/assets/images/room2.jpg" alt="">
                        <h1 class="text-black text-[20px] text-center my-7">Triple Rooms</h1>
                    </a>
                </div>
                <div>
                    <img class="img" src="<?php bloginfo('template_url'); ?>/assets/images/room3.jpg" alt="">
                    <h1 class="text-black text-[20px] text-center my-7">Family Rooms</h1>
                </div>
                <div>
                    <img class="img" src="<?php bloginfo('template_url'); ?>/assets/images/Suite3.jpg" alt="">
                    <h1 class="text-black text-[20px] text-center my-7">Suites</h1>
                </div>
            </div>
    </div>

    <?php
get_footer();
?>