<?php
/**
 * The template for displaying the about us page 
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
get_header(); ?>

	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

	<section class="services">
		<div class="services-content">
		<h4>Our Services</h4>
		<p>We take pride in our clients and the content we create for them.</p>
		<p>Here's a brief overview of our offered services.</p>
		<ul class="about-page-services">
	<?php query_posts('posts_per_page=4&post_type=services'); ?>
					<!-- the loop -->
					<?php while ( have_posts() ) : the_post();
						$image_1 = get_field("image_1");
						$size = "medium";
						?>
						<li class="individual-services">
						<figure>
							<?php echo wp_get_attachment_image($image_1, $size); ?>
						</figure>
						<h3><?php the_title(); ?></h3>
							<h5><?php the_content(); ?></h5>
						</li>
					<?php endwhile; // end of the loop. ?>
					<?php wp_reset_query(); //resets the altered query back to the original. ?>
			</ul>
		</div>
	</section>
	<section>
	<div class="service-contact-us">
		<h3>Interested in working with us? 
			<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a></h3>
		</div>
	</section>

<?php get_footer(); ?>