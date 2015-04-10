


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
						JA TAKK! Jeg vil prøve <br>90 dager med Chlorella <br>for kun kr 199!
					</div>	  				
	  			</div>
			</div>
			<div class="sb-form-container-bottom">
				<div class="sb-form-sign-up-container ">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar_chlorella') ) : 
					endif; ?>
				</div>
			</div>
	  	</div>
	  </div> <!-- #tab1 -->

	  <div id='tab2'>
	  	<div class="sb-form-tab-content">
	  		<div class="sb-form-container-top">
	  			<div class="sb-form-product " style="background-image: url(' <?php echo get_stylesheet_directory_uri() ?>/img/product_small_spirulina.jpg');">
					<div class="sb-form-product-text">
						JA TAKK! Jeg vil prøve <br>90 dager med Spirulina <br>for kun kr 199!
					</div>	  				
	  			</div>
			</div>
			<div class="sb-form-container-bottom">
				<div class="sb-form-sign-up-container ">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar_chlorella') ) : 
					endif; ?>
				</div>
			</div>
	  	</div>
	  </div> <!-- #tab2 -->


	</div> <!-- .frontpage-tab-content -->
</div>




</div> <!-- #hero-image -->
