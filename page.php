<?php
get_header();
?>

<?php get_template_part( 'template', 'page-header' ); ?> 

<div id="main">
    <div id="main-padding">

	
	<div class="col-xs-12 col-sm-12 col-md-8 col-xs-8">

		<?php get_template_part( 'template', 'content' ); ?> 

	</div>

	<div id="sidebar" class="col-xs-12 col-sm-12 col-md-4 col-xs-4">
		<?php // get_template_part( 'template', 'full-width-form' ); ?> 
	</div>

	
	</div>
	</div></div>
<?php
get_footer();
?>