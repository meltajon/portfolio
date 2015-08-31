<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<style>
/* MEDIA QUERIES
------------------------------------------------------------------------------
------------------------------------------------------------------------------*/
html { font-size: 12px; line-height: 1.357142857142857em; }
@media (max-width: 450px) {
	body { padding: 0; }
}
@media (max-width: 570px) {
	body { font-weight: 400; }
}
@media (min-width: 571px) and (max-width: 900px) {
	html { font-size: 16px; line-height: 1.5em; }
	body { font-weight: 300; }
}
@media (min-width: 901px) {
	html { font-size: 16px; line-height: 1.5em; }
	body { color: #777; font-weight: 300; }
}
/* GLOBALS
------------------------------------------------------------------------------
------------------------------------------------------------------------------*/
html { box-sizing: border-box; }
*, *:before, *:after { box-sizing: inherit; }

.clearfix:before,
.clearfix:after {
	display: table;
	content: "";
}
.clearfix:after { clear: both; }

body {
	height: 100%; min-height: 100vh; margin: 0;
	color: #777; 
	vertical-align: top; 
}
.wrapper { width: 100%; min-width: 320px; margin: 0 auto; }
@media (max-width: 640px) {
	.wrapper { padding: 0 20px; }
}
@media (min-width: 641px) and (max-width: 680px) {
	.wrapper { max-width: 640px; padding: 0 20px; }
}
@media (min-width: 681px) {
	.wrapper { max-width: 640px; }
}

a:link,
a:visited { 
	text-decoration: none; 
	border: none;
	transition: all 0.3s ease;
}
a:hover { border-width: 0 0 1px 0; }

strong { font-weight: 500; }

ul { list-style-type: square; }

.inline-block,
.no-wrap { display: inline-block; }
.hidden { display: none; }

.float-right { float: right; }
.float-left { float: left; }

.text-align-center { text-align: center; }

/* ABOVE THE FOLD
------------------------------------------------------------------------------*/
#header { 
	position: -webkit-sticky;
	position: -moz-sticky;
	position: -ms-sticky;
	position: -o-sticky;
	top: 0; 
	overflow: auto; 
	text-align: center; 
}

#header-title { font-size: 1rem; }

#personal-description { color: #FFF; text-shadow: 1px 1px 8px rgba(0, 0, 0, .5); }
#personal-description-overlay { background: rgba(255,97,0,0.8); }

.avatar,
.module .avatar { 
	margin: 2em 0; 
	text-align: center; 
}
.avatar img {
	width: 150px;
	height: 150px;
	border: 1px solid #D0D0D0; border-radius: 75px;
}

</style>

<!-- Stylesheets -->
<link rel="stylesheet" media="all" href="/assets/<?php echo $site->theme(); ?>/style.php/style.scss" />
<link rel="stylesheet" media="all" href="//cloud.typography.com/7950712/692046/css/fonts.css" />

<!-- Javascripts -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script defer src="/assets/<?php echo $site->theme(); ?>/smooth-page-scroll.js"></script>

<!-- Prefetch -->
<link rel="dns-prefetch" href="//ajax.googleapis.com" />
<link rel="dns-prefetch" href="//cloud.typography.com" />

<link rel="prefetch" href="/assets/<?php echo $site->theme(); ?>/style.php/style.scss" />
<link rel="prefetch" href="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" />
<link rel="prefetch" href="//cloud.typography.com/7950712/692046/css/fonts.css" />


<!-- SEO -->
<title>Mel Tajon • Web Developer Portfolio</title>
<meta name="robots" content="noindex,noarchive,nosnippet" />

<!-- Schema.org -->
<meta itemprop="name headline" content="Mel Tajon • Portfolio">
<meta itemprop="author" content="Mel Tajon">
<meta itemprop="dateCreated datePublished" content="<?php echo $page->date('Y-m-d'); ?>">
<meta itemprop="dateModified" content="<?php echo $page->modified('Y-m-d'); ?>">
<meta itemprop="url" content="<?php echo $page->tinyurl(); ?>">

</head>
<body>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-40072680-3', 'auto');

		ga('require', 'linkid', 'linkid.js');
		ga('send', 'pageview');
	</script>

	<div id="top"></div>
	<header id="header">
		<div id="header-wrapper" class="wrapper">
			<h1 id="header-title" class="title">
				<a id="logo" href="/" onClick="ga('send', 'event', 'logo', 'click');">
					<span>M</span>el <span>T</span>ajon
				</a>
			</h1>
		</div><!-- wrapper -->
	</header>

	<main class="main" role="main">