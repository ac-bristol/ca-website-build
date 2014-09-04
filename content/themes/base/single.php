<?php
/**
 * The template for displaying all single posts.
 *
 * @package base
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php base_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
    <sidebar class="post-sidebar" role="sidebar">
       <?php get_sidebar(); ?>
      <div class="sidebar-contact">
        <p>All content is written by Andrew Cocker, front-end developer living in Bristol, UK.</p>
        <p>Tweet me <a href="https://twitter.com/cre8ive_block">@cre8ive_block</a>, check out my code at <a href="https://github.com/ac-bristol">github</a> or <a href="mailto:me@andrew-cocker.co.uk">email me</a>.
      </div>
    </sidebar>
	</div><!-- #primary -->


  
<?php get_footer(); ?>