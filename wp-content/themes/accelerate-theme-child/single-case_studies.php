<?php
/**
 * The template for displaying Case Studies Pages
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
	$services = get_field('services');
	$client = get_field('client');
	$link = get_field('site_link');
	$image1 = get_field ('image1');
	$image2 = get_field ('image2');
	$image3 = get_field ('image3'); ?>
			
	<article class="case-study">
		<aside class="case-study-sidebar">
			<h2><?php the_title(); ?></h2>
				<h4><?php echo $services; ?></h4>
					<h4><span>Client: <?php echo $client; ?></span></h4>
						
				<?php the_content(); ?>
			
			<p><strong><a href="<?php echo $link; ?>">Site Link</a></strong></p>
		</aside>
			<div class="case-study-images">
			<?php if(image1) { ?> 
			<img src="<?php echo $image1; ?>" />
			<?php } ?>
			<?php if(image2) { ?> 
			<img src="<?php echo $image2; ?>" />
			<?php } ?>
			<?php if(image3) { ?> 
			<img src="<?php echo $image3; ?>" />
			<?php } ?>
			</div>
			
			</article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>
