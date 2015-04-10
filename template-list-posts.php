

<div <?php post_class(); ?>>

<div class="reprint-post-list-row">
	
			
		<?php $count = 0; // Add the counter ?> 

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php 

		$count++; // Add the counter
	    
	    if ( 0 == $count%4 ) { // echo a row for every 3 post
        echo '</div><div class="reprint-post-list-row">';
    	}

		?>
			<div class="reprint-post-list-single col-xs-12 col-sm-6 col-md-4 col-lg-4">
			
			<a href="<?php the_permalink() ?>" class="reprint-post-list-thumbnail-link">
			<?php the_post_thumbnail('fp_article') ?>
			</a>

			<a href="<?php the_permalink() ?>" class="reprint-post-list-heading-link">
			<h2><?php the_title(); ?></h2>	
			</a>

			<?php echo get_the_category_list(); ?>
			
			<a href="<?php the_permalink() ?>" class="reprint-post-list-excerpt-link">
			<?php the_excerpt(); ?>
			</a>



			</div>
			
		<?php  	endwhile;	endif; 	?>

		<?php wp_reset_query(); ?>

		</div> <!-- .clear -->

</div>