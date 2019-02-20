<?php 

get_header();

?>

<?php 
	if (have_posts()) : 
	while (have_posts()) : the_post(); ?>

<div class="background">

    <h1 class="text-center fontSize posAbsolute"><?php the_title(); ?></h1>

    <div class="imgParallax parallaxPartners">
    </div>

    <div class="w-75 m-auto">
        <div class="row">
            <?php
            $mypages = get_pages( array( 'child_of' => 34, 'sort_column' => 'post_date', 'sort_order' => 'asc' ) );

            foreach( $mypages as $page ) {		
                $content = $page->post_content;

            ?>   
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-5 p-5">
                <div class=" backgroundBlack p-5">
                <?php
                    echo '<img class="w-100 img-fluid" src="'.get_the_post_thumbnail($page->ID);
                ?>
                <p><?php echo $page->post_content; ?></p>

                    <div class="row m-3 ">
                        <div class=" col-3 iconsSMPlayers m-auto">
                            <i class="fa fa-facebook-square "></i>
                        </div>
                        <div class=" col-3 iconsSMPlayers m-auto">
                            <i class="fa fa-twitter"></i>
                        </div>
                        <div class=" col-3 iconsSMPlayers m-auto">
                            <i class="fa fa-instagram"></i>
                        </div>
                        <div class=" col-3 iconsSMPlayers m-auto">
                            <i class="fa fa-twitch"></i>
                        </div>
                    </div>
                </div>
                
            </div>
        <?php
            }
        ?>    
        </div>
    </div>
</div>

<?php endwhile;
			endif;

get_footer();

?>