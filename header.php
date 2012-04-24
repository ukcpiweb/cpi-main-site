<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8"/>
		<title>
	<?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
	?>
		</title>
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]--> 
		
		<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>"/>
		
<!--[if lte IE 8]>
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/-/css/ie8.css" media="screen" type="text/css" />
<![endif]-->
		
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->
		
		
		<?php wp_head(); ?>
		
		
		<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2415452-6']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	</head>
	
	<body lang="en" <?php body_class(); ?>>
	
	<a id="top" name="top"></a>
	<div id="cpibox">
	
	<header>
	
			<div id="loginlinks">
			 <?php if ( is_user_logged_in() ) { ?>
			 	<a id="" href="<?php wp_logout_url(home_url()) ?>" title="Logout">Logout</a> | 
			 <?php } ?>
				<a href="<?php bloginfo('url'); ?>/tenders/">Tenders</a> |
				<a href="<?php bloginfo('url'); ?>/careers/">Careers</a> |
				<a href="<?php bloginfo('url'); ?>/press-room/">Press Room</a>
			</div>	
	
	<div id="logo">
		<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/-/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" width="153" height="79" /></a>
	</div>
	
		<nav>
			<ul>
<li id="menu-item-256" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-256"><a href="<?php bloginfo('url'); ?>">Home</a></li> 
<li id="menu-item-203" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-203"><a href="<?php bloginfo('url'); ?>/about/">About</a></li>
<li id="menu-item-202" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-202"><a href="<?php bloginfo('url'); ?>/technologies/">Technologies</a></li> 
<li id="menu-item-301" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-301"><a href="<?php bloginfo('url'); ?>/markets/">Markets</a></li> 
<li id="menu-item-55" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-55"><a href="<?php bloginfo('url'); ?>/news/">News</a></li> 
<li id="menu-item-348" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-348"><a href="<?php bloginfo('url'); ?>/case-studies/">Case Studies</a></li> 
<li id="menu-item-200" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-200"><a href="<?php bloginfo('url'); ?>/contact/">Contact</a></li>
			<li id="searchBox">
				<?php get_search_form(); ?>
			</li>
			</ul>
			
		</nav>
		
	</header>