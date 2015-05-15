<?php
get_header();
?>

<div id="main">
<div id="main-padding">

	
	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">

	
	<?php get_template_part( 'template/content', 'post-image' ); ?>		
	
	<?php get_template_part( 'template/content', 'content' ); ?>	
	

	</div>

	<div class="col-xs-12 col-sm-12 col-md-4">
	
	<div id="sidebar">
	
		<?php get_sidebar( 'side-form' ); ?>

	</div> <!-- #sidebar -->
	 
		
	</div>

</div>

</div>
<?php
get_footer();
?>