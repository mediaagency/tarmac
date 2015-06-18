<?php
get_header();

?>

<?php get_template_part( 'template', 'hero-image' ); ?> 

<div id="main">
    <div id="main-padding">


<div class="reprint-section reprint-section-padding">
	
	<div class="reprint-section-header">
		<h1 class="reprint-section-heading">
			<?php echo get_theme_mod( 'costum_fp_section_heading_1' ); ?>
		</h1>
		<p class="reprint-section-description">
			<?php echo get_theme_mod( 'costum_fp_section_excerpt_1' ); ?>
		</p>
	</div>

	<div class="reprint-product-container">
		
		<div class="frontpage-product-single col-xs-12 col-sm-6">
			<div class="frontpage-product-single-color"> 

			<a class="frontpage-product-thumbnail-link" href="<?php echo get_theme_mod( 'costum_fp_section_btn_link_chlorella_1' ); ?>">
				<img src="<?php echo get_stylesheet_directory_uri().'/img/product_small_chlorella.jpg' ?>">
			</a>
			<a class="frontpage-product-logo-link" href="<?php echo get_theme_mod( 'costum_fp_section_btn_link_chlorella_1' ); ?>">
				<img src="<?php echo get_stylesheet_directory_uri().'/img/logo_chlorella.png' ?>">
			</a>
			

			<a class="frontpage-product-title-link" href="<?php echo get_theme_mod( 'costum_fp_section_btn_link_chlorella_1' ); ?>">
				<h2>
					<?php echo get_theme_mod( 'costum_fp_section_heading_chlorella_1' ); ?>
				</h2>
			</a>

			<p>
				<?php echo get_theme_mod( 'costum_fp_section_excerpt_chlorella_1' ); ?>
			<p>

			<div class="frontpage-product-button-container">
				<a class="frontpage-product-button" href="<?php echo get_theme_mod( 'costum_fp_section_btn_link_chlorella_1' ); ?>">
					<?php echo get_theme_mod( 'costum_fp_section_btn_chlorella_txt_1' ); ?>
				</a>	
				<a class="frontpage-product-button" href="<?php echo get_theme_mod( 'costum_fp_section_btn_link_chlorella_11' ); ?>">
					<?php echo get_theme_mod( 'costum_fp_section_btn_chlorella_txt_11' ); ?>
				</a>		
			</div>
			</div> <!-- .frontpage-product-single-color -->
		</div> <!-- .frontpage-product-single -->

		<div class="frontpage-product-single col-xs-12 col-sm-6">
			<div class="frontpage-product-single-color"> 

			<a class="frontpage-product-thumbnail-link" href="<?php echo get_theme_mod( 'costum_fp_section_btn_link_spirulina_1' ); ?>">
				<img src="<?php echo get_stylesheet_directory_uri().'/img/product_small_spirulina.jpg' ?>">
			</a>
			<a class="frontpage-product-logo-link" href="<?php echo get_theme_mod( 'costum_fp_section_btn_link_spirulina_1' ); ?>">
				<img src="<?php echo get_stylesheet_directory_uri().'/img/logo_spirulina.png' ?>">
			</a>

			<a class="frontpage-product-title-link" href="<?php echo get_theme_mod( 'costum_fp_section_btn_link_spirulina_1' ); ?>">
				<h2>
					<?php echo get_theme_mod( 'costum_fp_section_heading_spirulina_1' ); ?>
				</h2>
			</a>

			<p>
				<?php echo get_theme_mod( 'costum_fp_section_excerpt_spirulina_1' ); ?>
			<p>

            <div class="frontpage-product-button-container">
                <a class="frontpage-product-button" href="<?php echo get_theme_mod( 'costum_fp_section_btn_link_spirulina_1' ); ?>">
                    <?php echo get_theme_mod( 'costum_fp_section_btn_spirulina_txt_1' ); ?>
                </a>    
                <a class="frontpage-product-button" href="<?php echo get_theme_mod( 'costum_fp_section_btn_link_spirulina_11' ); ?>">
                    <?php echo get_theme_mod( 'costum_fp_section_btn_spirulina_txt_11' ); ?>
                </a>        
            </div>
		</div> <!-- .frontpage-product-single-color -->
		</div> <!-- .frontpage-product-single -->

	</div>
</div>




<div class="reprint-section reprint-section-padding">
	
	<div class="reprint-section-header">
		<h1 class="reprint-section-heading">
			<?php echo get_theme_mod( 'costum_fp_section_heading_2' ); ?>
		</h1>
		<p class="reprint-section-description">
			<?php echo get_theme_mod( 'costum_fp_section_excerpt_2' ); ?>
		</p>
	</div>

	<div class="frontpage-benefit-container">
		
		<?php get_template_part( 'template/content', 'product-info' ); ?>

	</div> <!-- .frontpage-benefit-container  -->

	<div class="frontpage-button-container frontpage-button-container-margin">
		<a href="<?php echo site_url(); ?>/category/<?php echo get_theme_mod( 'costum_fp_section_btn_link_2' ); ?>" class="frontpage-button">
			<?php echo get_theme_mod( 'costum_fp_section_btn_txt_2' ); ?>
		</a>
	</div> <!-- .frontpage-button-container  -->

</div> <!-- .reprint-section -->



<div class="reprint-section reprint-section-padding">
	
	<div class="reprint-section-header">
		<h1 class="reprint-section-heading">
			<?php echo get_theme_mod( 'costum_fp_section_heading_3' ); ?>
		</h1>
		<p class="reprint-section-description">
			<?php echo get_theme_mod( 'costum_fp_section_excerpt_3' ); ?>
		</p>
	</div>

	<div class="frontpage-articles-container">


	<?php get_template_part( 'template/content', 'product-nutrition' ); ?>	

	<div class="frontpage-button-container frontpage-button-container-margin">
		<a href="<?php echo site_url(); ?>/category/<?php echo get_theme_mod( 'costum_fp_section_btn_link_3' ); ?>" class="frontpage-button">
			<?php echo get_theme_mod( 'costum_fp_section_btn_txt_3' ); ?>
		</a>
	</div> <!-- .frontpage-button-container  -->

	</div> <!-- .frontpage-articles-container -->
</div>

<div class="reprint-section reprint-section-padding">
	
	<div class="reprint-section-header">
		<h1 class="reprint-section-heading">
			<?php echo get_theme_mod( 'costum_fp_section_heading_4' ); ?>
		</h1>
		<p class="reprint-section-description">
			<?php echo get_theme_mod( 'costum_fp_section_excerpt_4' ); ?>
		</p>
	</div>

	<?php get_template_part( 'template/content', 'product-stories' ); ?>

	<div class="frontpage-button-container frontpage-button-container-margin">
		<a href="<?php echo site_url(); ?>/category/<?php echo get_theme_mod( 'costum_fp_section_btn_link_4' ); ?>" class="frontpage-button">
			<?php echo get_theme_mod( 'costum_fp_section_btn_txt_4' ); ?>
		</a>
	</div> <!-- .frontpage-button-container  -->



</div> <!-- .reprint-section -->

<div id="buy_super_food">
	<a name="kjop_supermat"></a>
</div>


<div id="no-border-bottom" class="reprint-section reprint-section-padding no-border">
	
	<div class="reprint-section-header">
		<h1 class="reprint-section-heading">
			<?php echo get_theme_mod( 'costum_fp_section_heading_5' ); ?>
		</h1>
		<p class="reprint-section-description">
			<?php echo get_theme_mod( 'costum_fp_section_excerpt_5' ); ?>
		</p>
	</div>

	

	<?php get_sidebar( 'bottom-form' ); ?>


</div>	<!-- .reprint-section -->

</div></div></div>



<?php
get_footer();
?>