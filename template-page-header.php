


<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID )); // Get bg-image url ?> 
<div id="page-header" class="fluid-container" style="background-image: url('<?php echo $url; ?>');">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<h1><?php the_title(); ?></h1>
		<?php if( @get_post_meta( $post->ID, 'ma_ta_section_header_onoff', true ) == 'ON' ):  ?>
			<?php echo @get_post_meta( $post->ID, 'ma_ta_section_header_btn_text', true ); ?>
			<?php echo @get_post_meta( $post->ID, 'ma_ta_section_header_sub', true ); ?>
		<?php endif; ?>
	<?php endwhile;	endif; ?>

</div>

