<?php

/*
Template Name: Page - Product (Chlorella)
*/

get_header();
?>

<?php get_template_part( 'template', 'page-header' ); ?> 

<div id="main">
    <div id="main-padding">

	<?php $product_name = strtolower(get_post_meta($post->ID, 'ma_product_name', true))  ?>
<?php
	$args = array( 'post_type' => 'ma_custom_pro_sec', 'posts_per_page' => 100 );
	$loop = new WP_Query( $args );
	while ($loop->have_posts()) : $loop->the_post(); ?>
<div class="product-section product-top-section">

	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<p class="product-excerpt"> 
			<?php echo get_post_meta( $post->ID, 'ma_ta_section_one_content', true ); ?>
			<!--
			Chlorella (pyreinodosa) - garantert beste kvalitet fra samme kilde som det dyreste merke du får i helskosthandelen, til under 1/3 av prisen.
			<br>
			vakuumpakket solenergi. Hel mat, 100% naturlig. Supertilskuddet som har en mer komplett sammensetning, og rikere innhold på de viktigste næringemnene enn noe annet matemne man kjenner. Renser, reparerer og gir deg energi i hverdagen. 3 gram hver dag tilsvarer 3-5 kilo grønt, avhengig av sammensetning.
			-->
		</p>
	</div>		

	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<img class="product-image-top" src="<?php echo get_post_meta( $post->ID, 'ma_ta_section_one_image', true )?>">
	</div>

	
</div> <!-- .product-section -->


<div class="product-section">

	<div class="col-xs-12 col-sm-12 col-md-push-6 col-md-6 col-lg-push-6 col-lg-6">
		<h2><?php echo get_post_meta( $post->ID, 'ma_ta_section_two_title', true )?><!--Hva kan Chlorella gjøre?--></h2>

		<ul class="product-benefit-list">
		<?php echo get_post_meta( $post->ID, 'ma_ta_section_two_content', true ); ?>
		<!--
			<li>Få sår og småskader til å gror raskere</li>
			<li>Styrker immunforsvaret</li>
			<li>Styrker leverfunksjonen, og hjelper kroppen med å fjerne giftstoffer</li>
			<li>Hjelper kroppen å ta opp næring</li>
			<li>Styrker hud, hår og negler</li>
			<li>Normalisere blodtrykk</li>
			<li>Redusere stress</li>
			<li>Er eneste, kjente plantekilde til vitamin B-12 (kobalamin)</li>
			<li>Dekker behovene for «5 om dagen»</li>
		-->
		</ul>

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
<?php endwhile; ?>

<div id="no-border-bottom"  class="product-section">

<?php get_sidebar( 'bottom-form' ); ?>	

</div> <!-- .product-section -->	

	</div></div></div>
<?php
get_footer();
?>