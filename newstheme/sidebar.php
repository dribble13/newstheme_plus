	<div id="sidebar">
		<div class="orange-box">		
		  <h3><?php the_author_meta('display_name') ?>について</h3>
		  <ul>
		    <?php the_author_meta('description') ?>
		  </ul>
			<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
			<?php endif; ?>

		</div>
		<div class="orange-box-bottom"></div>
	</div>
</div>