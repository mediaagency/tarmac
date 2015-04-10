<?php

/*
Template Name: Page - Success
*/

get_header();
?>


<?php $product_name = get_post_meta($post->ID, 'ma_product_name', true) ?>

<div id="main">
    <div id="main-padding">


<div class="success-image-section">
	<div class="success-top-padding"></div>
	<div class="success-image-container">
		<img src="<?php echo get_stylesheet_directory_uri() ?>/img/success-image.png">
	</div>  <!-- .success-image-container -->
</div> <!-- .success-image-section -->

<div class="success-text-section">
	<h1 class="success-text-heading">Takk for din bestilling! </h1>

	<ul class="success-list">
		<li>Vi har mottatt din ordre.</li>
		<li>Du vil motta pakken med <?php echo ucwords($product_name); ?> innen 2 uker.</li>
	</ul>

	
</div>

<div class="success-facbook section-border">
	
	<h1>Del <?php echo ucwords($product_name); ?> med vennene dine!</h1>

	

	<div class="fb-share-image-container">


		<img src="<?php echo get_stylesheet_directory_uri() . '/img/product_powder_' . $product_name . '.jpg' ?>">

	</div>
	
	<div class="fb-share-button-container">
			<?php $share_url = site_url() . '/'. strtolower($product_name) . '-fb/'; ?>	
			
			
			<a class="fb-share-button" href="<?php echo $share_url ?>" 
			target="popup" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php echo $share_url ?>','name','width=600,height=400')">
			
			Del <?php echo ucwords($product_name); ?> på Facebook</a>


			<?php $tags = get_the_tags(); 

				echo $tags[1];

			 ?>	


			
	</div> <!-- .fb-share-button-container -->

</div>


<div class="success-related-container">

	<div class="reprint-section-header">
		<h2 class="reprint-section-heading">Relevante artikler</h2>
		<p class="reprint-section-description">Les mer om våre produkter!</p>
	</div>

	<?php get_template_part( 'template/content', 'latest-posts' ); ?> 
</div>

	</div></div></div>
<?php
get_footer();
?>