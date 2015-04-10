


<div class="fp-form-section">

	<div class="fp-form-header">
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

	<div class="fp-form-tabs-container">

		<div id='tab1'>
			<div class="fp-form-tab-content">
				<div class="fp-form-container-left">
					<div class="fp-form-product form-min-height" style="background-image: url(' <?php echo get_stylesheet_directory_uri() ?>/img/product_chlorella.jpg');">
						<div class="fp-form-product-text">
							JA TAKK! Jeg vil prøve <br>90 dager med Chlorella <br>for kun kr 199!
						</div>	  				
					</div>
				</div>
				<div class="fp-form-container-right">
					<div class="fp-form-sign-up-container form-min-height">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('chlorella') ) : 
						endif; ?>
					</div>
				</div>
			</div>
		</div> <!-- #tab1 -->

		<div id='tab2'>
			<div class="tab-content">
				<div class="fp-form-container-left fp-form-container-force-bottom">
					<div class="fp-form-sign-up-container form-min-height">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('chlorella') ) : 
						endif; ?>
					</div>
				</div>
				<div class="fp-form-container-right fp-form-container-force-top">
					<div class="fp-form-product form-min-height" style="background-image: url(' <?php echo get_stylesheet_directory_uri() ?>/img/product_spirulina.jpg');">
						<div class="fp-form-product-text">
							JA TAKK! Jeg vil prøve <br>90 dager med Spirulina <br>for kun kr 199!
						</div>	  				
					</div>
				</div>

			</div> <!-- .tab-content -->
		</div> <!-- #tab2 -->

	</div> <!-- .frontpage-tab-content -->

</div> <!-- .fp-form-section -->




