<?php

    get_header();

?>




<div class="background">

    <h1 class="text-center fontSize posAbsolute"><?php the_title(); ?></h1>

    <div class="imgParallax parallaxTeams">

    </div>

    <div  class=" mt-5 mb-5">
        <div class="row btnTeams m-auto">
            <div class="col-3">
              <a class="" href="#"><img class="" src="<?php bloginfo('template_directory');?>/assets/images/LoL-logo.png"/></a>
            </div>
            <div class="col-3">
              <a class="" href="csgo.php"><img class="" src="<?php bloginfo('template_directory');?>/assets/images/csgo.png"/></a>
            </div>
            <div class="col-3">
              <a class="" href="cod.php"><img class="" src="<?php bloginfo('template_directory');?>/assets/images/logoBOPS.png"/></a>
            </div>
            <div class="col-3">
              <a class="" href="starcraft-ii.php"><img class="" src="<?php bloginfo('template_directory');?>/assets/images/starcraft-ii.png"/></a>
            </div>
        </div>
    </div>

    <div class="backgroundBlack w-75 m-auto">
        <h2 class="text-center p-3 fontSizeh2">Lorem ipsum dolor sit</h2>
        <div class="row">
            <div class="col-4">
                
            </div>
            <div class="col-4">
                <p>Event</p>
            </div>
            <div class="col-4">
                <p>Year</p>
            </div>
        </div>

        <div class="row">


        <?php
            $mypages = get_pages( array( 'child_of' => 124, 'sort_column' => 'post_date', 'sort_order' => 'asc' ) );

            foreach( $mypages as $page ) {		
                $content = $page->post_content;

            ?>    
            <div class="col-4 m-auto">

            <?php
                if ( has_post_thumbnail($page->ID) ) {
                    echo '<img class="p-3 w-100 img-fluid" src="'.get_the_post_thumbnail($page->ID);
                }  
            ?>
            </div>
            
            <div class="col-4 m-auto">
                <p><?php echo $page->post_title; ?></p>
            </div>

            <div class="col-4 m-auto">
                <p><?php echo $page->post_content; ?></p>
            </div>
            
                
           
            <?php   
        } ?>  

        </div>
    </div>

    <div class="mt-5 pb-5">
        <div class="row w-75 m-auto">
             <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 col-12 m-auto pt-3">
                 <div class="row backgroundBlack">
                    <div class="col-6">
                        <p class="text-center">Arce</p>

                        <div class="row m-3 sMPlayers">
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
                    <div class="col-6 p-0">
                        <img class=" p-3" src="<?php bloginfo('template_directory');?>/assets/images/playerArce2.jpg"/>
                    </div>
                 </div>
             </div>

             <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 col-12 m-auto pt-3">
                 <div class="row backgroundBlack">
                    <div class="col-6">
                        <p class="text-center">Renyu</p>

                        <div class="row m-3 sMPlayers">
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
                    <div class="col-6 p-0">
                        <img class=" p-3" src="<?php bloginfo('template_directory');?>/assets/images/playerRenyu.jpg"/>
                    </div>
                 </div>
             </div>
        
             <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 col-12 m-auto pt-3">
                 <div class="row backgroundBlack">
                    <div class="col-6">
                        <p class="text-center">SolidSnake</p>

                        <div class="row m-3 sMPlayers">
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
                    <div class="col-6 p-0">
                        <img class=" p-3" src="<?php bloginfo('template_directory');?>/assets/images/playerSnake.jpg"/>
                    </div>
                 </div>
             </div>

             <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 col-12 m-auto pt-3">
                 <div class="row backgroundBlack">
                    <div class="col-6">
                        <p class="text-center">Relic</p>

                        <div class="row m-3 sMPlayers">
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
                    <div class="col-6 p-0">
                        <img class=" p-3" src="<?php bloginfo('template_directory');?>/assets/images/playerRelic.jpg"/>
                    </div>
                 </div>
             </div>
        
             <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 col-12 m-auto pt-3">
                 <div class="row backgroundBlack">
                    <div class="col-6">
                        <p class="text-center">CotoPaco</p>

                        <div class="row m-3 sMPlayers">
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
                    <div class="col-6 p-0">
                        <img class=" p-3" src="<?php bloginfo('template_directory');?>/assets/images/playerCotoPaco2.jpg"/>
                    </div>
                 </div>
             </div>

             <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 col-12 m-auto pt-3">
                 <div class="row backgroundBlack">
                    <div class="col-6">
                        <p class="text-center">Soren</p>

                        <div class="row m-3 sMPlayers">
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
                    <div class="col-6 p-0">
                        <img class=" p-3" src="<?php bloginfo('template_directory');?>/assets/images/coachSoren.jpg"/>
                    </div>
                 </div>
             </div>
        </div>
        

    </div>


</div>


<?php

    get_footer();

?>