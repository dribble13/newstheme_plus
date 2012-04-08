<?php get_header(); ?>
	<div id="main-content">
<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		<p class="post-info"><?php the_time('n月d日'); ?> <?php the_time('G:i');?> <?php the_author() ?></p>
		<div class="entry-content"><?php the_content('続きを読む &raquo;'); ?></div>
		<p><?php comments_popup_link('コメント（0）', 'コメント（1）', 'コメント（%）', 'コメントへのリンク'); ?><a href="<?php the_permalink() ?>" class="continue-reading">続きを読む</a></p>
	</div>
	
<?php endwhile; ?>

<div class="posts-navigation">
<div class="previous"><?php posts_nav_link('','','&laquo; 前のページ') ?></div>
<div class="next"><?php posts_nav_link('','次のページ &raquo;','') ?></div>
</div>

<?php endif; ?> 
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>