<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="product-image">
		<a href=""><?php 
		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			the_post_thumbnail();
		} 
		?></a>
	</div><!-- Image -->

	<div class="product-info">
		<a href=""><?php the_title( '<h3 class="small-header">', '</h3>' ); ?></a>
		<a href=""><?php the_content(); ?></a>
	</div><!-- Information -->
</article><!-- Product -->
