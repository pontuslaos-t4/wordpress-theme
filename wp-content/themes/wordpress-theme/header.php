<!DOCTYPE html>
<html>
	<head>
		<title>
			Wordpress Theme
		</title>

		<meta charset="<?php bloginfo('charset'); ?>"/>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/style.css">

		<?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?>>
		<div class="nav-container">
			<nav class="navbar navbar-default">
				<?php 
				wp_nav_menu(array(
					'theme_location' => 'header_nav_menu',
					'container'      => false,
					'menu_class' 	 => 'nav navbar-nav'
				)); 
				?>
			</nav>
		</div>