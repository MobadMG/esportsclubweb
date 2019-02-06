<html>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title> <?php bloginfo('name') ?> </title>
	<?php wp_head() ?>
</head>
    <body <?php body_class(); ?>>
    <div class="allContent">
	    <header>
	        <nav class="navbar navbar-expand-lg navbar-dark backgroundFive" role="navigation">
                <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
	                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
		                <span class="navbar-toggler-icon"></span>
	                </button>
	                <a class="navbar-brand" href="home"><img class="m-auto w-75" src="<?php bloginfo('template_directory');?>/assets/images/logo2.png"/></a>
                    <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker()
                    ) );
                    ?>
                </div>
            </nav>
	    </header>

