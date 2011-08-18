<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="<?php echo Kohana::$charset ?>">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>OSM Indonesia</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="/assets/css/style.css">
  <script src="/assets/js/libs/modernizr-2.0.6.min.js"></script>
</head>
	
	<?php foreach ($styles as $style => $media)
		echo HTML::style($style, array('media' => $media)), "\n" ?>
	
	<script type="text/javascript">
		var base_url = '<?php echo URL::site() ?>';
	</script>
</head>
<body class="<?php echo $title; ?>">
<div id="wrapper">
	<div id="lang" class="container">
		<div class="row">
			<ul class="horz">
				<li>Please select your language:</li>
				<li><a href="id" class="moblink">Bahasa Indonesia</a></li>
				<li><a href="en" class="moblink">English</a></li>
			</ul>
		</div>
	</div>

	<header id="header" class="container">
		<div class="row">
			<div id="logo">
				<h1><a href="/">OpenStreetMap <span>Indonesia</span></a></h1>
				<p class="byline"><em>in partnership with Australia-Indonesia Facility for Disaster Reduction (AIFDR)</em></p>
			</div>

			<nav>
				<ul>
					<li id="nav_home"><a href="/">Home <small>Open maps for Indonesia</small></a></li>
					<li id="nav_locations"><a href="/locations">Locations <small>Local partners <span class="amp">&amp;</span> their work</small></a></li>
					<li id="nav_resources"><a href="/resources">Resources <small>Documentation <span class="amp">&amp;</span> software</small></a></li>
					<li id="nav_projects"><a href="/projects">Projects <small>What we're working on</small></a></li>
					<li id="nav_about"><a href="/about">About <small>Our program <span class="amp">&amp;</span> who we are</small></a></li>
				</ul>
			</nav>
		</div>
	</header>
	
	<div id="bento" class="container" role="main">
		<?php echo $content ?>
	</div> <!-- /container -->
</div> <!-- /wrapper -->

<footer>
	<div id="footerInner">
		<p>Copyright OpenStreetMap &copy; <?php echo date('Y'); ?></p>
	</div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/assets/js/libs/jquery-1.6.2.min.js"><\/script>')</script>
<script defer src="/assets/js/script.js"></script>

<script defer type="text/javascript" src="/assets/js/mylibs/modestmaps.min.js"></script>
<script defer type="text/javascript" src="/assets/js/mylibs/wax.mm.min.js"></script>
<script defer src="/assets/js/maps.js"></script>

<script>
//   window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
//   Modernizr.load({
//     load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
//   });
</script>
</body>
</html>