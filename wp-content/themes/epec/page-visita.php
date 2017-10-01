<?php
/**
 *
 * Template Name: Visita
 *
 * @package WordPress
 * @subpackage Elabora
 * @since Elabora 2017
 */

get_header(); ?>

	<header id="visita" class="text-center">
		<div class="container">
			<div class="overlay">
				<div class="hero hero-small">
	              <h1>AGENDE SUA <br> VISITA TÉCNICA</h1>
      			</div>
    		</div>
    	</div>
  <!-- End Home Section -->	
	</header><!-- .page-header -->

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<section>
					<main role="main">
						<div class="col-md-6 visita-impacto">
							<h2 class="visita-h2"><?php the_field('titulo'); ?></h2>
							<div class="line line-visita"></div>
							<h3 class="visita-h3"><?php the_field('descricao'); ?></h3>
						</div>
						<div class="col-md-6 col-xs-12 formulario-visita" id="form-visita">
							<?php echo do_shortcode('[wpforms id="37"]'); ?>
						</div>
					</main><!-- #main -->
				</section><!-- #primary -->
			</div><!-- col-md-12 -->
		</div><!-- .row -->
	</div><!-- .container -->

<?php get_footer(); ?>
