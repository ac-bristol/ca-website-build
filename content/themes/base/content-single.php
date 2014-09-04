<?php
/**
 * @package base
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'base' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
    <?php
    // Get the ID of a given category
    $category_id = get_cat_ID( 'work' );

    // Get the URL of this category
    $category_link = get_category_link( $category_id );
?>
    <p class="post-cat">Category: <?php if(get_the_category() === "work") { ?> <a href="/work" title="work"> <?php } else { ?><a href="/blog" title="blog"><?php } ?><?php
    $category = get_the_category(); 
    echo $category[0]->cat_name;
    ?></a></p>
		<?php base_posted_on(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
