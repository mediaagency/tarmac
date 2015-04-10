<?php
get_header();
?>

<div id="main">
<div id="main-padding">

	
	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">

	
	<?php get_template_part( 'template/content', 'post-image' ); ?>		
	
	<?php get_template_part( 'template/content', 'content' ); ?>	
	

	</div>

	<div class="col-xs-12 col-sm-12 col-md-4 col-xs-4">
	
	<div id="sidebar">
		<div class="sticky-side-container">
		<h1>sidebar</h1>
		</div> <!-- .sticky-side-container -->

	</div> <!-- #sidebar -->
	 
		
	</div>

</div>
	</div>
<?php
get_footer();
?>