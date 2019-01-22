
<footer>
	<div class="backgroundFooter p-5">

	<div class=" p-5 m-auto text-center">
		<img class=" footerLogo img-fluid" src="<?php bloginfo('template_directory');?>/assets/images/logo3.png"/>	
	</div>

	<div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-controls="bs-example-navbar-collapse-2" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="#"></a>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'secondary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-2',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker()
		) );
        ?>
    </div>

	<div class="row w-50 m-auto ">
		<div class=" col-3 iconsSM m-auto">
			<i class="fa fa-facebook-square "></i>
		</div>
		<div class=" col-3 iconsSM m-auto">
			<i class="fa fa-twitter"></i>
		</div>
		<div class=" col-3 iconsSM m-auto">
			<i class="fa fa-instagram"></i>
		</div>
		<div class=" col-3 iconsSM m-auto">
			<i class="fa fa-twitch"></i>
		</div>
	</div>
	

	</div>

	<div class="row p-3">
		<div class="text-center m-auto">
		<p><?php  
			bloginfo('name');
		?> Derechos reservados 2019</p>
		</div>
	</div>

		
		
	
</footer>

<?php wp_footer(); ?>
</div>
</body>
</html>