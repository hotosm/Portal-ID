<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo Kohana::$charset ?>" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<title>OSM Indonesia</title>
	
	<?php foreach ($styles as $style => $media)
		echo HTML::style($style, array('media' => $media)), "\n" ?>
	
	<script type="text/javascript">
		var base_url = '<?php echo URL::site() ?>';
	</script>

	<?php foreach ($scripts as $script)
		echo HTML::script($script), "\n" ?>
</head>
<body class="<?php echo $title; ?>" onload="map_<?php echo $title; ?>();">
	<div id="lang" class="container">
		<div class="row">
			<ul class="nav">
				<li>Please select your language:</li>
				<li><a href="id" class="moblink">Bahasa Indonesia</a></li>
				<li><a href="en" class="moblink">English</a></li>
			</ul>
		</div>
	</div>

	<div id="header" class="container">
		<div class="row">
			<div id="logo">
				<h1><a href="/">OpenStreetMap <span>Indonesia</span></a></h1>
				<p class="byline"><em>in partnership with Australia-Indonesia Facility for Disaster Reduction (AIFDR)</em></p>
			</div>

			<ul id="nav">
				<li id="nav_home"><a href="/">Home <small>Open maps for Indonesia</small></a></li>
				<li id="nav_locations"><a href="/locations">Locations <small>Local partners <span class="amp">&amp;</span> their work</small></a></li>
				<li id="nav_resources"><a href="/resources">Resources <small>Documentation <span class="amp">&amp;</span> software</small></a></li>
				<li id="nav_projects"><a href="/projects">Projects <small>What we're working on</small></a></li>
				<li id="nav_about"><a href="/about">About <small>Our program <span class="amp">&amp;</span> who we are</small></a></li>
			</ul>
		</div>
	</div> <!-- /header -->
	
	<div id="bento" class="container">
			
			<?php echo $content ?>
			
	</div> <!-- /container -->
	
	<div id="footer" class="row">
		<p>Copyright &copy; <?php echo date('Y'); ?></p>
	</div> <!-- /footer -->
</body>
</html>