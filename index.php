<?php

/**
 * @package		Joomla.Site
 * @subpackage	Templates.h5bp
 * @copyright	Copyright (C) 2011 - 2012 Iván Ramos Jiménez. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * 
 */

defined('_JEXEC') or die;

/* The following line loads the MooTools JavaScript Library */
JHtml::_('behavior.framework', true);

/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();
?>

<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	
	<!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <!-- The following JDOC Head tag loads all the header and meta information from your site config and content. -->
	<jdoc:include type="head" />
	
    <meta name="description" content="">
    
    <!-- Mobile viewport optimized: h5bp.com/viewport -->
    <meta name="viewport" content="width=device-width">
    
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
    
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/style.css">
    
    <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->
    
    <!-- All JavaScript at the bottom, except this Modernizr build.
       Modernizr enables HTML5 elements & feature detects for optimal performance.
       Create your own custom Modernizr build: www.modernizr.com/download/ -->
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/libs/modernizr-2.5.3.min.js"></script>
		
</head>
<body>
	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
	<header>
	
	</header>
	<div role="main">
		<jdoc:include type="message" />
		<jdoc:include type="component" />
	</div>
	<footer>
	
	</footer>
	
	<jdoc:include type="modules" name="debug" />
	
	<!-- JavaScript at the bottom for fast page loading -->

	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/jquery-1.7.1.min.js"><\/script>')</script>

	<!-- scripts concatenated and minified via build script -->
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/plugins.js"></script>
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/script.js"></script>
	<!-- end scripts -->
	
	<!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
	<script>
		var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>
</body>
</html>
	
		<div id="container" class="container">
			<header>
				<hr class="space" />
				<h1 class="joomla-header span-16 append-1"><?php echo $app->getCfg('sitename'); ?></h1>
				<?php if($this->countModules('h5bp-search')) : ?>
					<div class="joomla-search span-7 last">
		  	 			<jdoc:include type="modules" name="h5bp-search" style="none" />
					</div>
				<?php endif; ?>
				
			</header>
			<?php if($this->countModules('h5bp-topmenu')) : ?>
				<nav class="span-24">
					<jdoc:include type="modules" name="h5bp-topmenu" style="container" />
				</nav>
			<?php endif; ?>
			
			<div id="main" role="main" class="span-16 append-1">
				<?php if($this->countModules('h5bp-topquote')) : ?>
					<jdoc:include type="modules" name="h5bp-topquote" style="none" />
				<?php endif; ?>
				<jdoc:include type="message" />
				<jdoc:include type="component" />
				<hr />
				<?php if($this->countModules('h5bp-bottomleft')) : ?>
				 	<div class="span-7 colborder">
						<jdoc:include type="modules" name="h5bp-bottomleft" style="bottommodule" />
		        	</div>
		        <?php endif; ?>
	
		        <?php if($this->countModules('h5bp-bottommiddle')) : ?>
					<div class="span-7 last">
		        		<jdoc:include type="modules" name="h5bp-bottommiddle" style="bottommodule" />
					</div>
				<?php endif; ?>
			</div>
			
			<?php if($this->countModules('h5bp-sidebar')) : ?>
				<aside class="span-7 last">
					<jdoc:include type="modules" name="h5bp-sidebar" style="sidebar" />
				</aside>
			<?php endif; ?>
			
			<footer class="joomla-footer span-16 append-1">
				<hr />
				&copy;<?php echo date('Y'); ?> <?php echo $app->getCfg('sitename'); ?>
			</footer>
		</div> <!--! end of #container -->
		
		<jdoc:include type="modules" name="debug" />
		
		