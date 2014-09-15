<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package carried-away
 */

get_header(); ?>

<div class="container clearfix no-margin">

	<div class="full-width">
		<div class="inner image-only">
			<img src="<?php echo get_bloginfo('template_directory');?>/assets/images/main-image.jpg" alt="Carried away" />
		</div>
	</div>
	
</div>

<div class="container clearfix home-chessboard no-margin">

	<div class="home-tile">
		<div class="inner image-only">
			<img src="<?php echo get_bloginfo('template_directory');?>/assets/images/bags.jpg" alt="stack of bags" />
		</div>
	</div>
	
	<div class="home-tile">
		<div class="inner">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>
	
			<?php endwhile; // end of the loop. ?>
		</div>	
	</div>
	
</div>

<div class="container clearfix">

	<div class="full-width">
		<div class="inner loop">
		Products
		<div id="data-container"></div>
		<div id="next-post">
			<a href="#">View more products</a>
		</div>
	</div>
	
</div>


<?php get_footer(); ?>
