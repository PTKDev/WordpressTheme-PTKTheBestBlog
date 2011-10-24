<body>
<!--
<?php 
$using_ie = (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') != FALSE);
if($using_ie){
?>
<script type="text/javascript">
	Event.observe(window, 'load', showChart, false);
</script> 
<div><a href="<?php bloginfo('template_url'); ?>/img/anti-ie.png" rel="lightbox" id="anti-ie"></a></div>
<?php } ?>
-->
<div id="container">
	<div id="head-msg1">
		Benvenuti nel mio blog! Ricordate di commentare o condividere i miei post sui social network =D
	</div>
	<div id="header">
		<div id="head-icon">
			<a href="http://fedoraproject.org/it/" rel="external"><img src="<?php bloginfo('template_url'); ?>/img/icon_fedora.png" width="75" height="76" alt="Support Linux Fedora" title="Support Linux Fedora" /></a>
			<a href="http://it.wordpress.com/" rel="external"><img src="<?php bloginfo('template_url'); ?>/img/icon_wp.png" width="67" height="76" alt="Powered By WordPress" title="Powered By WordPress" /></a>
			<a href="http://feeds.feedburner.com/ptkthebestblog" rel="external"><img src="<?php bloginfo('template_url'); ?>/img/icon_rss.png" width="67" height="76" alt="Leggimi Tramite RSS" title="Leggimi Tramite RSS" /></a>
		</div>
		<div id="head-menu">
			<a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/"><img src="<?php bloginfo('template_url'); ?>/img/menu_home.png" width="18" height="18" alt="Home" title="Home" /> HOME</a>&nbsp;&nbsp;
			<a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/chi-sono/"><img src="<?php bloginfo('template_url'); ?>/img/menu_book.png" width="18" height="18" alt="Blog" title="Blog" /> CHI SONO</a>&nbsp;&nbsp;
			<a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/cat/work/"><img src="<?php bloginfo('template_url'); ?>/img/menu_bag.png" width="18" height="18" alt="Work" title="Work" /> PORTFOLIO</a>&nbsp;&nbsp;
			<a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/gallery/"><img src="<?php bloginfo('template_url'); ?>/img/menu_album.png" width="16" height="16" alt="Curriculum Vitae" title="Curriculum Vitaen" /> PHOTO ALBUM</a>&nbsp;&nbsp;
			<a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/contatti/"><img src="<?php bloginfo('template_url'); ?>/img/menu_contact.png" width="18" height="18" alt="Contatti" title="Contatti" /> CONTATTI</a>
		</div>
	</div>
	<div id="head-msg2">
		<?php
		$msg_rand = rand(0,1);
		if($msg_rand == 1){
		?>
		<img src="<?php bloginfo('template_url'); ?>/img/icon_iphone.png" width="104" height="70" alt="IPhone" title="IPhone" class="msg" />
		Lo sapevi che questo blog &egrave; disponibile in versione mobile?<br />
		Prova ad accedere con il tuo telefono windows mobile, iphone o nokia!.<br />
		Cosa aspetti? Accedi in wap o 3g e prova la versione per cellulari!
		<?php }else{ ?>
		<img src="<?php bloginfo('template_url'); ?>/img/icon_twitter.png" width="90" height="70" alt="Twitter" title="Twitter" class="msg" />
		Ti piace il mio blog? Se non lo sai puoi seguirmi anche tramite il micro-blog twitter!<br />
		Su twitter esprimo i miei pensieri in 140 caratteri, vieni a trovarmi anche l&igrave;:<br /> 
		Seguimi ----> <a href="http://twitter.com/PTKTheBest">http://twitter.com/PTKTheBest</a>
		<?php } ?>
	</div>
	<div id="content">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); global $post; $thePostID = $post->ID; ?>
	<div class="post-content">
		<div class="title">
			<div class="post-title">
				<a class="link-title-post" href="<?php the_permalink() ?>"><?php the_title(); ?></a><br />
				<div class="title-space">
				    <span class="title-cat">
						<span class="date"><span class="bold">Scritto Il:</span> <?php the_time('j M Y'); ?></span> 
						<span class="post"><span class="bold">Categorie:</span> <?php the_category(', ') ?></span> 
					</span>
				</div>
			</div>
		</div>
		<div class="content-post" id="comedia_<?php echo $thePostID; ?>">
			<?php the_content(); ?>
		</div>
		<div class="comment">
			<div class="comment-align">
				<span class="pie_post">Scritto Da: </span><a href="<?php the_author_url(); ?>"><?php the_author_nickname(); ?></a>&nbsp;|&nbsp;
				<?php comments_popup_link(__('Commenta (0)'), __('Commenta (1)'), __('Commenta (%)')); ?>&nbsp;|&nbsp;
			</div>
			<div class="tag-align">
				<?php comments_template(); ?>
			</div>
			<span class="title-cat">
				<span class="tags">
					<span class="bold">Tags:</span> <?php the_tags("",", "," "); ?>
				</span>
			</span>
			<div class="social-align">
				<?php if(function_exists('selfserv_sexy')) { selfserv_sexy(); } ?>
			</div>
		</div>
	</div>
	<div class="head-separator"></div>
	<?php endwhile; else: ?>
	<?php if($_SERVER['REQUEST_URI'] == "/sitemap/"){ 
		echo '<div class="tag-align">';
	      echo "<b>SITEMAP:</b>";
	      /*$filename = "./sitemap.xml";
	      $handle = fopen($filename, "r");
	      $var = fread($handle, filesize($filename));
	      preg_match_all("/(<loc>)(.*)(<\/loc>)/", $var, $matches);

	      for ($i=0; $i < count($matches[0]); $i++){
	      $array[$i] = $matches[2][$i];}
	      for( $i=0; $i < count($array); ++$i)
	      {
	      echo('<a href="');
	      echo($array[$i]);
	      echo('">'); 
	      $array[$i] = eregi_replace($_SERVER['SERVER_NAME'], "", $array[$i]);
	      $array[$i] = eregi_replace("http://", " ", $array[$i]);
	      $array[$i] = eregi_replace("cat/", " ", $array[$i]);
	      $array[$i] = eregi_replace("tag/", " ", $array[$i]);
	      $array[$i] = eregi_replace("/", " ", $array[$i]);
	      $array[$i] = eregi_replace("_", " ", $array[$i]);
	      $array[$i] = eregi_replace("-", " ", $array[$i]);
	      echo($array[$i]);
	      echo('</a><br /><br />');
	      }*/ 
		echo '</div>';
	    }else{ ?>
	    <img src="<?php bloginfo('template_url'); ?>/img/errore404.png" width="300" height="296" title="Errore 404" alt="Errore 404" class="msg" /></td>
		<div style="text-align: left;">
			<b>ULTIMI POST:</b><br />
			<ul style="margin-left: -19px;"><?php get_archives('postbypost','10'); ?></ul><br /><br />
			Pagina Non Trovata: <?php echo 'http://'.$_SERVER['SERVER_NAME'].'' ?><? echo $_SERVER['REQUEST_URI']; ?>
		</div>
	<?php } endif; ?>
	</div>		
	<?php if(!is_single()) { ?>
	<div class="page-select">
		<?php posts_nav_link(' | ','&laquo; Pagina Precedente','Pagina Successiva &raquo;'); ?> <br />
	</div>
	<?php }?>
	<div id="footer">
		<div id="foot-txt">
			Questo blog &egrave; stato interamente realizzato da: <i><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/">Patryk Rzucidlo</a></i> <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/sitemap/"><img src="<?php bloginfo('template_url'); ?>/img/icon_sitemap.png" width="18" height="20" alt="Sitemap" title="Sitemap" /></a> <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/sitemap.xml"><img src="<?php bloginfo('template_url'); ?>/img/icon_sitemap-xml.png" width="18" height="20" alt="Sitemap XML" title="Sitemap XML" /></a><br />
			<div class="title-space2"></div>
			<br />
			<div class="title-space2"></div>
			<i>Motto Del Blog: Tutto Quello Che Amo Fare &egrave; Immorale o Illegale (cit.)</i>
		</div>
		<?php wp_footer(); ?>
	</div>
</div>

</body>
</html>
