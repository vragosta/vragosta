<?php

/**
 * The template for displaying the header.
 *
 * @package Vincent Ragosta - Twenty Seventeen
 * @since 0.1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<nav>
			<ul>
				<li><a href="#" class="home">Home</a></li>
				<li><a href="#" class="works">Works</a></li>
				<li><a href="#" class="services">Services</a></li>
				<li><a href="#" class="about">About</a></li>
				<li><a href="#" class="blog">Blog</a></li>
				<li><a href="#" class="contact">Contact</a></li>
			</ul>
		</nav>
