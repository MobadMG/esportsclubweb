
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


    <?php
	$mypages = get_pages( array( 'child_of' => 5, 'sort_column' => 'post_date', 'sort_order' => 'asc' ) );

	foreach( $mypages as $page ) {		
		$content = $page->post_content;

	?>    
    <div class="w-75 m-auto pt-5 pText">
        <h2 class="text-center p-3 fontSizeh2"><?php echo $page->post_title; ?></h2>
        <p class=""><?php echo $page->post_content; ?></p>
        
    </div>
    <?php
    
        if ( has_post_thumbnail($page->ID) ) {
            echo '<img class="pt-5 w-100 img-fluid" src="'.get_the_post_thumbnail($page->ID);
        }    
    } ?>

    <div class="container-fluid">
        <div class="row w-75 m-auto pt-5">
            <div class="col-8">
            <img src="<?php bloginfo('template_directory');?>/assets/images/logo.jpg"/>
            </div>

            <div class="col-4 m-auto">
                <img class="" src="<?php bloginfo('template_directory');?>/assets/images/ceo2.jpg"/>
                <img class="" src="<?php bloginfo('template_directory');?>/assets/images/coachSoren2.jpg"/>
            </div>
    </div>

    </div>

    <div class="w-75 m-auto pt-5 pText">
          <p><?php the_content(); ?></p>
    </div>

    <div class="container-fluid">

        <div class="row w-75 m-auto pt-5 pb-5">

        <?php
        $mypages = get_pages( array( 'child_of' => 59, 'sort_column' => 'post_date', 'sort_order' => 'asc' ) );

        foreach( $mypages as $page ) {		
            $content = $page->post_content;

        ?>    
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 col-6">
            <?php
                echo '<img class="pt-5 w-100 img-fluid" src="'.get_the_post_thumbnail($page->ID);
            ?>

            <p class="text-center"><?php echo $page->post_title; ?></p>
            <p class="text-center"><?php echo $page->post_content; ?></p>
        </div>
        <?php     
        } 
        ?>
        </div>

    </div>
</div>

<?php 	endwhile;
			endif;

    get_footer();

?>



