<?php 
	
	get_header();

 ?>
<div class="background">
	
	<div>
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
				<img class="d-block w-100" src="<?php bloginfo('template_directory');?>/assets/images/2019.jpg"/>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="<?php bloginfo('template_directory');?>/assets/images/AllTeam2.png"/>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="<?php bloginfo('template_directory');?>/assets/images/teamPlayers4.jpg"/>
				</div>
			</div>
			
		</div>
	</div>

	<div class="container-fluid">
		<div class="row p-5">

		<!--imgHomeGames-->
		<?php

		$argsInicio = array( 'numberposts' => '4',
		'category' => '41',
		'order' => 'desc');

		$recent_postsInicio = wp_get_recent_posts( $argsInicio );

		foreach( $recent_postsInicio as $recentInicio ){

		?>
			<div class="col-lg-3 col-md-3 col-xs-6">
			<?php
			echo '<img class="m-auto w-100 img-fluid" src="'.get_the_post_thumbnail($recentInicio["ID"]).'';
			?>
			</div>
		<?php
		}wp_reset_postdata();
		?>
		</div>
	</div>


	<div class="container-fluid">
		<div class="row mt-5 ">
			<div class="col-lg-4 col-md-12 col-sm-12 col-12 backgroundTwo p-5">
				<div class="row  m-auto">
					<div class="col-4 m-auto">
						<img class="" src="<?php bloginfo('template_directory');?>/assets/images/check-circle.png"/>
					</div>

					<div class="col-8 m-auto">
						<p class="">Trabajo en equipo hasta la victoria</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-12 col-sm-12 col-12 backgroundThree p-5">
				<div class="row m-auto">
					<div class="col-4 m-auto">
						<img  src="<?php bloginfo('template_directory');?>/assets/images/check-circle.png"/>
					</div>

					<div class="col-8 m-auto">
						<p>Superación mutua, para ser los mejores</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-12 col-sm-12 col-12 backgroundFour p-5">
				<div class="row m-auto">
					<div class="col-4 m-auto">
						<img class="" src="<?php bloginfo('template_directory');?>/assets/images/check-circle.png"/>
					</div>

					<div class="col-8 m-auto">
						<p>Esfuerzo, por sed de victoria</p>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="backgroundFive p-5 container-fluid">
		<div class="row w-75 m-auto ">

		<?php
        $argsInicio2 = array( 'numberposts' => '3',
		'category' => '43',
		'order' => 'asc');
	
		$recent_postsInicio2 = wp_get_recent_posts( $argsInicio2 );
	
		foreach( $recent_postsInicio2 as $recentInicio2 ){

        ?>    
        	<div class="col-lg-4 col-md-4 col-xs-12 m-auto">
			<?php
			echo '<img class="m-auto w-100 img-fluid" src="'.get_the_post_thumbnail($recentInicio2["ID"]).'';
			?>
			</div>
        <?php   
        } wp_reset_postdata(); ?> 
			
			
		</div>
	</div>

	<div class="">

		<div class="txtButton text-center">
			<p class="">¿Te gustaria formar parte de esta gran familia y ser victorioso?</p>
			<input name="" id="" class="button" type="button" value="Se uno de nosotros">
		</div>

		<div class=" p-5 text-center">
			<img class="img-fluid imgButton w-75" src="<?php bloginfo('template_directory');?>/assets/images/loveTeam.jpg"/>
		</div>
		
		
		
	</div>
	


</div>


<?php 
	
	get_footer();

 ?>