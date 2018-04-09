<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AuralWorth
 */

?>
<!DOCTYPE HTML>
<!--
	Relativity by Pixelarity
	pixelarity.com | hello@pixelarity.com
	License: pixelarity.com/license
-->
<html>
	<head>
		<title><?php get_bloginfo('name'); ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php wp_head() ?>
	</head>
	<body>

		<!-- Wrapper -->
		<div id="wrapper">

			<!-- Header -->
				<header id="header" class="alt">

					<!-- Logo -->
						<div class="logo">
							<a class="brand logo-font" href="/">
								<img class="logo-img" width="150px" src="<?php echo get_template_directory_uri() . '/assets/images/auralworth-logo-horizontal.svg'; ?>" />
							</a>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="current"><a href="/">Home</a></li>
								<li><a href="#contact">Contact</a></li>
							</ul>
						</nav>

				</header>
