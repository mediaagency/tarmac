




<div class="costumer-stories-container col-xs-12 col-sm-12 col-md-push-1 col-md-10">


<?php 

$args = array(
    'posts_per_page' => 3,
    'offset' => 0,
    'category_name' => 'kundehistorier',
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'post',
    'post_status' => 'publish',
    'suppress_filters' => true );

  $the_query = new WP_Query( $args ); ?>

  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

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

  <?php endwhile; ?>
  <?php wp_reset_query(); ?>

</div> <!-- .costumer-stories-container-->