<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title><?php if ( is_home() ) { ?><? bloginfo('name'); ?> - <?php bloginfo('description'); } else { wp_title(''); ?> - <? bloginfo('name'); } ?></title>

<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/javascript/imghover.js"> </script>
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<?php if (is_singular) { wp_enqueue_script('comment-reply'); } ?>
<?php wp_head(); ?>
</head>
<body>
<div class="top">
	<p class="wrapper"><a href="<?php bloginfo('rss_url'); ?>" class="rss">Subscribe to RSS Feed</a> <?php wp_loginout(); ?></p>
</div>
<div class="wrapper">
	<h1><a href="<?php echo get_option('home'); ?>"><span><?php bloginfo('name'); ?></span></a></h1>
