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

<div class="container clearfix">

	<div class="full-width">
		<div class="inner image-only">
			<img src="<?php echo get_bloginfo('template_directory');?>/assets/images/main-image.jpg" alt="Carried away" />
		</div>
	</div>
	
</div>

<div class="container clearfix">

	<div class="half-width">
		<div class="inner image-only">
			<img src="<?php echo get_bloginfo('template_directory');?>/assets/images/bags.jpg" alt="stack of bags" />
		</div>
	</div>
	
	<div class="half-width">
		<div class="inner">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>
	
			<?php endwhile; // end of the loop. ?>
		</div>	
	</div>
	
</div>

<div class="container clearfix">

	<div class="full-width">
		<div class="inner">
		Products
<?php

$paged = (get_query_var('page')) ? get_query_var('page') : 1;

$args = array(
	'post_type' => 'product',
	'order' => 'asc',
	'posts_per_page' => 1,
	'paged' => $paged
);
$query = new WP_Query( $args );

while ( $query->have_posts() ) {
	$query->next_post();
	echo '<li>' . get_the_title( $query	->post->ID ) . '</li>';
} ?>

<div id="pagination">
	<ul class="pagination">
		<li id="next-stories" class="arrow">
			<?php next_posts_link( 'Load more >>', $query->max_num_pages ); ?>
		</li>
	</ul>
</div><!-- /#pagination -->

<?php wp_reset_postdata(); ?>
		</div>
	</div>
	
</div>


<?php get_footer(); ?>
