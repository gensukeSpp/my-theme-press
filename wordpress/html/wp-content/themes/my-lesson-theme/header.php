<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!-- <meta http-equiv="Content-Type" content="text/html"> -->
		<title><?php wp_title( '' );  ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="Images" href="<?php echo esc_url(get_template_directory_uri()); ?>">
		<!-- <link rel="stylesheet" href="normalize.css"> -->
		<!-- <link rel="stylesheet" href="css/main.css"> -->
		<!-- <link rel="stylesheet" href="<?php //echo esc_url(get_stylesheet_uri()); ?>"> -->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header>
			<div class="head-logo">
				<img src=<?php echo esc_url(get_theme_file_uri('img/logo.jpg')); ?> alt ="" />
			</div>
			<?php
				wp_nav_menu(array(
					'theme_location' => 'header-navi',
					'container_class' => 'head-menu',
				));
			?>			
		</header>