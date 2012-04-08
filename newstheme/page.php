<?php get_header(); ?>
	<div id="main-content">
<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		<p class="post-info"><?php the_date('n月d日'); ?> <?php the_time('G:i');?> <?php the_author() ?></p>
		<div class="entry-content"><?php the_content('続きを読む &raquo;'); ?></div>
	</div>	
<?php endwhile; ?>
<?php else : ?>
<div id="main-content">
<h2>お探しのページは見つかりませんでした。</h2>
<p><?php _e("他のキーワードで検索してください。"); ?></p>

<?php endif; ?> 
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>