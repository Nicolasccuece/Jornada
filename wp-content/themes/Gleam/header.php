<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php elegant_titles(); ?></title>
	<?php elegant_description(); ?>
	<?php elegant_keywords(); ?>
	<?php elegant_canonical(); ?>

	<?php do_action('et_head_meta'); ?>
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<!--[if lt IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie6style.css" />
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/DD_belatedPNG_0.0.8a-min.js"></script>
		<script type="text/javascript">DD_belatedPNG.fix('img#logo, span.overlay, a.zoom-icon, a.more-icon, #menu, #menu-right, #menu-content, ul#top-menu ul, #menu-bar, .footer-widget ul li, span.post-overlay, #content-area, .avatar-overlay, .comment-arrow, .testimonials-item-bottom, #quote, #bottom-shadow, #quote .container');</script>
	<![endif]-->
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie7style.css" />
	<![endif]-->
	<!--[if IE 8]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie8style.css" />
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	
	<script type="text/javascript" src="<?php bloginfo("stylesheet_directory");?>/js/menus.js"></script>

	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>

	<!-- begin olark code -->
<script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
f[z]=function(){
(a.s=a.s||[]).push(arguments)};var a=f[z]._={
},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
0:+new Date};a.P=function(u){
a.p[u]=new Date-a.p[0]};function s(){
a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
b.contentWindow[g].open()}catch(w){
c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('3334-192-10-2097');/*]]>*/</script><noscript><a href="https://www.olark.com/site/3334-192-10-2097/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
<!-- end olark code -->

	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper">

	<div id="lado_div">
   		<div class="lado_menu"> 
            <div class="lado_imagens">
                <div class="lado_imagem"><a href="?page_id=24"><div class="lado_imagem1"></div></a></div>
                <div class="lado_imagem"><a href="?page_id=26"><div class="lado_imagem2"></div></a></div>
                <div class="lado_imagem"><a href="?page_id=28"><div class="lado_imagem3"></div></a></div>
            </div>
            <div class="ins"><span>Inscreva-se<span></div>
        </div>
    </div>

    <div id="midias">
    	<div class="nome">
    		<div class="espaco"></div>
    		<span>M</span>
    		<span>I</span>
    		<span>D</span>
    		<span>I</span>
    		<span>A</span>
    		<span>S</span>
    	</div>
    </div>


		<div id="main_content"<?php if ( is_home() ) echo ' class="home_content"'; ?>>
			<header id="main_header">
				<div id="logo_area">
					<?php if ( ( $logo = get_option('gleam_logo') ) && '' != $logo ) { ?>
						<a href="<?php echo esc_url( home_url() ); ?>">
							<img src="<?php echo esc_url( $logo ); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" id="logo"/>
						</a>
					<?php } else { ?>
						<h1>
							<a href="<?php echo esc_url( home_url() ); ?>"><?php echo get_option('gleam_logo_text'); ?></a>
						</h1>
					<?php } ?>
					<p><?php echo esc_html( get_bloginfo('description') ); ?></p>
				</div> <!-- #logo_area -->
					
				<?php do_action('et_header_top'); ?>
						
				<nav id="main_menu">
					<?php
						$menuClass = 'clearfix';
						if ( get_option('gleam_disable_toptier') == 'on' ) $menuClass .= ' et_disable_top_tier';
						$primaryNav = '';
						if (function_exists('wp_nav_menu')) {
							$primaryNav = wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'depth' => '1', 'fallback_cb' => '', 'menu_class' => $menuClass, 'echo' => false ) );
						}
						if ($primaryNav == '') { ?>
							<ul class="<?php echo $menuClass; ?>">
								<?php if (get_option('gleam_home_link') == 'on') { ?>
									<li <?php if (is_home()) echo('class="current_page_item"') ?>><a href="<?php echo home_url(); ?>"><?php esc_html_e('Home','Gleam') ?></a></li>
								<?php }; ?>

								<?php show_page_menu($menuClass,false,false); ?>
								<?php show_categories_menu($menuClass,false); ?>
							</ul>
						<?php }
						else echo($primaryNav);
					?>
				</nav>
			</header> <!-- end #main_header -->
			<div id="content" <?php body_class(); ?>>