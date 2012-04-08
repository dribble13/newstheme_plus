<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array('name'=>'Sidebar %d',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
	
function get_comment_number() {
	if ( '' === $args['per_page'] && get_option('page_comments') )
		$args['per_page'] = get_option('comments_per_page');

	if ( empty($args['per_page']) ) {
		$args['per_page'] = 0;
		$args['page'] = 0;
	}

	if ( $args['per_page'] ) {
		if ( '' == $args['page'] )
			$args['page'] = get_query_var('cpage');
	}
	$ccomp = ($args['page']-1) * $args['per_page'] ;

	global $comment_num;
	if(isset($comment_num)) {
		$comment_num++;
	} else { $comment_num = 1; }
	
	return $comment_num + $ccomp;
}

function list_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;  
?>  
    <li <?php comment_class('ComListLi'); ?> id="comment-<?php comment_ID(); ?>"><div id="div-comment-<?php comment_ID(); ?>">
	<div class="ComListLiTop"></div>
		<p class="ListInfo"><span class="ListNr"><?php echo get_comment_number(); ?></span><span class="comment-avatar"><?php echo get_avatar($comment, $size = '36'); ?></span><span class="ListUser comment-author author vcard"><?php comment_author_link() ?></span><br /><span class="ListDate comment-meta meta commentmetadata"><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('Y年n月d日') ?> <?php comment_time() ?></a> <?php edit_comment_link('&nbsp;&nbsp;<strong>編集</strong>','',''); ?></span></p>		
		<div class="ListContent commenttext">
			<?php comment_text() ?> 
			<?php if ($comment->comment_approved == '0') : ?>
				承認待ちのコメントです。
			<?php endif; ?>
			<span class="reply"><?php comment_reply_link(array_merge( $args, array('add_below' => 'div-comment', 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?></span>
		</div>
	<div class="ComListLiBottom"></div>
	</div>
<?php } // list_comments() 終了 ?>