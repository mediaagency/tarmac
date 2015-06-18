<?php

/*
Template Name: Page - Success
*/

get_header();
?>

<div id="main">
    <div id="main-padding">


<div class="success-image-section">
	<div class="success-top-padding"></div>
	<div class="success-image-container">
		<h1 class="not-found-titel">404</h1>
	</div>  <!-- .success-image-container -->
</div> <!-- .success-image-section -->

<div class="success-text-section">

	
	<div class="reprint-section-header">
		<h1 class="success-text-heading">Har du gått deg bort?</h1>
		<p>Vi fant dessverre ikke siden du leter etter. <br>For å gå tilbake til forsiden, kan du klikke på knappen under.</p>
	</div>

	<div class="reprint-section-header">
		<div class="col-xs-8 col-xs-push-2">
			<a  href="<?php echo site_url(); ?>" class="not-found-button">Tilbake til forsiden</a>
		</div>
	</div>

</div>


<div class="success-related-container">

	<div class="reprint-section-header">
		<h2 class="reprint-section-heading">Nye artikler</h2>
		<p class="reprint-section-description">Finn ut mer om våre produkter.</p>
	</div>
	<?php get_template_part( 'template/content', 'latest-posts' ); ?> 
</div>

	</div></div></div>
<?php
get_footer();
?>