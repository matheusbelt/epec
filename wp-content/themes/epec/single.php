<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package BeOnePage
 */

get_header(); ?>

	<section class="blog" id="post-with-featured-image">

	<div class="container-fluid bg-textura">
		<div class="title col-md-8 col-sm-10 col-xs-12">
			<h2 class="center">BLOG <strong>EPEC</strong></h2>
			<hr>			
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
				<div class="col-md-9 bg-white">
						<div class="pe-container pe-block">
					<div class="post-126 post type-post status-publish format-standard hentry category-demo-articles tag-article tag-demo tag-image-2 post post-single">

		<div class="post-title">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h3 class="tblog"><?php the_title(); ?></h3>
			<hr class="hr-post"> </hr>
			
		</div>

	<div class="post-meta">
			<div class="post-meta-date">
				
					<i class="fa fa-clock-o"> <?php the_date(); ?></i>
					
					</div>

			<div class="post-meta-comments">
				<i class="fa fa-comment"></i> <a href=""><a href="<?php the_permalink(); ?>"><?php comments_popup_link('Sem comentários', '1 Comentário', '% Comentários'); ?></a>
			</div>
		</div>

			<div class="post-media">

							<div class="image-container">

								<a href="<?php the_permalink(); ?>" class="pp" data-target="flare">
									<img class="img-responsive" alt="" width="850" height="478" src="<?php the_post_thumbnail(); ?>"></a>

							</div>
			</div>

		<div class="post-body pe-wp-default">
			<?php the_content(); ?>
					</div>

			<div class="post-meta-tags">
				<?php the_tags( ' Tags: ','  ' ); ?></a>			</div>

		
	</div>
				
	<div class="col-md-6" align="left"><p><b>POST ANTERIOR</b></p> </div>
         <div class="col-md-6 " align="right "><p><b>POST RECENTE</b></p></div>
          <div class="col-md-6 post.name" align="left "><?php previous_post_link(); ?> </div>
	 <div class="col-md-6 post.name" align="right"><p><?php next_post_link(); ?></p></div>
	
	<div class="comentarios"><?php comments_template(); ?></div>

		<?php endwhile; endif; ?>
				</div>

		</div>
<div class="col-md-3 sidebar">        
	<?php get_sidebar( sidebar_right ); ?>
</div>

	</div>

</section>
<?php get_footer(); ?>
