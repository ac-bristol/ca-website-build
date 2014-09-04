<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package base
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Damn it! That page can&rsquo;t be found.', 'base' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
          <p>Why not head back to the <a href="/">home page</a>, check out my <a href="/work">work</a> or read my <a href="/blog">latest musing</a>.</p>
          <img src="../content/themes/base/images/japan-wave.jpg" alt="error"/>
					

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
