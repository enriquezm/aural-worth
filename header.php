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
		<title>Untitled</title>
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
							<a href="index.html"><strong>AuralWorth</strong> Acoustics</a>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="current"><a href="index.html">Home</a></li>
								<li><a href="generic.html">Generic</a></li>
								<li><a href="elements.html">Elements</a></li>
							</ul>
						</nav>

				</header>
