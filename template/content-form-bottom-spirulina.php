


<div class="fp-form-section">

	<div class="fp-form-header">
		<ul class='tabs'>
			<li>
				<a href='#tab1' class="tab">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo_spirulina.png">
				</a>
			</li>
			<li>
				<a href='#tab2' class="tab">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo_chlorella.png">
				</a>
			</li>
		</ul>	
	</div> <!-- .frontpage-tab-header -->

	<div class="fp-form-tabs-container">

		<div id='tab1'>
			<div class="tab-content">
				<div class="fp-form-container-left fp-form-container-force-bottom">
					<div class="fp-form-sign-up-container">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('spirulina') ) : 
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
				<div class="fp-form-container-right fp-form-container-force-top">
					<div class="fp-form-product form-min-height" style="background-image: url(' <?php echo get_stylesheet_directory_uri() ?>/img/product_spirulina.jpg');">
						<div class="fp-form-product-text">
							<span class="form-argument argument-1">
								<?php echo get_theme_mod( 'theme_custom_form_selling_text1_2' ); ?>
							</span>
							<span class="form-argument argument-2">
								<?php echo get_theme_mod( 'theme_custom_form_selling_text2_2' ); ?>
							</span>
							<span class="form-argument argument-3">
								<?php echo get_theme_mod( 'theme_custom_form_selling_text3_2' ); ?>
								<?php echo get_theme_mod( 'price_chlorella' ); ?>!
							</span>
						</div>	  				
					</div>
				</div>

			</div> <!-- .tab-content -->
		</div> <!-- #tab1 -->

		<div id='tab2'>
			<div class="fp-form-tab-content">
				<div class="fp-form-container-left">
					<div class="fp-form-product form-min-height" style="background-image: url(' <?php echo get_stylesheet_directory_uri() ?>/img/product_chlorella.jpg');">
						<div class="fp-form-product-text">
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
				<div class="fp-form-container-right">
					<div class="fp-form-sign-up-container">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('chlorella') ) : 
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
		</div> <!-- #tab2 -->

	</div> <!-- .frontpage-tab-content -->

</div> <!-- .fp-form-section -->




