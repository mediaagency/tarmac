<?php



get_header();
?>
<div id="product-page-header">
<?php get_template_part( 'template', 'page-header' ); ?> 
</div>

<div id="main">
    <div id="main-padding">

	<?php $product_name = strtolower(get_post_meta($post->ID, 'ma_product_name', true))  ?>
<div class="product-section product-top-section">

	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<span class="product-excerpt"> 
			<?php echo get_post_meta( $post->ID, 'ma_ta_section_one_content', true ); ?>
		</span>
	</div>		

	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<img class="product-image-top" src="<?php echo get_post_meta( $post->ID, 'ma_ta_section_one_image', true )?>">
	</div>

	
</div> <!-- .product-section -->


<div class="product-section">

	<div class="col-xs-12 col-sm-12 col-md-push-6 col-md-6 col-lg-push-6 col-lg-6">
		<h2><?php echo get_post_meta( $post->ID, 'ma_ta_section_two_title', true )?><!--Hva kan Chlorella gjøre?--></h2>

	
		<?php echo get_post_meta( $post->ID, 'ma_ta_section_two_content', true ); ?>



	</div>			

	<div class="col-xs-12 col-sm-12 col-md-pull-6 col-md-6 col-lg-pull-6 col-lg-6 ">
		<img class="product-image" src="<?php echo get_post_meta( $post->ID, 'ma_ta_section_two_image', true ); ?>">
	</div>

	
</div> <!-- .product-section -->


<div class="product-section product-bottom-section">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<img class="product-image-info" src="<?php echo get_post_meta( $post->ID, 'ma_ta_section_three_image', true ); ?>">
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

		
		<h2><!--Kort om Chlorella--><?php echo get_post_meta( $post->ID, 'ma_ta_section_three_title', true )?></h2>	
		
		<?php echo get_post_meta( $post->ID, 'ma_ta_section_three_content', true )?>

		<!--
		Chlorella er en éncellet ferskvannsalge som vokser best under 27 graders stabil varme, og kalles ofte “pakket solenergi.” Den har høyere konsentrasjon av essensielle næringsemner enn noe annet, kjent matemne.
		
		<h3>Ønsker du å vite mer?</h3>

		<p>
		Hvis du ønsker å vite mer om innholdsstoffene i Chlorella kan du <a href="<?php echo site_url(); ?>/fakta-om-chlorella">lese på vår faktaside</a> 
		</p>
		-->
		
				

	</div>		



	
</div> <!-- .product-section -->

<div id="no-border-bottom"  class="product-section">

<?php get_sidebar( 'bottom-form' ); ?>	

</div> <!-- .product-section -->	

	</div></div></div>
<?php
get_footer();
?>