<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package BeOnePage
 */

get_header(); ?>

	<header class="page-header img-background clearfix">
	<div class="container-fluid bg-textura">
			<div class="title col-md-8 col-sm-10 col-xs-12">
				<h2 class="center" ><h1 class="page-title"><?php printf( esc_html__( 'Resultados de Pesquisa para: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1></h2>
				<div class="line line-small"></div>			
			</div>
	</header><!-- .page-header -->

	<div class="container">
		<div class="row">
			<div class="col-md-9 bg-white">
				<div id="primary" class="content-area search-list">
					<main id="main" class="site-main" role="main">
						<?php
							if ( have_posts() ) {
								while ( have_posts() ) : the_post();
									/**
									 * Run the loop for the search to output the results.
									 * If you want to overload this in a child theme then include a file
									 * called content-search.php and that will be used instead.
									 */
									get_template_part( 'template-parts/content', 'search' );

								endwhile;

								beonepage_numeric_pagination();

								beonepage_posts_navigation();

						} else {
							get_template_part( 'template-parts/content', 'none' );
						}
					?>
					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!-- col-md-9 -->

			<?php get_sidebar(); ?>
		</div><!-- .row -->
	</div><!-- .container -->

<?php get_footer(); ?>
