<?php

/*
Template Name: Page - Blogg
*/

get_header();
?>
<div id="main">
<div id="main-padding">

	
	<div id="blogg-content" class="col-xs-12 col-sm-12 col-md-8 col-lg-8">

	
		<?php get_template_part( 'template/content', 'blogg-posts' ); ?> 
	

	</div> <!-- #blogg-content -->

	<div class="col-xs-12 col-sm-12 col-md-4 col-xs-4">
	
	<div id="sidebar">
	
		<?php get_sidebar( 'side-form' ); ?>

	</div> <!-- #sidebar -->
	 
		
	</div>

</div>

</div>
<?php
get_footer();
?>