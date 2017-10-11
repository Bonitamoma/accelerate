<?php
/**
 * The template for displaying 404 page
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

	<div id="primary">
		<h1>Whoops, Took a Wrong Turn...</h1>
			<h3>Sorry, this page no longer exists, never existed or has been moved.</h3>
			<h4>Feel free to take a look around our <a href="<?php echo site_url('/blog/') ?>">blog</a> or some of our featured
			<a href="<?php echo site_url('/case-studies/') ?>">work</a>.</h4>

		

	</div><!-- #primary -->

<?php get_footer(); ?>
