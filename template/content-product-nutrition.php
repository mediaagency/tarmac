


<?php 

$args = array(
    'posts_per_page' => 4,
    'offset' => 0,
    'category_name' => get_theme_mod( 'costum_fp_section_btn_link_3'),
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'post',
    'post_status' => 'publish',
    'suppress_filters' => true );

  $the_query = new WP_Query( $args ); ?>

  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

<div class="article-single col-xs-12 col-sm-6 col-md-3">
	<a href="<?php the_permalink() ?>" class="article-single-thumbnail-link">
		<?php the_post_thumbnail('fp_article'); ?>
	</a>

	<a href="<?php the_permalink() ?>" class="article-single-heading-link">
		<h2><?php the_title(); ?></h2>	
	</a>

	<a href="" class="article-single-text-link">
		<?php echo the_excerpt(); ?>
	</a>
</div> <!-- .article-single -->


  <?php endwhile; ?>
  <?php wp_reset_query(); ?>
