<?php 
	
	get_header();

 ?>
<div class="background">
	
<?php the_content(); ?>
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


	<div class="row p-5">

	<!--imgHomeGames-->
	<?php

	$args = array( 'numberposts' => '4',
	'category' => '19',
	'order' => 'asc');

	$recent_posts = wp_get_recent_posts( $args );

	foreach( $recent_posts as $recent ){

	?>
		<div class="col-lg-3 col-md-3 col-xs-6">
		<?php
		echo '<img class="m-auto w-100 img-fluid" src="'.get_the_post_thumbnail($recent["ID"]).'';
		?>
		</div>
	<?php
	} wp_reset_postdata();
	?>
	</div>

	<div class="row mt-5 ">
		<div class="col-lg-4 col-md-12 col-sm-12 col-12 backgroundTwo p-5">
			<div class="row  m-auto">
				<div class="col-4 m-auto">
					<img class="" src="<?php bloginfo('template_directory');?>/assets/images/check-circle.png"/>
				</div>

				<div class="col-8 m-auto">
					<p class="">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-md-12 col-sm-12 col-12 backgroundThree p-5">
			<div class="row m-auto">
				<div class="col-4 m-auto">
					<img  src="<?php bloginfo('template_directory');?>/assets/images/check-circle.png"/>
				</div>

				<div class="col-8 m-auto">
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-md-12 col-sm-12 col-12 backgroundFour p-5">
			<div class="row m-auto">
				<div class="col-4 m-auto">
					<img class="" src="<?php bloginfo('template_directory');?>/assets/images/check-circle.png"/>
				</div>

				<div class="col-8 m-auto">
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
				</div>
			</div>
		</div>
	</div>

	<div class="backgroundFive p-5">
		<div class="row w-75 m-auto ">

		<?php
        $args2 = array( 'numberposts' => '3',
		'category' => '21',
		'order' => 'asc');
	
		$recent_posts2 = wp_get_recent_posts( $args2 );
	
		foreach( $recent_posts2 as $recent2 ){

        ?>    
        	<div class="col-lg-4 col-md-4 col-xs-12 m-auto">
			<?php
			echo '<img class="m-auto w-100 img-fluid" src="'.get_the_post_thumbnail($recent2["ID"]).'';
			?>
			</div>
        <?php   
        } ?> 
			
			
		</div>
	</div>

	<div class="">

		<div class="txtButton text-center">
			<p class="">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
			<input name="" id="" class="button" type="button" value="Be one of Us">
		</div>

		<div class=" p-5 text-center">
			<img class="img-fluid imgButton w-75" src="<?php bloginfo('template_directory');?>/assets/images/loveTeam.jpg"/>
		</div>
		
		
		
	</div>
	


</div>


<?php 
	
	get_footer();

 ?>