<?php

/*
Template Name: Page - Product (Spirulina)
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
			Spirulina - et blågrønt energipulver som er proppfult av enzymer og raskt omsettelig supernæring. Vakuumpakket i 250g. aluminiumspose.
			<br>
			Blågrønne alger, proppfull av aktive enzymer og aminosyrer som gi rask energi. Blandet i en smothie, eller et glass juice gir det deg optimal start på dagen. Virker synergistisk sammen med Chlorella
		</p>

	</div>		

	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<img class="product-image-top" src="<?php echo get_stylesheet_directory_uri() ?>/img/product_powder_<?php the_slug(); ?>.jpg">
	</div>

	
</div> <!-- .product-section -->


<div class="product-section">

	<div class="col-xs-12 col-sm-12 col-md-push-6 col-md-6 col-lg-push-6 col-lg-6">
		<h2>Hva gjør Spirulina?</h2>

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

		
		<h2>Kort om Spirulina</h2>
		Spirulina (platensis) er en blågrønn alge som forekommer naturlig i alkaliske ferskvann, og en av de rikeste og mest mangfoldige næringskildene man kjenner.
		
		<h3>Ønsker du å vite mer?</h3>

		<p>
		Hvis du ønsker å vite mer om innholdsstoffene i Spirulina kan du <a href="<?php echo site_url(); ?>/fakta-om-spirulina">lese på vår faktaside</a> 


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