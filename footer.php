


<div id="footer-outer" class="fluid-container footer-bg">
	<div id="footer-inner" class="container">
		

	
	<div id="footer-spacing" >



    <div class="col-xs-12 col-sm-12 col-md-4 mb-m">
        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer-left')) : else : ?>

            <div class="pre-widget">
                <p><strong>Widgetized Area</strong></p>
                <p>This panel is active and ready for you to add some widgets via the WP Admin</p>
            </div>

        <?php endif; ?>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-4  mb-m">
            <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer-middle')) : else : ?>

            <div class="pre-widget">
                <p><strong>Widgetized Area</strong></p>
                <p>This panel is active and ready for you to add some widgets via the WP Admin</p>
            </div>

        <?php endif; ?> 
    </div>

	<div class="col-xs-12 col-sm-12 col-md-4 mb-m"> 
                <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer-right')) : else : ?>

            <div class="pre-widget">
                <p><strong>Widgetized Area</strong></p>
                <p>This panel is active and ready for you to add some widgets via the WP Admin</p>
            </div>

        <?php endif; ?>     
    </div>

    <div id="footer-copyright" class="col-xs-12" style="text-align: center">
        
    </div>

</div> <!-- .row -->

	

	</div> <!-- #footer-inner -->
</div> <!-- #footer-outer -->

        </div> <!-- #main-padding -->
        </div> <!-- #main -->
    </div> <!-- .container -->
</div></div></div></div>
</div> <!-- #viewport -->


<script type="text/javascript">
    
    jQuery(document).animateScroll();  
    jQuery('#font_1').trigger('reverse');

</script>

<?php wp_footer(); ?>

</body>
</html>