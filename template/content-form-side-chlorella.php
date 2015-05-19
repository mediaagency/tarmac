


<div class="sb-form-section">
	  <div class="sb-form-header">
		   <ul class='tabs'>
			    <li>
			    	<a href='#tab1' class="tab">
			    		<img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo_chlorella.png">
			    	</a>
			    </li>
			    <li>
			    	<a href='#tab2' class="tab">
			    		<img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo_spirulina.png">
			    	</a>
			    </li>
		  </ul>	
	  </div> <!-- .frontpage-tab-header -->


	<div class="sb-form-tabs-container">
	  
	  <div id='tab1'>
	  	<div class="sb-form-tab-content">
	  		<div class="sb-form-container-top">
	  			<div class="sb-form-product " style="background-image: url(' <?php echo get_stylesheet_directory_uri() ?>/img/product_small_chlorella.jpg');">
					<div class="sb-form-product-text">
							<span class="form-argument argument-1">
								<?php echo get_theme_mod( 'theme_custom_form_selling_text1_1' ); ?>
							</span>
							<span class="form-argument argument-2">
								<?php echo get_theme_mod( 'theme_custom_form_selling_text2_1' ); ?>
							</span>
							<span class="form-argument argument-3">
								<?php echo get_theme_mod( 'theme_custom_form_selling_text3_1' ); ?>
								<?php echo get_theme_mod( 'price_chlorella' ); ?>!
							</span>
					</div>	  				
	  			</div>
			</div>
			<div class="sb-form-container-bottom">
				<div class="sb-form-sign-up-container ">
						<h4 class="widget-title-text-color widget-title-text-bg widget-title-size">
							<?php echo get_theme_mod( 'theme_custom_form_heading_1' ); ?>
						</h4>
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar_chlorella') ) : 
					endif; ?>
						<div class="disclaimer-container">
							<p class="disclaimer-info">
								<?php echo get_theme_mod( 'theme_custom_form_disclaimer_1' ); ?>
								<a href="<?php echo get_theme_mod( 'theme_custom_form_disclaimer_link_1' ); ?>">
									<?php echo get_theme_mod( 'theme_custom_form_disclaimer_link_text_1' ); ?>
								</a>		
							</p>
						</div> <!-- .disclaimer-container -->
				</div>
			</div>
	  	</div>
	  </div> <!-- #tab1 -->

	  <div id='tab2'>
	  	<div class="sb-form-tab-content">
	  		<div class="sb-form-container-top">
	  			<div class="sb-form-product " style="background-image: url(' <?php echo get_stylesheet_directory_uri() ?>/img/product_small_spirulina.jpg');">
					<div class="sb-form-product-text">
							<span class="form-argument argument-1">
								<?php echo get_theme_mod( 'theme_custom_form_selling_text1_2' ); ?>
							</span>
							<span class="form-argument argument-2">
								<?php echo get_theme_mod( 'theme_custom_form_selling_text2_2' ); ?>
							</span>
							<span class="form-argument argument-3">
								<?php echo get_theme_mod( 'theme_custom_form_selling_text3_2' ); ?>
								<?php echo get_theme_mod( 'price_spirulina' ); ?>!
							</span>
					</div>	  				
	  			</div>
			</div>
			<div class="sb-form-container-bottom">
				<div class="sb-form-sign-up-container ">
						<h4 class="widget-title-text-color widget-title-text-bg widget-title-size">
							<?php echo get_theme_mod( 'theme_custom_form_heading_2' ); ?>
						</h4>
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar_spirulina') ) : 
					endif; ?>
						<div class="disclaimer-container">
							<p class="disclaimer-info">
								<?php echo get_theme_mod( 'theme_custom_form_disclaimer_2' ); ?>
								<a href="<?php echo get_theme_mod( 'theme_custom_form_disclaimer_link_2' ); ?>">
									<?php echo get_theme_mod( 'theme_custom_form_disclaimer_link_text_2' ); ?>
								</a>		
							</p>
						</div> <!-- .disclaimer-container -->
				</div>
			</div>
	  	</div>
	  </div> <!-- #tab2 -->


	</div> <!-- .frontpage-tab-content -->
</div>




</div> <!-- #hero-image -->
