<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html>
<head>
	<title><?php wp_title(''); ?> <?php if(wp_title(' ', false)) { echo '&laquo;'; } ?> <?php bloginfo('name'); ?></title>
	
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
	
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> - Feed RSS" href="http://feeds.feedburner.com/ptkthebestblog" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="shortcut icon" href="./favicon.ico" />
	<link rel="icon" href="./favicon.png" type="image/png" />
	<link rel="icon" href="./favicon.ico" type="image/ico" />
	<?php 
	get_sidebar('function-mobile2'); 
	$detect = new uagent_info();
	$mobi2 = $detect->DetectIphoneOrIpod();
	if($mobi2){
	?>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/mobile-iphone.css" />
	<?php }else{ ?>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/mobile.css" />
	<?php } ?>
	<? wp_head(); ?>

</head>
