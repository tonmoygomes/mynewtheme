<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width" />
		<title><?php bloginfo('name'); ?></title>
		<!-- <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">-->
		
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>
	<div class="container">
	<header class="site-header">
		<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
		<h5>
                    <?php bloginfo('description'); ?>
                    <?php if(is_home()){ ?>
                        - We are on home page
                    <?php } else if(is_page('portfolio')){ ?>
                        - We are on a portfolio page
                    <?php } ?>
                </h5>
		<!-- Trying git commit -->
                <nav class="site-nav">
                    <ul>
                        <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
                    </ul>
                </nav>
	</header>

