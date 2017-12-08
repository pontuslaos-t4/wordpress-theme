<?php
/*
This is my header.
*/
?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>
	<head>
		<title>
			<?php wp_title(); ?> - <?php bloginfo('name'); ?>
		</title>

		<meta charset="<?php bloginfo('charset'); ?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato">
		<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/style.css">

		<?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?>>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<div class="header-container">
						<div class="header-content">
							<img id="header-image-pl" class="img-responsive center-block" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width ?>" height="<?php echo get_custom_header()->height ?>" />
						</div>
					</div>

					<div class="nav-container">
						<div class="nav-content">
							<nav class="navbar navbar-default navbar-pl">
								<div class="navbar-items">
									<?php 
									wp_nav_menu(array(
										'theme_location' => 'header_nav_menu',
										'container'      => false,
										'menu_class' 	 => 'nav navbar-nav'
									)); 
									?>
									<div class="searchbar-container">
										<?php get_search_form(); ?>
									</div>
								</div>
							</nav>
						</div>
						<br /><br /><br />
					</div>
				</div>
			</div>
		</div>

		<div class="container container-pl">