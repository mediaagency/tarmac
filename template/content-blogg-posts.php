



<div id="post-image-container">


	<?php query_posts('category_name=blogg');?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	

	<div id="post-image">
		

		<?php the_post_thumbnail('single_post') ?>

		<div class="post-image-category">
			<?php echo get_the_category_list(); ?>
		</div>

	</div> <!-- #post-image -->
	
	<div class="post-image-caption">
		<?php the_post_thumbnail_caption(); ?>
	</div> <!-- .post-image-caption -->


	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	  <header class="entry-header">
	  <a href="<?php echo get_the_permalink();?>">
	    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	   </a>
	  </header><!-- .entry-header -->

	  <div class="entry-content">
	    <?php the_content(); ?>
	    <hr>
	  </div><!-- .entry-content -->
		
	</article><!-- #post-## -->



	
	<?php endwhile; else: endif; ?>
	<?php wp_reset_query(); ?>



</div>




