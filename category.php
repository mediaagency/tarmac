<?php
get_header();
?>

<div id="main">
    <div id="main-padding">

<div class="reprint-section reprint-section-padding">
	
	<div class="reprint-section-header">
		<h1 class="reprint-section-heading"><?php single_cat_title(); ?></h1>
		<span class="reprint-section-description"><?php echo category_description(); ?></span>
	</div>

	<div class="category-list-post-container">


		<?php get_template_part( 'template', 'list-posts' ); ?> 

	</div> <!-- .category-list-post-container -->

</div>	<!-- .reprint-section -->


	
	</div>
	</div></div>
<?php
get_footer();
?>