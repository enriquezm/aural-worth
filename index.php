<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AuralWorth
 */

get_header();
?>

<!-- Banner -->
				<section id="banner">
					<div class="content">
						<h1>Magna etiam</h1>
						<p>Ipsum dolor sed consequat adipiscing magna</p>
					</div>
					<a href="#first" class="more scrolly">Learn More</a>
				</section>

			<!-- Section -->
				<section class="main alt" id="first">
					<header>
						<h2>Fusce sed adipiscing</h2>
						<p>Aenean ornare velit lacus varius enim ullamcorper proin aliquam facilisis ante sed etiam magna interdum congue. Sed consequat amet dolor magna consequat. Lorem ipsum dolor amet nullam sed etiam veroeros.</p>
					</header>
					<div class="inner">
						<article class="post style2">
							<div class="content">
								<header>
									<span class="category">Erat lacinia</span>
									<h3>Nisl euismod</h3>
								</header>
								<p>Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut magna finibus nisi nec sed lacinia. Nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor sit nullam magna tempus.</p>
								<ul class="actions">
									<li><a href="#" class="button next">Learn More</a></li>
								</ul>
							</div>
							<div class="image" data-position="center"><img src="images/pic05.jpg" alt="" /></div>
						</article>
						<article class="post style2 alt">
							<div class="content">
								<header>
									<span class="category">Magna sed</span>
									<h3>Integer nulla</h3>
								</header>
								<p>Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut magna finibus nisi nec sed lacinia. Nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor sit nullam magna tempus.</p>
								<ul class="actions">
									<li><a href="#" class="button next">Learn More</a></li>
								</ul>
							</div>
							<div class="image" data-position="center"><img src="images/pic06.jpg" alt="" /></div>
						</article>
					</div>
				</section>

			<!-- Section -->
				<section class="main">
					<header>
						<h2>Mauris sed lorem</h2>
						<p>Aenean ornare velit lacus varius enim ullamcorper proin aliquam facilisis ante sed etiam magna interdum congue. Sed consequat amet dolor magna consequat. Lorem ipsum dolor amet nullam sed etiam veroeros.</p>
					</header>
					<div class="inner">
						<ul class="faces">
							<li>
								<span class="image"><img src="images/pic01.jpg" alt="" /></span>
								<h3>Jane Doe</h3>
								<p>Sed magna etiam</p>
							</li>
							<li>
								<span class="image"><img src="images/pic02.jpg" alt="" /></span>
								<h3>John Smith</h3>
								<p>Ipsum et dolor</p>
							</li>
							<li>
								<span class="image"><img src="images/pic03.jpg" alt="" /></span>
								<h3>Kate Anderson</h3>
								<p>Euismod convallis</p>
							</li>
							<li>
								<span class="image"><img src="images/pic04.jpg" alt="" /></span>
								<h3>Alex Marks</h3>
								<p>Mauris aliquam</p>
							</li>
						</ul>
					</div>
				</section>

			<!-- Section -->
				<section class="main accent2">
					<header>
						<h2>Egestas phasellus</h2>
						<p>Aenean ornare velit lacus varius enim ullamcorper proin aliquam facilisis ante sed etiam magna interdum congue. Sed consequat amet dolor magna consequat. Lorem ipsum dolor amet nullam sed etiam veroeros.</p>
					</header>
					<div class="inner">
						<article class="post alt">
							<div class="content">
								<header>
									<span class="category">Lorem ipsum</span>
									<h3>Finibus et magna</h3>
								</header>
								<p>Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut magna finibus nisi nec sed lacinia. Nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor sit nullam magna tempus. Lorem ipsum sit tempus amet feugiat.</p>
								<ul class="actions">
									<li><a href="#" class="button next">Learn More</a></li>
								</ul>
							</div>
							<div class="image" data-position="center"><img src="images/pic07.jpg" alt="" /></div>
						</article>
						<article class="post">
							<div class="content">
								<header>
									<span class="category">Sed etiam</span>
									<h3>Nam adipiscing</h3>
								</header>
								<p>Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut magna finibus nisi nec sed lacinia. Nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor sit nullam magna tempus. Lorem ipsum sit tempus amet feugiat.</p>
								<ul class="actions">
									<li><a href="#" class="button next">Learn More</a></li>
								</ul>
							</div>
							<div class="image" data-position="center"><img src="images/pic08.jpg" alt="" /></div>
						</article>
						<article class="post alt">
							<div class="content">
								<header>
									<span class="category">Sapien erat</span>
									<h3>Amet sed nullam</h3>
								</header>
								<p>Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut magna finibus nisi nec sed lacinia. Nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor sit nullam magna tempus. Lorem ipsum sit tempus amet feugiat.</p>
								<ul class="actions">
									<li><a href="#" class="button next">Learn More</a></li>
								</ul>
							</div>
							<div class="image" data-position="center"><img src="images/pic09.jpg" alt="" /></div>
						</article>
					</div>
				</section>

			<!-- Section -->
				<section class="main alt special">
					<header>
						<h2>Get in touch</h2>
						<p>Aenean ornare velit lacus varius enim ullamcorper proin aliquam facilisis ante sed etiam magna interdum congue. Sed consequat amet dolor magna consequat. Lorem ipsum dolor amet nullam sed etiam veroeros.</p>
					</header>
					<div class="inner narrow">
						<form action="#" method="post">
							<div class="field half">
								<input name="name" id="name" placeholder="Name" type="text" />
							</div>
							<div class="field half">
								<input name="email" id="email" placeholder="Email" type="email" />
							</div>
							<div class="field">
								<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
							</div>
							<ul class="actions">
								<li><button class="button next" type="submit">Send Message</button></li>
							</ul>
						</form>
					</div>
				</section>

<?php get_footer(); ?>
