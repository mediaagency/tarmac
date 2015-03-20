


<div id="footer-outer" class="fluid-container footer-bg">
	<div id="footer-inner" class="container">
		

	
	<div id="footer-spacing" class="row">



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
        <?php 
        $footer_copyright = get_option('ma_ls_options_theme_footer_display')['ma_ls_footer_copyright'];
        ?>
        <p><?php echo $footer_copyright?></p>
    </div>

</div> <!-- .row -->

	

	</div> <!-- #footer-inner -->
</div> <!-- #footer-outer -->


        </div> <!-- #main -->
    </div> <!-- .container -->
</div> <!-- #viewport -->


<script type="text/javascript">
    
    $(document).animateScroll();  

</script>

<?php wp_footer(); ?>

</body>
</html>