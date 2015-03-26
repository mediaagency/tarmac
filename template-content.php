

<div <?php post_class(); ?>>
	<article>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php  	endwhile;	endif; 	?>
	</article>
</div>