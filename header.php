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
							<a class="brand" href="/">
								<svg class="logo-mark" viewBox="0 0 33 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								    <!-- Generator: Sketch 49.1 (51147) - http://www.bohemiancoding.com/sketch -->
								    <title>20180406 Logo Left Black</title>
								    <desc>Created with Sketch.</desc>
								    <defs></defs>
								    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								        <g id="20180406-Logo-Left-Black" stroke="#FFFFFF" stroke-width="0.66145833">
								            <path class="logo-stroke" d="M0.953125,0.77393 C0.953125,0.77393 12.859375,3.41976 12.859375,14.0031 C12.859375,24.58644 0.953125,27.23226 0.953125,27.23226" id="path3715"></path>
								            <path class="logo-stroke" d="M16.828125,0.77393 L16.828125,27.23226" id="path3749"></path>
								            <path class="logo-stroke" d="M0.953125,4.74268 C0.953125,4.74268 8.890625,6.59476 8.890625,14.0031 C8.890625,21.41144 0.953125,23.26351 0.953125,23.26351" id="path3715-2"></path>
								            <path class="logo-stroke" d="M0.941084,8.69959 C0.941084,8.69959 4.921875,9.76029 4.921875,14.0031 C4.921875,18.2459 0.941084,19.3066 0.941084,19.3066" id="path3715-2-2"></path>
								            <path class="logo-stroke" d="M32.703125,0.77393 C32.703125,0.77393 20.796875,0.77393 20.796875,11.35726 C20.796875,21.9406 32.703125,27.23226 32.703125,27.23226" id="path3715-4"></path>
								            <path class="logo-stroke" d="M25.682221,12.69351 C25.682221,12.69351 23.400382,9.26349 26.208747,6.08316 C29.017106,2.90283 32.703125,4.74268 32.703125,4.74268" id="path3715-2-2-7"></path>
								        </g>
								    </g>
								</svg>
								<?php echo get_bloginfo( 'name' ); ?>
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
