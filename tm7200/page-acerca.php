<?php

    get_header();

?>

<?php 
	if (have_posts()) : 
	while (have_posts()) : the_post(); ?>

    
<div class="background">

    <h1 class="text-center fontSize posAbsolute"><?php the_title(); ?></h1>

    <div class="imgParallax parallaxAbout">

    </div>

    <?php 	endwhile;
			endif;

    get_footer();

?>