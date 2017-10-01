
<div class="container wrap-port bg-textura">
		<ul class="tab-menu">
			<li><a href="#" data-click="all" id="all" class="col-md-3">Tudo</a></li>
			<li><a href="#" data-click="obra" class="col-md-3">Obras</a></li>
			<li><a href="#" data-click="relatorio" class="col-md-3">Relatórios</a></li>
			<li><a href="#" data-click="outros" class="col-md-3">Outros</a></li>
		</ul>

	<?php $allargs = array(
	'category_name' => 'obras, relatorio, outros',
	'posts_per_page' => 9,
	)
	?>
	<?php $all = new WP_Query( $allargs ) ?>
	<!-- Start the Loop. -->
	<?php if ( $all->have_posts() ) : while ( $all->have_posts() ) : $all->the_post(); ?>
		<?php
			if (has_post_thumbnail()) {
			    $thumbnail_data = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'my-fun-size' );
			    $thumbnail_url = $thumbnail_data[0];
			}
		?>
		<div class="mestre">
			<div class="portfolio-categoria">
			<div class="item-portfolio col-md-4" data-target="all" style="background-image:url('<?php echo $thumbnail_url ?>'); background-repeat: no-repeat; background-size: cover; background-position: center;">
				<div class="item-info" style="filter: none;">
					<h3><?php the_title(); ?></h3>
					<div class="port-content"><?php the_excerpt(); ?></div>
				</div>
			</div>
			</div>
			<div class="col-md-12 port-expand">
				<div class="col-md-6 port-thumb" style="background-image:url('<?php echo $thumbnail_url ?>'); background-repeat: no-repeat; background-size: cover; background-position: center; "></div>
				<div class="col-md-6 port-text">
					<h3><?php the_title(); ?></h3>
					<div><?php the_content(); ?></div>
				</div>
			</div>
		</div>
	 <?php endwhile; else: endif; ?>
	 <?php wp_reset_query(); wp_reset_postdata(); ?>

	<?php $obargs = array(
	'category_name' => 'obras',
	'posts_per_page' => 9,
	)
	?>
	<?php $obras = new WP_Query( $obargs ) ?>
	<!-- Start the Loop. -->
	<?php if ( $obras->have_posts() ) : while ( $obras->have_posts() ) : $obras->the_post(); ?>
		<?php
			if (has_post_thumbnail()) {
			    $thumbnail_data = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'my-fun-size' );
			    $thumbnail_url = $thumbnail_data[0];
			}
		?>
		<div class="mestre">
			<div class="portfolio-categoria">
			<div class="item-portfolio col-md-4" data-target="obra" style="background-image:url('<?php echo $thumbnail_url ?>')">
				<div class="item-info">
					<h3><?php the_title(); ?></h3>
					<div class="port-content"><?php the_excerpt(); ?></div>
				</div>
			</div>
			</div>
			<div class="col-md-12 port-expand">
				<div class="col-md-6 port-thumb" style="background-image:url('<?php echo $thumbnail_url ?>')"></div>
				<div class="col-md-6 port-text">
					<h3><?php the_title(); ?></h3>
					<div><?php the_content(); ?></div>
				</div>
			</div>
		</div>
	 <?php endwhile; else: endif; ?>
	 <?php wp_reset_query(); wp_reset_postdata(); ?>

	
	<?php $reargs = array(
	'category_name' => 'relatorio',
	'posts_per_page' => 9,
	)
	?>
	<?php $relatorio = new WP_Query( $reargs ) ?>
	<!-- Start the Loop. -->
	<?php if ( $relatorio->have_posts() ) : while ( $relatorio->have_posts() ) : $relatorio->the_post(); ?>
		<?php
			if (has_post_thumbnail()) {
			    $thumbnail_data = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'my-fun-size' );
			    $thumbnail_url = $thumbnail_data[0];
			}
		?>
		<div class="mestre">
			<div class="portfolio-categoria">
			<div class="item-portfolio col-md-4" data-target="relatorio" style="background-image:url('<?php echo $thumbnail_url ?>')">
				<div class="item-info">
					<h3><?php the_title(); ?></h3>
					<div class="port-content"><?php the_excerpt(); ?></div>
				</div>
			</div>
			</div>
			<div class="col-md-12 port-expand">
				<div class="col-md-6 port-thumb" style="background-image:url('<?php echo $thumbnail_url ?>')"></div>
				<div class="col-md-6 port-text">
					<h3><?php the_title(); ?></h3>
					<div><?php the_content(); ?></div>
				</div>
			</div>
		</div>
	 <?php endwhile; else: endif; ?>
	 <?php wp_reset_query(); wp_reset_postdata(); ?>

	 <?php $otargs = array(
	'category_name' => 'outros',
	'posts_per_page' => 9,
	)
	?>
	<?php $outros = new WP_Query( $otargs ) ?>
	<!-- Start the Loop. -->
	<?php if ( $outros->have_posts() ) : while ( $outros->have_posts() ) : $outros->the_post(); ?>
		<?php
			if (has_post_thumbnail()) {
			    $thumbnail_data = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'my-fun-size' );
			    $thumbnail_url = $thumbnail_data[0];
			}
		?>
		<div class="mestre">
			<div class="portfolio-categoria">
			<div class="item-portfolio col-md-4" data-target="outros" style="background-image:url('<?php echo $thumbnail_url ?>')">
				<div class="item-info">
					<h3><?php the_title(); ?></h3>
					<div class="port-content"><?php the_excerpt(); ?></div>
				</div>
			</div>
			</div>
			<div class="col-md-12 port-expand">
				<div class="col-md-6 port-thumb" style="background-image:url('<?php echo $thumbnail_url ?>')"></div>
				<div class="col-md-6 port-text">
					<h3><?php the_title(); ?></h3>
					<div><?php the_content(); ?></div>
				</div>
			</div>
		</div>
	 <?php endwhile; else: endif; ?>
	 <?php wp_reset_query(); wp_reset_postdata(); ?>
</div>	
