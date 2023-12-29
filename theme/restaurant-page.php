<?php
/* Template Name: Restaurant Page template */
get_header();
?>
<section id="hero-restaurant" class="h-screen bg-cover bg-center relative"
    style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/IMG4.jpg');">
    <div class="absolute top-0 left-0 w-full h-full z-[1] bg-gradient-to-r from-black to-transparent opacity-90">
    <div class="container h-full grid place-content-center z-10">
        <h1 class="text-white text-5xl md:text-6xl lg:text-8xl text-center mb-10">
            <?php the_title(""); ?>
        </h1>
        <p class="text-white text-center font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum deserunt
            molestiae et
            laudantium amet.
            Adipisci consequatur suscipit ratione non dolore.</p>
    </div>
</section>
<section id="textinfo-section" class="bg-white !py-0 overflow-hidden">
    <div class="container items-center h-full grid lg:grid-cols-2 relative">
            <div class="grid gap-4 py-24 lg:pr-5">
                <h1 class="text-black text-3xl text-center ">Our Staff</h1>
                <p class="text-black text-xl text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor reprehenderit quae aperiam accusantium necessitatibus, est qui quasi. Corrupti aliquam eligendi sed sint pariatur autem, odio obcaecati voluptatum non modi id aut eius animi aliquid, optio praesentium asperiores, ea distinctio quos.</p>
                <img class="object-contain h-200px" src="<?php bloginfo('template_url'); ?>/assets/images/staff.jpg" alt="">
            </div>
            <div class="max-lg:hidden absolute left-1/2 top-0 h-full w-full w-1/2">
                <img class="w-full h-full object-cover" src="<?php bloginfo('template_url'); ?>/assets/images/img5.jpg" alt="" srcset="">
            </div>
    </div>
    <div class="lg:hidden">
                <img class="w-full h-full object-cover" src="<?php bloginfo('template_url'); ?>/assets/images/img5.jpg" alt="" srcset="">
    </div>
</section>
<section id="textinfo-section" class=" bg-white !py-10">
    <div class="container items-center h-full justify-between">
        <div class="justify-items-center">
            <h1 class="text-black text-3xl text-center mb-16">Our Chefs</h1>
            <p class="text-black text-xl text-center mb-16 max-w-[900px] mx-auto">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor reprehenderit quae aperiam accusantium necessitatibus, est qui quasi. Corrupti aliquam eligendi sed sint pariatur autem, odio obcaecati voluptatum non modi id aut eius animi aliquid, optio praesentium asperiores, ea distinctio quos.</p>
            <div class="grid md:grid-cols-2 gap-y-4">
                <h1 class="md:hidden text-center md:text-right font-semibold text-black text-3xl ">
                        Chef Miklovan Zeqo
                    </h1>
                <img src="<?php bloginfo('template_url'); ?>/assets/images/cheff-miklovani.jpg" alt="">
                <div class="grid place-content-center md:pl-4">
                    <h1 class=" max-md:hidden text-center md:text-left text-black text-3xl ">
                        Chef Miklovan Zeqo
                    </h1>
                    <p class=" text-center md:text-left text-black text-xl mb-16 max-w-[450px]">Introducing Chef Miklovan, the culinary maestro behind the exceptional dining experiences at Supreme Hotel. His innovative creations, inspired by local ingredients and global influences, will satisfy your taste buds and leave you craving for more.</p>
                </div>
            </div>
            <div class="grid md:grid-cols-2 gap-y-4">
                <h1 class="md:hidden text-center md:text-right font-semibold text-black text-3xl ">
                 Chef Mario
                </h1>
                <div class="order-2 md:order-1 grid place-content-center md:pr-4">
                    <h1 class=" max-md:hidden text-center md:text-right text-black text-3xl ">
                        Chef Mario
                    </h1>
                    <p class="text-center md:text-right text-black text-xl mb-16 max-w-[450px]">Meet our culinary maestro, Chef Mario, the mastermind behind our extraordinary sushi creations. With his expert hands and deep-rooted passion for authenticity, he transports you to the heart of Japan with every meticulously crafted piece. 🍣</p>
                </div>
                <img class="order-1 md:order-2" src="<?php bloginfo('template_url'); ?>/assets/images/cheff-mario.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<section class="restaurant-slider">
<div class="splide restaurant-splide" role="group" aria-label="Rooms Slider">
                <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide"> 
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/restaurant-slider/food1.jpg" alt="">
                            </li>
                            <li class="splide__slide"> 
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/restaurant-slider/food2.jpg" alt="">
                            </li>
                            <li class="splide__slide"> 
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/restaurant-slider/food3.jpg" alt="">
                            </li>
                            <li class="splide__slide"> 
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/restaurant-slider/food4.jpg" alt="">
                            </li>
                            <li class="splide__slide"> 
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/restaurant-slider/food5.jpg" alt="">
                            </li>
                            <li class="splide__slide"> 
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/restaurant-slider/food6.jpg" alt="">
                            </li>
                        </ul>
                </div>
            </div>
</section>

<script>
  new Splide( '.restaurant-splide',{
    perPage: 5,
    breakpoints: {
		640: {
			perPage: 2,
		},
		767: {
			perPage: 4,
		},
    },
    pagination: false,
    gap: 10,
    rewind : true

  }).mount();
</script>

    <?php
get_footer();
?>