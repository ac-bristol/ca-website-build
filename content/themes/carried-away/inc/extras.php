<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package carried-away
 */

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 *
 * @param array $args Configuration arguments.
 * @return array
 */
function carried_away_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'carried_away_page_menu_args' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function carried_away_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'carried_away_body_classes' );

/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function carried_away_wp_title( $title, $sep ) {
	if ( is_feed() ) {
		return $title;
	}

	global $page, $paged;

	// Add the blog name
	$title .= get_bloginfo( 'name', 'display' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title .= " $sep $site_description";
	}

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title .= " $sep " . sprintf( __( 'Page %s', 'carried-away' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'carried_away_wp_title', 10, 2 );

/**
 * Sets the authordata global when viewing an author archive.
 *
 * This provides backwards compatibility with
 * http://core.trac.wordpress.org/changeset/25574
 *
 * It removes the need to call the_post() and rewind_posts() in an author
 * template to print information about the author.
 *
 * @global WP_Query $wp_query WordPress Query object.
 * @return void
 */
function carried_away_setup_author() {
	global $wp_query;

	if ( $wp_query->is_author() && isset( $wp_query->post ) ) {
		$GLOBALS['authordata'] = get_userdata( $wp_query->post->post_author );
	}
}
add_action( 'wp', 'carried_away_setup_author' );

add_theme_support( 'post-thumbnails' );

function codex_product_init() {
	$labels = array(
		'name'               => _x( 'Products', 'post type general name', 'carried-away' ),
		'singular_name'      => _x( 'Product', 'post type singular name', 'carried-away' ),
		'menu_name'          => _x( 'Products', 'admin menu', 'carried-away' ),
		'name_admin_bar'     => _x( 'Product', 'add new on admin bar', 'carried-away' ),
		'add_new'            => _x( 'Add New', 'product', 'carried-away' ),
		'add_new_item'       => __( 'Add New Product', 'carried-away' ),
		'new_item'           => __( 'New Product', 'carried-away' ),
		'edit_item'          => __( 'Edit Product', 'carried-away' ),
		'view_item'          => __( 'View Product', 'carried-away' ),
		'all_items'          => __( 'All Products', 'carried-away' ),
		'search_items'       => __( 'Search Products', 'carried-away' ),
		'parent_item_colon'  => __( 'Parent Products:', 'carried-away' ),
		'not_found'          => __( 'No books found.', 'carried-away' ),
		'not_found_in_trash' => __( 'No books found in Trash.', 'carried-away' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'product' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'post-thumbnails' )
	);

	register_post_type( 'product', $args );
}

add_action( 'init', 'codex_product_init' );
