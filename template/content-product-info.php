




<div class="costumer-stories-container col-xs-12 col-sm-12 col-md-push-2 col-md-10">

	<?php query_posts('category_name=informasjon&post_status=publish,future');?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class="benefit-single">
			<a href="<?php the_permalink() ?>" class="benefit-thumbnail-link">
				<?php the_post_thumbnail('fp_article') ?>
			</a>
			<span class="benefit-single-content">
				<a href="<?php the_permalink() ?>" class="benefit-single-heading-link">
					<h2 class="benefit-single-heading"><?php the_title(); ?></h2>
				</a>
				<a href="<?php the_permalink() ?>" class="benefit-single-text-link">
					<p class="benefit-single-text">
						<?php the_excerpt(); ?>
					</p>
				</a>
			</span>
		</div>
	
	<?php endwhile; else: endif; ?>

</div> <!-- .costumer-stories-container-->

