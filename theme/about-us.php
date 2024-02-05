<?php
/* Template Name: About us Page template */

get_header();
 // Check rows exists.
if (have_rows("hero_section")):
    // Loop through rows.
    while (have_rows("hero_section")):
        the_row();
        // Load sub field value.
        $hero_description = get_sub_field("hero_description");
        $hero_image = get_sub_field("hero_image");
        ?>
        <section id="hero-room" class="h-[400px] md:h-[600px] bg-cover relative"
            style="background-image: url('<?php echo $hero_image; ?>');">
            <div class="absolute top-0 left-0 w-full h-full z-[1] bg-gradient-to-r from-black to-transparent opacity-90">
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
// Check rows exists.
if (have_rows("about_section")):
    // Loop through rows.
    while (have_rows("about_section")):
        the_row();

        $inner_sections = get_sub_field("inner_sections");
        
        foreach($inner_sections as $inner_section){
            // Load sub field value.
            $description = $inner_section["description"];
            $image = $inner_section["image"];
            ?>
            <section id="about-section">
                <main id="main">
                    <div class="container grid  lg:gap-14 lg:grid-cols-2 items-center">
                        <div class="relative max-lg:mt-4 max-lg:order-2">
                            <img class="img max-lg:mx-auto" src="<?php echo $image; ?>" alt="">
                        </div>
                        <div class="grid gap-4 lg:justify-items-start content-baseline max-lg:order-1">
                            <p class=" text-[23px] md:text-[30px] xl:text-[35px]  ">
                                <?php echo $description; ?>
                            </p>
                            
                        </div>
                    </div>
                </main><!-- #main -->
            </section><!-- #primary -->
        <?php
        }
       
    endwhile;
else:
    // Do something...
endif; ?>
<?php
get_footer();
