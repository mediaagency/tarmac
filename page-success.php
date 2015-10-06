<?php

/*
Template Name: Page - Success
*/

get_header();
?>



<?php $product_name = get_post_meta($post->ID, 'ma_product_name', true) ?>
<?php
	if( strtolower($product_name) == 'spirulina' ) {
		$price = 248;
	} else if( strtolower( $product_name ) == 'chlorella' ) {
		$price = 368;
	}
?>

 <?php
 
if( isset($_COOKIE['orderID'] ) ) {

 $order_id = $_COOKIE['orderID'];
 $campaignID = '19982'; // Enter your campaignID as provided by TradeTracker.
 $productID = '29500'; // Enter your productID as provided by TradeTracker.
 $transactionAmount = $price;
 // *****************

 $transactionID = htmlentities($order_id);
 
 echo "<script type=\"text/javascript\">
 var ttConversionOptions = ttConversionOptions || [];
 ttConversionOptions.push({
  type: 'sales', 
  campaignID: '{$campaignID}', 
  productID: '{$productID}', 
  transactionID: '{$transactionID}', 
  transactionAmount: '{$transactionAmount}', 
  quantity: '1',
  email: '', 
  descrMerchant: '', 
  descrAffiliate: '', 
  currency: ''
 });
 </script>
 <noscript>
  <img src=\"//ts.tradetracker.net/?cid={$campaignID}&amp;pid={$productID}&amp;tid={$transactionID}&amp;tam={$transactionAmount}&amp;data=&amp;qty=1&amp;eml=&amp;descrMerchant=&amp;descrAffiliate=&amp;event=sales&amp;currency=\" alt=\"\" />
 </noscript>
 <script type=\"text/javascript\">
  (function(ttConversionOptions) {
   var campaignID = 'campaignID' in ttConversionOptions ? ttConversionOptions.campaignID : ('length' in ttConversionOptions && ttConversionOptions.length ? ttConversionOptions[0].campaignID : null);
   var tt = document.createElement('script'); tt.type = 'text/javascript'; tt.async = true; tt.src = '//tm.tradetracker.net/conversion?s=' + encodeURIComponent(campaignID) + '&t=m';
   var s = document.getElementsByTagName('script'); s = s[s.length - 1]; s.parentNode.insertBefore(tt, s);
  })(ttConversionOptions);
 </script>";
}
?>

<!--ADd ecommerce tracking-->
<script>
	ga('require', 'ecommerce');
	ga('ecommerce:addTransaction', {
	  'id': '<?php echo $_COOKIE["orderID"]; ?>',                     // Transaction ID. Required.
	  'affiliation': 'Superliv',   // Affiliation or store name.
	  'revenue': '<?php echo $price ?>',               // Grand Total.
	  'shipping': '0',                  // Shipping.
	  'tax': '0'                     // Tax.
	});
</script>
<!--End ecommerce-->


<!-- Facebook Conversion Code for Registreringer - Superliv 1 -->
<script>(function() {
var _fbq = window._fbq || (window._fbq = []);
if (!_fbq.loaded) {
var fbds = document.createElement('script');
fbds.async = true;
fbds.src = '//connect.facebook.net/en_US/fbds.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(fbds, s);
_fbq.loaded = true;
}
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6033864543547', {'value':'0.00','currency':'NOK'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6033864543547&amp;cd[value]=0.00&amp;cd[currency]=NOK&amp;noscript=1" /></noscript>

<!-- Google Code for Superliv nettbutikk Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 949051441;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "HoHYCOX6kl8QscDFxAM";
var google_remarketing_only = false;
if (<?php echo $price ?>) {
		var google_conversion_value = <? echo $price ?>
	}
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/949051441/?value=<?php echo $price ?>&amp;label=HoHYCOX6kl8QscDFxAM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<div id="main">
    <div id="main-padding">


<div class="success-image-section">
	<div class="success-top-padding"></div>
	<div class="success-image-container">
		<img src="<?php echo get_stylesheet_directory_uri() ?>/img/success-image.png">
	</div>  <!-- .success-image-container -->
</div> <!-- .success-image-section -->

<div class="success-text-section">
	<h1 class="success-text-heading">Takk for din bestilling! </h1>

	<ul class="success-list">
		<li>Vi har mottatt din ordre.</li>
		<li>Du vil motta pakken med <?php echo ucwords($product_name); ?> innen 2 uker.</li>
	</ul>

	
</div>

<div class="success-facbook section-border">
	
	<h1>Del <?php echo ucwords($product_name); ?> med vennene dine!</h1>

	

	<div class="fb-share-image-container">


		<img src="<?php echo get_stylesheet_directory_uri() . '/img/product_powder_' . $product_name . '.jpg' ?>">

	</div>
	
	<div class="fb-share-button-container">
			<?php $share_url = site_url() . '/produkter/'. strtolower($product_name) . '/'; ?>	
			
			
			<div class="fb-share-button" data-layout="button" style="float: none; display: block; color:#ffffff;" 
			target="popup" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php echo $share_url ?>','name','width=600,height=400')">
			</div>





			
	</div> <!-- .fb-share-button-container -->

</div>


<div class="success-related-container">

	<div class="reprint-section-header">
		<h2 class="reprint-section-heading">Relevante artikler</h2>
		<p class="reprint-section-description">Les mer om våre produkter!</p>
	</div>

	<?php get_template_part( 'template/content', 'latest-posts' ); ?> 
</div>

	</div></div></div>
<?php
get_footer();
?>