<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
 <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
 <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
 <meta name="generator" content="WordPress" /> <!-- leave this for stats -->
 <meta name="author" content="MC Geek&JessieHan" />
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.js" type="text/javascript"></script>
<!--[if lte IE 6]>
<script src="<?php bloginfo('template_directory'); ?>/js/DD_belatedPNG.js" type="text/javascript"></script>
<script>
  DD_belatedPNG.fix('#header,#left,#middle,#right,#s,#searchsubmit,#footer,img');
</script>
<![endif]-->

 <script src="<?php bloginfo('template_directory'); ?>/js/DD_roundies.js"></script>
<!--[if lte IE 6]>
<script>
  DD_roundies.addRule('#left,#middle,#right,.wrap-left,.wrap-right,.fullpage,.comment-body,#cmt blockquote', '5px');
  DD_roundies.addRule('#footer', '10px 10px 0 0');
</script>
<![endif]-->
<!--[if lte IE 7]>
<script>
  DD_roundies.addRule('#left,#middle,#right,.wrap-left,.wrap-right,.fullpage,.comment-body,#cmt blockquote', '5px');
  DD_roundies.addRule('#footer', '10px 10px 0 0');
</script>
<![endif]-->

 <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
 <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
 <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
 <?php wp_head(); ?>	
</head>
<body>




  <div id="header">
<div id="nav"><li class="b"></li>
<li><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></li>
<li><a href="http://twitter.com/jessiehan/">JessieHan@Twitter</a></li>
<li><a href="http://twitter.com/mcgeek11204">MC Geek@Twitter</a></li>
<li class="b"><?php bloginfo('description'); ?></li>
<li class="s"><?php include (TEMPLATEPATH . '/searchform.php'); ?></li>
</div>
</div>
