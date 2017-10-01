<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package BeOnePage
 */

if ( ! function_exists( 'beonepage_posts_navigation' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 */
function beonepage_posts_navigation() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}
	?>
	<nav class="posts-navigation hidden-lg hidden-md hidden-sm clearfix" role="navigation">
		<h2 class="sr-only"><?php esc_html_e( 'Posts navigation', 'beonepage' ); ?></h2>
		<ul class="nav-links">

			<?php if ( get_next_posts_link() ) : ?>
			<li class="nav-previous"><?php next_posts_link( esc_html__( 'Older posts', 'beonepage' ) ); ?></li>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<li class="nav-next pull-right"><?php previous_posts_link( esc_html__( 'Newer posts', 'beonepage' ) ); ?></li>
			<?php endif; ?>

		</ul><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'beonepage_post_navigation' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 */
function beonepage_post_navigation() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );
	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="post-navigation clearfix" role="navigation">
		<h2 class="sr-only"><?php esc_html_e( 'Post navigation', 'beonepage' ); ?></h2>
		<ul class="nav-links">
			<?php
				previous_post_link( '<li class="nav-previous">%link</li>', '%title' );
				next_post_link( '<li class="nav-next pull-right">%link</li>', '%title' );
			?>
		</ul><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'beonepage_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function beonepage_posted_on() {
	$timebeonepagetring = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$timebeonepagetring = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$timebeonepagetring = sprintf( $timebeonepagetring,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		esc_html_x( 'Posted on %s', 'post date', 'beonepage' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $timebeonepagetring . '</a>'
	);

	$byline = sprintf(
		esc_html_x( 'by %s', 'post author', 'beonepage' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

}
endif;

if ( ! function_exists( 'beonepage_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function beonepage_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'beonepage' ) );
		if ( $categories_list && beonepage_categorized_blog() ) {
			printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'beonepage' ) . '</span>', $categories_list ); // WPCS: XSS OK.
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'beonepage' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'beonepage' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( esc_html__( 'Leave a comment', 'beonepage' ), esc_html__( '1 Comment', 'beonepage' ), esc_html__( '% Comments', 'beonepage' ) );
		echo '</span>';
	}

	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'beonepage' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function beonepage_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'beonepage_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'beonepage_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so beonepage_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so beonepage_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in beonepage_categorized_blog.
 */
function beonepage_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'beonepage_categories' );
}
add_action( 'edit_category', 'beonepage_category_transient_flusher' );
add_action( 'save_post',     'beonepage_category_transient_flusher' );
