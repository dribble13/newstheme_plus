=== Recent Comments ===Contributors: MtDewVirusTags: comments, recent, listStable tag: trunkRetrieves a list of the most recent comments.== Installation ==1. Upload `recent-comments.php` to the `/wp-content/plugins/` directory1. Activate the plugin through the 'Plugins' menu in WordPress1. Place `<?php mdv_recent_comments(); ?>` in your templates.

== Configuration ==
You may pass parameters when calling the function to configure some of the options.
Example: `mdv_recent_comments(10, 7, '', '<br />', true, 1)`

The parameters:
$no_comments - sets the number of recent comments to display
$comment_lenth - the number of words to display as a comment excerpt
$before - text to be displayed before the link to the recent comment
$after - text to be displayed after the link to the recent comment
$show_pass_post - whether or not to display comments from password protected posts
$comment_style - sets the style of comment to be used
	1 = "CommenterName on PostTitle" with CommenterName being a link to the comment
	0 = "CommenterName: WordsOfComment" with WordsOfComment being a link to the comment