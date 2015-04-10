



<?php query_posts('posts_per_page=4&category_name=naeringsstoffer&post_status=publish,future');?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="article-single col-xs-12 col-sm-6 col-md-3">
	<a href="<?php the_permalink() ?>" class="article-single-thumbnail-link">
		<?php the_post_thumbnail('fp_article') ?>
	</a>

	<a href="<?php the_permalink() ?>" class="article-single-heading-link">
		<h2><?php the_title(); ?></h2>	
	</a>

	<a href="" class="article-single-text-link">
		<p> Vivamus vitae semper tellus. Ut non elit quis justo accumsan pellentesque. Pellentesque sollicitudin vehicula volutpat. Vestibulum euismod gravida enim, nec maximus nibh pulvinar nec. Proin ullamcorper volutpat ex, vel ultrices turpis.</p>
	</a>
</div> <!-- .article-single -->


<?php endwhile; else: endif; ?>