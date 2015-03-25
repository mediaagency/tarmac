<?php
get_header();
?>

	<div class="entry-content">
		<article class="mb-xl">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div <?php post_class(); ?> >
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>

			</div>

			<?php  	endwhile;	endif;	?>
		</article>
	
	</div>
	</div></div>
<?php
get_footer();
?>