<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<?php if($_SERVER['REQUEST_URI'] == "/MappaSito/"){ ?>
    <title>SiteMap &laquo; <?php bloginfo('name'); ?></title>
<?php }else{ ?>
    <title><?php wp_title(''); ?> <?php if(wp_title(' ', false)) { echo '&laquo;'; } ?> <?php bloginfo('name'); ?></title>
<?php } ?>
	
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<meta name="author" content="Patryk Rzucidlo" />
	<meta name="author-mail" content="ptkdev[at]gmail[dot]com" />
	<meta name="author-msn" content="ptkdev[at]gmail[dot]com" />
	<meta name="author-skype" content="ptkdev" />
	<meta name="author-twitter" content="@PTKDev" />
	<meta name="author-irc" content="chat.freenode.net #ptkdev" />
	<meta name="author-gadu_gadu" content="2825253" />
	<meta name="author-phone_wind" content="+39 3281759093" />
	
	<meta name="copyright" content="GNU Affero General Public License" />
	<meta name="source-code" content="https://github.com/PTKDev/WordpressTheme-PTKTheBestBlog" />
	
	<meta name="distribution" content="global" />
	<meta name="robots" content="index,follow" />
	<meta name="revisit-after" content="3 days" />
	<meta name="rating" content="general" />
	<meta name="language" content="it" />
	<meta name="google-site-verification" content="JPTBCIrqotFVB326qlLc29NuO-4SOFGJCTXgRFH5GRo" />
	<meta name="msvalidate.01" content="CE228C55699771AA95686ADA07993FBD" />
	
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> - Feed RSS" href="http://feeds.feedburner.com/ptkthebestblog" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="shortcut icon" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/favicon.ico" />
	<link rel="icon" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/favicon.png" type="image/png" />
	<link rel="icon" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/favicon.ico" type="image/ico" />
  
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/layout.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/header.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/body.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/footer.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/link.css" />
<? wp_head(); ?>

	<!--[if lt IE 7.]>
	<script defer type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/pngfix.js"></script>
	<![endif]-->
	
	<link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/wp-content/plugins/lightbox/css/lightbox.css" rel="stylesheet" type="text/css" media="screen" /> 
	<script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/wp-content/plugins/lightbox/js/prototype.js" type="text/javascript"></script> 
	<script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/wp-content/plugins/lightbox/js/scriptaculous.js?load=effects,builder" type="text/javascript"></script> 
	<script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/wp-content/plugins/lightbox/js/lightbox.js" type="text/javascript"></script>
</head>
