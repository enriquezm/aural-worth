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
						<h1>Auralworth Acoustics</h1>
						<p>Design buildings worthy of people’s ears.</p>
					</div>
					<a href="#first" class="more scrolly">Learn More</a>
				</section>

				<!-- Showcase Section -->
				<section class="main alt" id="first">
					<header>
						<h2>ACOUSTIC CONSULTING SERVICES</h2>
						<p>Sound advice worth listening to</p>
					</header>

					<div class="inner">
						<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); $count++;
								$index = $wp_query->current_post + 1;
							?>
								<article id="post-<?php the_ID(); ?>" class="post style2 <?php if ($index % 2 == 0 ? print "alt" : "") ?>">
									<div class="content">
										<header>
											<?php
												$categories = get_the_category();
												$single_category;
												if ( !empty($categories) ) {
													$single_category = esc_html( $categories[0]->name );
												}
											 ?>
											<h3><?php the_title(); ?></h3>
										</header>
										<p><?php the_excerpt(); ?></p>
										<ul class="actions">
											<li><a href="<?php the_permalink(); ?>" class="button next">Learn More</a></li>
										</ul>
									</div>
									<div class="image" data-position="center"><img src="http://localhost:8888/wordpress/wp-content/uploads/2018/03/pic05.jpg" alt="" /></div>
								</article>
							<?php endwhile; ?>
						<?php endif; ?>

					</div>
				</section>

			<!-- Team Section -->
				<section class="main">
					<header>
						<h2>CONSULTANT</h2>
						<p>Here to listen and give thorough but simplified advice.</p>
					</header>
					<div class="inner">
						<ul class="faces">

							<?php
							$args = array(
								'post_type' => 'members',
								'post_status' => 'publish'
							);
							$members = new WP_Query( $args );
							if($members->have_posts() ):
								while ($members->have_posts() ) :
									$members->the_post();
							?>
								<li>
									<span class="image"><img src="images/pic01.jpg" alt="" /></span>
									<h3><?php the_title(); ?></h3>
									<p><?php the_excerpt(); ?></p>
								</li>
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
							<?php endif; ?>
						</ul>
					</div>
				</section>

			<!-- Blog Posts Section -->
				<section class="main accent2">
					<header>
						<h2>PROJECTS</h2>
						<p>Aenean ornare velit lacus varius enim ullamcorper proin aliquam facilisis ante sed etiam magna interdum congue. Sed consequat amet dolor magna consequat. Lorem ipsum dolor amet nullam sed etiam veroeros.</p>
					</header>
					<div class="inner">
						<article class="post alt">
							<div class="content">
								<header>
									<h3>HOSPITALITY</h3>
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
									<h3>EDUCATION</h3>
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
									<h3>CONVENTION</h3>
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

			<!-- Contact Section -->
				<section id="contact" class="main alt special">
					<header>
						<h2>Get in touch</h2>
						<p>Let us help you.  Leave a message below with a description of the project or noise issue.  We’ll get back to you soon.</p>
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
