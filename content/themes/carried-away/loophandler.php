<?php
// Our include
define('WP_USE_THEMES', false);
require_once('../../../wp/wp-load.php');
 
// Our variables
$numPosts = (isset($_GET['numPosts'])) ? $_GET['numPosts'] : 0;
$page = (isset($_GET['pageNumber'])) ? $_GET['pageNumber'] : 0;
 
query_posts(array(
       'posts_per_page' => $numPosts,
       'paged'          => $page,
       'post_type'      => 'product',
       'order'		    => 'asc'
));
 
// our loop
if (have_posts()) {
       while (have_posts()){ 
       		the_post(); ?>
       		<div class="product-container">
            <?php get_template_part( 'content', 'product' ); ?>
            </div>
       <?php }
}
wp_reset_query();
?>