<?php

/*
Template Name: Page - Product 
*/

get_header();
?>

<?php get_template_part( 'template', 'page-header' ); ?> 

<div id="main">
    <div id="main-padding">

	<?php $product_name = strtolower(get_post_meta($post->ID, 'ma_product_name', true))  ?>


<div class="product-section product-top-section">

	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<p class="product-excerpt">
		<?php echo $product_name ?>er en éncellet ferskvannsalge som vokser best under 27 graders stabil varme, og kalles ofte “pakket solenergi.” Den har høyere konsentrasjon av essensielle næringsemner enn noe annet, kjent matemne. </p>
	</div>		

	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<img class="product-image-top" src="<?php echo get_stylesheet_directory_uri() ?>/img/product_powder_<?php the_slug(); ?>.jpg">
	</div>

	
</div> <!-- .product-section -->


<div class="product-section">

	<div class="col-xs-12 col-sm-12 col-md-push-6 col-md-6 col-lg-push-6 col-lg-6">
		<h2>Hva gjør <?php echo $product_name ?>?</h2>

		<ul class="product-benefit-list">
			<li>Dyrket 100% økologisk.</li>
			<li>Kan motvirke kroniske betennelser</li>
			<li>Kan beskytte cellene i kroppen mot oksidativt stress</li>
			<li>Kan virke smertestillende på såre muskler og ledd</li>
			<li>Kan forebygge kroniske sykdommer</li>
			<li>Kan styrke immunforsvaret</li>
			<li>Kan bidra til normal blodlevring</li>
		</ul>
		
	</div>			

	<div class="col-xs-12 col-sm-12 col-md-pull-6 col-md-6 col-lg-pull-6 col-lg-6 ">
		<img class="product-image" src="<?php echo get_stylesheet_directory_uri() ?>/img/produkt_tabletter_<?php echo $product_name ?>.jpg">
	</div>

	
</div> <!-- .product-section -->


<div class="product-section product-bottom-section">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<img class="product-image-info" src="<?php echo get_stylesheet_directory_uri() ?>/img/prod-info.jpg">
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

		
		<h2>Kort om <?php echo $product_name ?></h2>
		Chlorella er en éncellet ferskvannsalge som vokser best under 27 graders stabil varme, og kalles ofte “pakket solenergi.” Den har høyere konsentrasjon av essensielle næringsemner enn noe annet, kjent matemne. 
		<?php the_slug(); ?>
		
		<h3>Ønsker du å vite mer?</h3>

		<p>
		Hvis du ønsker å vite mer om innholdsstoffene i <?php the_slug(); ?> kan du <a href="<?php echo site_url(); ?>/fakta-om-chlorella">lese på vår faktaside</a> 


		</p>

		
				

	</div>		



	
</div> <!-- .product-section -->


<div id="no-border-bottom"  class="product-section">

<?php get_sidebar( 'bottom-form' ); ?>	

</div> <!-- .product-section -->	

	</div></div></div>
<?php
get_footer();
?>