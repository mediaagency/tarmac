<?php
get_header();

?>

<?php get_template_part( 'template', 'hero-image' ); ?> 

<div id="main">
    <div id="main-padding">


<div class="reprint-section reprint-section-padding">
	
	<div class="reprint-section-header">
		<h1 class="reprint-section-heading">Vår supermat</h1>
		<p class="reprint-section-description">Finn ut mer om vår Chlorella og Spirulina.</p>
	</div>

	<div class="reprint-product-container">
		
		<div class="frontpage-product-single col-xs-12 col-sm-6">
			<div class="frontpage-product-single-color"> 

			<a href="<?php echo site_url(); ?>/chlorella" class="frontpage-product-thumbnail-link">
				<img src="<?php echo get_stylesheet_directory_uri().'/img/product_small_chlorella.jpg' ?>">
			</a>
			<a href="<?php echo site_url(); ?>/chlorella" class="frontpage-product-logo-link">
				<img src="<?php echo get_stylesheet_directory_uri().'/img/logo_chlorella.png' ?>">
			</a>
			

			<a href="" class="frontpage-product-title-link">
				<h2>Energi</h2>
			</a>

			<p>Chlorella er tettpakket med energi <br/>og viktige næringstoffer.<p>


			<div class="frontpage-product-button-container">
				<a class="frontpage-product-button" href="<?php echo site_url(); ?>/chlorella">
					Les mer
				</a>	
				<a class="frontpage-product-button" href="<?php echo site_url(); ?>/#kjop_supermat">
					Kjøp
				</a>	
			</div>
			</div> <!-- .frontpage-product-single-color -->
		</div> <!-- .frontpage-product-single -->

		<div class="frontpage-product-single col-xs-12 col-sm-6">
			<div class="frontpage-product-single-color"> 

			<a href="<?php echo site_url(); ?>/spirulina" class="frontpage-product-thumbnail-link">
				<img src="<?php echo get_stylesheet_directory_uri().'/img/product_small_spirulina.jpg' ?>">
			</a>
			<a href="<?php echo site_url(); ?>/spirulina" class="frontpage-product-logo-link">
				<img src="<?php echo get_stylesheet_directory_uri().'/img/logo_spirulina.png' ?>">
			</a>
			

			<a href="" class="frontpage-product-title-link">
				<h2>Reparasjon</h2>
			</a>

			<p>Spirulina inneholder næringstoffer<br/>som kan hjelpe kroppen.<p>

			<div class="frontpage-product-button-container">
				<a class="frontpage-product-button" href="<?php echo site_url(); ?>/spirulina">
					Les mer
				</a>	
				<a class="frontpage-product-button" href="<?php echo site_url(); ?>/#kjop_supermat">
					Kjøp
				</a>	
			</div>
		</div> <!-- .frontpage-product-single-color -->
		</div> <!-- .frontpage-product-single -->

	</div>
</div>




<div class="reprint-section reprint-section-padding">
	
	<div class="reprint-section-header">
		<h1 class="reprint-section-heading">Fordeler med supermat</h1>
		<p class="reprint-section-description">Les mer om fordelen med å spise supermat</p>
		
	</div>

	<div class="frontpage-benefit-container col-xs-12 col-sm-12 col-md-push-1 col-md-10">
		<div class="benefit-single">
			<a href="" class="benefit-thumbnail-link">
				<img class="benefit-thumbnail" src="<?php echo get_stylesheet_directory_uri().'/img/fruit.jpg' ?>">
			</a>
			<span class="benefit-single-content">
				<a href="" class="benefit-single-heading-link">
					<h2 class="benefit-single-heading">Full av viktige næringstoffer</h2>
				</a>
				<a href="" class="benefit-single-text-link">
					<p class="benefit-single-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam fermentum egestas tortor, et lobortis ex porttitor eget. Etiam semper aliquet ex, sed dapibus nisl mattis in. Duis accumsan pulvinar lorem, vel euismod quam gravida vitae. Nulla luctus nunc tristique, suscipit eros ut, convallis lectus. Nullam vitae risus at mauris facilisis auctor at eget massa. </p>
				</a>
			</span>
		</div>
		<div class="benefit-single">
			<a href="" class="benefit-thumbnail-link">
				<img class="benefit-thumbnail" src="<?php echo get_stylesheet_directory_uri().'/img/fruit.jpg' ?>">
			</a>
			<span class="benefit-single-content">
				<a href="" class="benefit-single-heading-link">
					<h2 class="benefit-single-heading">Full av viktige næringstoffer</h2>
				</a>
				<a href="" class="benefit-single-text-link">
					<p class="benefit-single-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam fermentum egestas tortor, et lobortis ex porttitor eget. Etiam semper aliquet ex, sed dapibus nisl mattis in. Duis accumsan pulvinar lorem, vel euismod quam gravida vitae. Nulla luctus nunc tristique, suscipit eros ut, convallis lectus. Nullam vitae risus at mauris facilisis auctor at eget massa. </p>
				</a>
			</span>
		</div>
		<div class="benefit-single">
			<a href="" class="benefit-thumbnail-link">
				<img class="benefit-thumbnail" src="<?php echo get_stylesheet_directory_uri().'/img/fruit.jpg' ?>">
			</a>
			<span class="benefit-single-content">
				<a href="" class="benefit-single-heading-link">
					<h2 class="benefit-single-heading">Full av viktige næringstoffer</h2>
				</a>
				<a href="" class="benefit-single-text-link">
					<p class="benefit-single-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam fermentum egestas tortor, et lobortis ex porttitor eget. Etiam semper aliquet ex, sed dapibus nisl mattis in. Duis accumsan pulvinar lorem, vel euismod quam gravida vitae. Nulla luctus nunc tristique, suscipit eros ut, convallis lectus. Nullam vitae risus at mauris facilisis auctor at eget massa. </p>
				</a>
			</span>
		</div>	

	</div>

</div> <!-- .reprint-section -->



<div class="reprint-section reprint-section-padding">
	
	<div class="reprint-section-header">
		<h1 class="reprint-section-heading">Næringstoffer</h1>
		<p class="reprint-section-description">Få mer informasjon om næringstoffene i vår supermat.</p>
	</div>

	<div class="frontpage-articles-container">


	<?php get_template_part( 'template', 'fp-articles' ); ?> 	

	<div class="frontpage-button-container frontpage-button-container-margin">
		<a href="<?php echo site_url(); ?>/category/naeringsstoffer" class="frontpage-button">
			Les mer
		</a>
	</div> <!-- .frontpage-button-container  -->

	</div> <!-- .frontpage-articles-container -->
</div>

<div class="reprint-section reprint-section-padding">
	
	<div class="reprint-section-header">
		<h1 class="reprint-section-heading">Kundehistorier</h1>
		<p class="reprint-section-description">Lær om våre kunders erfaring med supermat.</p>
		
	</div>

	<?php get_template_part( 'template/content', 'product-stories' ); ?>

	<div class="frontpage-button-container frontpage-button-container-margin">
		<a href="<?php echo site_url(); ?>/category/kundehistorier" class="frontpage-button">
			Les mer
		</a>
	</div> <!-- .frontpage-button-container  -->



</div> <!-- .reprint-section -->

<div id="buy_super_food">
	<a name="kjop_supermat"></a>
</div>


<div class="reprint-section reprint-section-padding no-border">
	
	<div class="reprint-section-header">
		<h1 class="reprint-section-heading">Velg din supermat</h1>
		<p class="reprint-section-description">Klikk på den supermaten som du ønsker å kjøpe</p>
		
	</div>

	
	<?php get_template_part( 'template', 'full-width-form' ); ?> 


</div>	<!-- .reprint-section -->

</div></div>



<?php
get_footer();
?>