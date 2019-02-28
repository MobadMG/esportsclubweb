<?php 

get_header();

?>

<?php 
	if (have_posts()) : 
	while (have_posts()) : the_post(); ?>

<div class="background">

    <h1 class="text-center fontSize posAbsolute"><?php the_title(); ?></h1>

    <div class="imgParallax parallaxEvents">
    </div>

    <div class="pt-5 w-50 m-auto container-fluid">
        <div class="row">
            
        <div class="col-2">
            <button id="btnAll" class="btnGames"><img class=" img-fluid" src="<?php bloginfo('template_directory');?>/assets/images/logo3.png"/></button>
        </div>
        <div class="col-2">
            <button id="btnLol" class="btnGames"><img class=" img-fluid" src="<?php bloginfo('template_directory');?>/assets/images/LoL-logo.png"/></button>
        </div>
        <div class="col-2">
            <button id="btnCsGo" class="btnGames"><img class=" img-fluid" src="<?php bloginfo('template_directory');?>/assets/images/csgo.png"/></button>
        </div>
        <div class="col-2">
            <button id="btnCoD" class="btnGames"><img class=" img-fluid" src="<?php bloginfo('template_directory');?>/assets/images/logoBOPS.png"/></button>
        </div>
        <div class="col-2">
            <button id="btnStarC" class="btnGames"><img class=" img-fluid" src="<?php bloginfo('template_directory');?>/assets/images/starcraft-ii.png"/></button>
        </div>

        </div>
    </div>

    <div class="container-fluid">
        <div class="w-75 m-auto pb-5">
            <p><?php the_content(); ?></p>

            <?php

                $args2 = array(
                'category' => '45',
                'order' => 'desc');

                $recent_posts = wp_get_recent_posts( $args2 );

                foreach( $recent_posts as $recent ){

            ?> 
                <div class="row backgroundBlack mt-3">
                    <div class="col-6 m-auto">
                    <?php
                        echo '<p class="text-center">'.$recent["post_title"].'</p>';
                    ?>
                    </div>

                    <div class="col-4 m-auto">
                        <?php
                        echo '<p class="text-center">'.$recent["post_content"].'</p>';
                        ?>
                    </div>

                    <div class="col-2">
                        <?php
                        echo '<img class=" w-75 m-auto p-3 img-fluid" src="'.get_the_post_thumbnail($recent["ID"]).'';
                    ?>

                    </div>
                </div>
            <?php
            }wp_reset_postdata();
            ?> 
            
            
        </div>
    </div>





    </div>

<?php endwhile;
			endif;

get_footer();

?>