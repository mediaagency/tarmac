<?php

/**
 * Template do display tags inside post/pages
 *
 */

?>


	

<?php 

if (has_tag()) : ?>

	<div class="content-tags">
		<?php the_tags( '<ul><li><span><i class="fa fa-tag"></i></span>', '</li><li><span><i class="fa fa-tag"></i></span>', '</li></ul>' ); ?>
	</div>

<?php endif; ?>