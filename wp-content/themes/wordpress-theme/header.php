<!DOCTYPE html>
<html>
	<head>
		<title>
			Wordpress Theme
		</title>

		<meta charset="<?php bloginfo('charset'); ?>"/>

		<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/style.css">

		<?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?>>