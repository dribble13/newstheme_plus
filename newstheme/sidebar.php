	<div id="sidebar">
		<div class="orange-box">		
					
			<h3>カテゴリー</h3>
			<ul>
				<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?> 
			</ul>
			<h3>アーカイブ</h3>
			<ul>
			   <?php wp_get_archives('type=monthly'); ?>
			</ul>
			
			<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
			<?php endif; ?>

		</div>
		<div class="orange-box-bottom"></div>
	</div>
</div>