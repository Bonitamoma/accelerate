<?php
/**
 * The template for displaying single service description with image
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

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
				$service_name = get_field('service_name');
				$service_description = get_field('service_description');
				$image_1 = get_field('image_1');
				$size = "medium";
				?>
		<article class ="services-content">
				<h2><?php echo $service_name(); ?></h2>
				<h4><?php echo $service_description; ?></h4>
				
			<aside class="services-images">
			<?php if($image_1) {
				echo wp_get_attachment_image( image_1, $size);
			} ?>
			</aside>
		</article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->



	</div><!-- #primary -->

<?php get_footer(); ?>
