<?php 

get_header();

?>

<?php 
	if (have_posts()) : 
    while (have_posts()) : the_post(); ?>
    
<div class="background">

    <h1 class="text-center fontSize posAbsolute"><?php the_title(); ?></h1>

    <div class="imgParallax parallaxJoin">

    </div>

    <div class="w-75 m-auto pt-5 pText">
        <p><?php the_content(); ?></p>
    </div>

    <div class="row m-auto pt-5">
        <div class="col">
            <img class="" src="<?php bloginfo('template_directory');?>/assets/images/gaminghouse.jpg"/>
        </div>
        <div class="col">
        <img class="" src="<?php bloginfo('template_directory');?>/assets/images/coach8.jpg"/>
        </div>
    </div>

    <div class="w-75 m-auto pt-5">
        <?php
        $mypages = get_pages( array( 'child_of' => 11, 'sort_column' => 'post_date', 'sort_order' => 'asc' ) );

        foreach( $mypages as $page ) {		
            $content = $page->post_content;

        ?>    
        <div class="w-75 m-auto pt-5 pText">
            <p class=""><?php echo $page->post_content; ?></p>
            
        </div>
        <?php   
        } ?>  
    </div>

    <div class="row m-auto w-75 pt-5 pb-5">
        <div class="col-8">
            <img class="" src="<?php bloginfo('template_directory');?>/assets/images/coach7.jpg"/>
        </div>
        <div class="col-4 m-auto">
            <img class="" src="<?php bloginfo('template_directory');?>/assets/images/playerArce.jpg"/>
            <img class="" src="<?php bloginfo('template_directory');?>/assets/images/playerCotoPaco.jpg"/>
        </div>
    </div>

</div>

<?php endwhile;
			endif;

get_footer();

?>