<div id="footer">
	<div class="wrapper">
		<div class="recent-entries">
		<h3>最新エントリー</h3>
			<ul>
			<?php
			$today = current_time('mysql', 1);
			if ( $recentposts = $wpdb->get_results("SELECT ID, post_title FROM $wpdb->posts WHERE post_status = 'publish' AND post_date_gmt < '$today' ORDER BY post_date DESC LIMIT 0, 10")): ?>
			<?php foreach ($recentposts as $post) { if ($post->post_title == '') $post->post_title = sprintf(__('Post #%s'), $post->ID);
			echo "<li><a href='".get_permalink($post->ID)."'>"; the_title(); echo '</a></li>'; }?>
			<?php endif; ?>
		 </ul>
		</div>
		<div class="recent-comments">
			<h3>最新コメント</h3>
			 <ul><?php if (function_exists('mdv_recent_comments')) { mdv_recent_comments(10, 6, '<li>', '</li>', true, 0); } ?></ul>
		</div>
		<div class="friends">
			<h3>ブログロール</h3>
			<ul>
				<?php get_links('-1', '<li>', '</li>', '', FALSE, 'id', FALSE,FALSE, -1, FALSE); ?>			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div id="copyright">
	<div class="wrapper">
		<ul>
			<li>| <a href="#">お問い合わせ</a> | </a></li>
			<li><a href="#">プライバシーポリシー</a> | </a></li>
		</ul>
<p>&copy; 2009 News Theme by <a href="http://designdisease.com">DD</a> &#38; <a href="http://wpthemejp.com/">WordPress theme</a>.</p>
		<div class="clear"></div>
		<?php wp_footer(); ?>
	</div>
</div>
</body>
</html>