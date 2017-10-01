<div class="post-126 post type-post status-publish format-standard hentry category-demo-articles tag-article tag-demo tag-image-2 post post-single">
		<div class="post-title">
			<h3 class="tblog"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<hr class="hr-post">
		</div>
		<div class="post-meta">
			<div class="post-meta-date">
				<i class="fa fa-clock-o"></i> <a href="<?php the_permalink(); ?>" class="link-weak"><?php the_date(); ?></a>
			</div>
			<div class="post-meta-comments">
				<i class="fa fa-comment"></i> <a href="<?php the_permalink(); ?>" class="link-weak"><?php comments_popup_link('Sem comentários', '1 Comentário', '% Comentários'); ?></a>
			</div>
		</div>
		<div class="post-media">
			<div class="image-container">
					<a href="<?php the_permalink(); ?>" class="pp" data-target="flare">
						<img class="img-responsive" alt="" width="850" height="478" src="<?php the_post_thumbnail(); ?></a>
			</div>
		</div>
		<div class="post-body pe-wp-default">
			<p><?php the_excerpt(); ?> <a class="read-more-link" href="<?php the_permalink(); ?>">LEIA MAIS</a></p>
		</div>
		<div class="post-meta-tags">
			<?php the_tags( ' Tags: ','  ' ); ?></a>
		</div>