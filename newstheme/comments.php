<div class="Comments">
<div class="List">
<!-- コメントリスト 開始 -->

<?php /* このコードを削除しないでください。 */
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('このページを直接読み込まないでください。');
	if ( post_password_required() ) { ?><p class="nocomments">このコメントはパスワードで保護されています。表示するには、パスワードを入力してください。</p>
<?php return; } /* ここから編集が可能です。 */ ?>

<?php if ( have_comments() ) { ?>
<h3 class="comments"><?php comments_number('コメント（0）', 'コメント（1）', 'コメント（%）' );?></h3>
<ol class="commentlist">
<?php wp_list_comments('callback=list_comments'); ?>  
</ol>
<div class="comment-navigation">
	<div class="previous"><?php previous_comments_link() ?></div>
	<div class="next"><?php next_comments_link() ?></div>
</div>
<?php } else { // コメントがない場合 ?>

	<?php if ('open' == $post->comment_status) { ?>
		<!-- コメントを受け付けていて、コメント数が0の場合 -->
	 <?php } else { // コメントを受け付けていない ?>
		<!-- コメントを受け付けていない場合 -->
		<p class="nocomments">コメントを受け付けておりません。</p>
	<?php } // コメントを受け付けている場合 終了 ?>

<?php } // have_comments 終了 ?>

<?php if ('open' == $post->comment_status) : ?><br />
<!-- CommentsList 終了 -->
</div>

<p class="note">
	<?php comments_rss_link(__('<abbr title="Really Simple Syndication">コメントのRSSを取得する</abbr>')); ?>
	<?php if ( pings_open() ) : ?>
	&#183; <a href="<?php trackback_url() ?>" rel="trackback"><?php _e('<abbr title="Uniform Resource Identifier">トラックバック</abbr>'); ?></a>
	<?php endif; ?>
	</p>

<!-- コメントフォーム 開始 -->
<div class="Form" id="respond">
<div class="FormTop"></div>

<h3 class="respond"><?php comment_form_title('コメントする', '%s へコメントする'); ?> <span class="cancel-comment-reply"><?php cancel_comment_reply_link('(キャンセル)'); ?></span></h3> 
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>コメントを投稿するには、<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">ログイン</a>する必要があります。</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<?php if ( $user_ID ) : ?>
<p style=" padding: 7px; display: block; background: #edeeef; border: solid 1px #aeb4b9; margin-bottom: 5px;"><a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>としてログイン中。 <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Log out of this account') ?>">ログアウト &raquo;</a></p>
<?php else : ?>

<p><label for="author">
<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" tabindex="1" class="TextField" />お名前 <small><?php if ($req) _e('(必須)'); ?></small></label></p>
		
<p><label for="email">
<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2" class="TextField" />メールアドレス <small>(<?php if ($req) _e('必須, '); ?>非公開)</small></label></p>
		
<p><label for="url">
<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" tabindex="3" class="TextField" /><abbr title="Uniform Resource Identifier">ウェブサイト</abbr></label></p>

<?php endif; ?>
<p><textarea name="comment" id="comment" rows="10" tabindex="4" class="TextArea"></textarea></p>

<p><?php comment_id_fields(); ?><input name="SubmitComment" type="image" class="SubmitComment" title="コメントを送信" src="<?php bloginfo('template_url'); ?>/images/submitcomment.gif" alt="コメントを送信" /></p>
<?php do_action('comment_form', $post->ID); ?>
</form>
<?php endif; // ログインまたは登録が必要な場合 ?>
<?php endif; // このコードを削除しないでください。 ?>
</div>

</div>