



<div id="post-image-container">

	<div id="post-image">
		

		<?php the_post_thumbnail('single_post') ?>
		<?php wp_reset_query(); ?>

		<div class="post-image-category">
			<?php echo get_the_category_list(); ?>
		</div>

	</div>



	<div class="post-image-caption">

		<?php the_post_thumbnail_caption(); ?>
	

	</div>


	


</div>




