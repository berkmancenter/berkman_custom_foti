<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<META NAME="ROBOTS" CONTENT="NOARCHIVE">
	<META NAME="GOOGLEBOT" CONTENT="NOSNIPPET">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title(''); ?> <?php if ( !(is_404()) && (is_single()) or (is_page()) or (is_archive()) ) { ?> :: <?php } ?> <?php bloginfo('name'); ?></title>
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/screen.css" type="text/css" media="screen, projection" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/print.css" type="text/css" media="print" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" type="text/css" media="screen, projection" />
    <!--[if IE]><link rel="stylesheet" href="css/blueprint/lib/ie.css" type="text/css" media="screen, projection" /><![endif]-->
	<!-- Javascripts  -->
	<!-- <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.1.3.1.pack.js"></script> -->
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/functions.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.js"></script>
	<!--[if lt IE 7]>
	<script defer type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/pngfix.js"></script>
	<![endif]-->
   <!--[if gte IE 5.5]>
   <script language="javaScript" src="<?php bloginfo('stylesheet_directory'); ?>/js/dhtml.js" type="text/javaScript"></script>
   <![endif]-->
<!-- Show the grid and baseline -->
	<style type="text/css">
/*		.container { background: url(<?php bloginfo('stylesheet_directory'); ?>/css/lib/img/grid.png); }*/
	</style> 
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>
<body>
<div class="container">
<!-- Header -->
        <div class="column span-24" id="header" >
<!-- header Box
     <div id="header-box">
       <div id="header-box-right">
          <img src="http://futureoftheinternet.org/wp-content/uploads/2008/03/cover.jpg" id="box-book" alt="cover" width="48px" height="70px">
       </div>
       <div id="header-box-left">
       <a href="http://futureoftheinternet.org/download"> <h2 class="box">READ</h2></a>
       <br />
       <a href="http://www.amazon.com/gp/product/0300124872?ie=UTF8&tag=jonatzittr-20&linkCode=as2&camp=1789&creative=9325&creativeASIN=0300124872">
<h2 class="box">BUY</h2></a>
       </div>
     </div>
</div>
-- >
<!-- Search -->
	<?php include (TEMPLATEPATH . '/searchform.php'); ?>	
<!-- Site Name -->
	<!-- <h1><a href="<?php echo get_option('home'); ?>" title="<?php bloginfo('name'); ?>"  class="logo"><?php bloginfo('name'); ?></a> </h1> -->
<!-- Site Logo -->
        <a href="<?php echo get_option('home'); ?>" title="<?php bloginfo('name'); ?>"  class="logo"><img src="http://futureoftheinternet.org/wp-content/uploads/2008/03/bluelogo.png" id="headerlogo"></a>



<!-- Navigation -->
<div class="span-24 large" id="nav">
	
<div class="content">
<ul id="navmenu-h">
<li><a href="<?php echo get_settings('home'); ?>">Home</a></li>
<?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
<!--<?php wp_list_categories('orderby=name&title_li=<a>Departments</a>'); ?>-->

<li class="alignright"><a href="<?php bloginfo('rss2_url'); ?>">RSS <img src="http://futureoftheinternet.org/wp-content/uploads/2008/07/feed-icon-14x14.png"/></a></li>
</ul>
</div>
</div>
