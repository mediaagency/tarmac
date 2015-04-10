




<div class="costumer-stories-container col-xs-12 col-sm-12 col-md-push-1 col-md-10">

	<?php query_posts('category_name=kundehistorier&post_status=publish,future');?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="costumer-stories-single">
		<div class="cs-visual">
			<a href="<?php the_permalink() ?>" class="cs-thumbnail-link">
				<?php the_post_thumbnail('square') ?>
			</a>		
		</div> <!-- .cs-visual -->

		<div class="cs-content">
			<a href="<?php the_permalink() ?>" class="cs-heading-link">
				<h2><?php the_title(); ?></h2>	
			</a>
			<a href="<?php the_permalink() ?>" class="cs-excerpt-link">
				<?php the_excerpt(); ?>
			</a>				
		</div> <!-- .cs-content -->
	
	</div> <!-- .costumer-stories-single -->
	<?php endwhile; else: endif; ?>

</div> <!-- .costumer-stories-container-->