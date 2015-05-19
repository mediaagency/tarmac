




<div class="costumer-stories-container col-xs-12 col-sm-12 col-md-push-2 col-md-10">


<?php 

$args = array(
    'posts_per_page' => 3,
    'offset' => 0,
    'category_name' => get_theme_mod( 'costum_fp_section_btn_link_2'),
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'post',
    'post_status' => 'publish',
    'suppress_filters' => true );

  $the_query = new WP_Query( $args ); ?>

  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

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
	
  <?php endwhile; ?>
  <?php wp_reset_query(); ?>

</div> <!-- .costumer-stories-container-->

