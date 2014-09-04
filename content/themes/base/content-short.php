<?php
/**
 * @package base
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<a href="<?php echo get_permalink(); ?>" class="page-link"><?php the_title( '<h2 class="entry-title">', '</h2>' ); ?></a>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content() ?> 
		<a href="<?php echo get_permalink(); ?>" class="page-link">Read more &raquo;</a>
	</div><!-- .entry-content -->

  <footer class="entry-footer">
<!--    <p class="post-cat">Category: <?php
    $category = get_the_category(); 
    echo $category[0]->cat_name;
    ?></p>-->
		<?php base_posted_on(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
