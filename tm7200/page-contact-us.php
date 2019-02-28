<?php

    get_header();

?>


<div class="background">


  <h1 class="text-center fontSize posAbsolute"><?php the_title(); ?></h1>

    <div class="imgParallax parallaxContact">
    
    </div>

    <div class="container-fluid">

        <div class="row contactForm m-auto p-5">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <img src="<?php bloginfo('template_directory');?>/assets/images/TeamPlayers5.jpg"/>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 m-auto">

                <p class="mt-5">Do you have any questions to ask, do you want to know more about us, do you have any opinion or message to give us? Contact us!</p>

                <div class="form-group text-white">
                    <input type="text" class=" input text-white" name="" id="" placeholder="Name">
                </div>
                <div class="form-group">
                    <input type="text" class="input" name="" id="" aria-describedby="helpId" placeholder="Email">
                </div>

                <div class="form-group">
                    <textarea name="" id="" class="input" rows="10" placeholder="Message"></textarea>
                </div>

                <input name="" id="" class=" button" type="button" value="Send">

            </div>
        </div>
    
    </div>


    <div class="w-75 m-auto p-5">
        <p>Our offices and gaming house are in different places, here you can see where we are located if you want to contact us.</p>
    </div>

    <div class="m-auto p-5">
        <div id="map"></div>
    </div>

</div>

<?php

    get_footer();

?>