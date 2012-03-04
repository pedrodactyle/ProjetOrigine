<!doctype html public "✰">
<!--[if lt IE 7]> <html lang="en-us" class="no-js ie6"> <![endif]-->
<!--[if IE 7]>    <html lang="en-us" class="no-js ie7"> <![endif]-->
<!--[if IE 8]>    <html lang="en-us" class="no-js ie8"> <![endif]-->
<!--[if IE 9]>    <html lang="en-us" class="no-js ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-us" class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		
		<title>Prog Avancée LPCM</title>
  		<meta name="author" content="Groupe Machin">
  		
	<!-- iPhone, iPad and Android specific settings -->	
	
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1;">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
		<link rel="apple-touch-icon" href="<?php echo base_url() ; ?>template/images/iOS_icon.png">
		<link rel="apple-touch-startup-image" href="<?php echo base_url() ; ?>template/images/iOS_startup.png">
				
	<!-- Styles -->

		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>template/styles/reset.css">
	<!--	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">
	-->	
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>template/scripts/fancybox/jquery.fancybox-1.3.4.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>template/scripts/tinyeditor/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>template/scripts/slidernav/slidernav.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>template/scripts/syntax_highlighter/styles/shCore.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>template/scripts/syntax_highlighter/styles/shThemeDefault.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>template/scripts/uitotop/css/ui.totop.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>template/scripts/fullcalendar/fullcalendar.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>template/scripts/isotope/isotope.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>template/scripts/elfinder/css/elfinder.css">
		
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>template/scripts/tiptip/tipTip.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>template/scripts/uniform/css/uniform.aristo.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>template/scripts/multiselect/css/ui.multiselect.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>template/scripts/selectbox/jquery.selectBox.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>template/scripts/colorpicker/css/colorpicker.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>template/scripts/uistars/jquery.ui.stars.min.css">
		
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>template/scripts/themeroller/Aristo.css">
		
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>template/styles/text.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>template/styles/grid.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>template/styles/main.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>template/styles/theme/theme_base.css">

		<!-- Style Switcher  
		
		The following stylesheet links are used by the styleswitcher to allow for dynamically changing how Adminica looks and acts.
		Styleswitcher documentation: http://style-switcher.webfactoryltd.com/documentation/
		
		switcher1.php : layout - fluid by default.								(eg. styles/theme/switcher1.php?default=layout_fixed.css)
		switcher2.php : header and sidebar positioning - sidebar by default.	(eg. styles/theme/switcher1.php?default=header_top.css)
		switcher3.php : colour skin - black/grey by default.					(eg. styles/theme/switcher1.php?default=theme_red.css)
		switcher4.php : background image - dark boxes by default.				(eg. styles/theme/switcher1.php?default=bg_honeycomb.css)
		switcher5.php : controls the theme - dark by default.					(eg. styles/theme/switcher1.php?default=theme_light.css)
		
		-->
		
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>template/styles/theme/switcher.css" media="screen">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>template/styles/theme/switcher1.php?default=layout_fixed.css" media="screen" > 
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>template/styles/theme/switcher2.php?default=switcher.css" media="screen" >
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>template/styles/theme/switcher3.php?default=theme_blue.css" media="screen" >
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>template/styles/theme/switcher4.php?default=bg_wood.css" media="screen" >
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>template/styles/theme/switcher5.php?default=switcher.css" media="screen" >
		
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>template/styles/colours.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>template/styles/ie.css">
		
	<!-- Scripts -->

		<!-- Load JQuery -->		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

		<!-- Load JQuery UI -->
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/jquery-ui.min.js" type="text/javascript"></script>
		
		<!-- Global -->
		<script src="<?php echo base_url() ; ?>template/scripts/touchPunch/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url() ; ?>template/scripts/uitotop/js/jquery.ui.totop.js" type="text/javascript"></script>
				
		<!-- Forms -->
		<script src="<?php echo base_url(); ?>template/scripts/uniform/jquery.uniform.min.js"></script>
		<script src="<?php echo base_url(); ?>template/scripts/autogrow/jquery.autogrowtextarea.js"></script>
		<script src="<?php echo base_url(); ?>template/scripts/multiselect/js/ui.multiselect.js"></script>
		<script src="<?php echo base_url(); ?>template/scripts/selectbox/jquery.selectBox.min.js"></script>
		<script src="<?php echo base_url(); ?>template/scripts/timepicker/jquery.timepicker.js"></script>
		<script src="<?php echo base_url(); ?>template/scripts/colorpicker/js/colorpicker.js"></script>
		<script src="<?php echo base_url(); ?>template/scripts/uistars/jquery.ui.stars.min.js"></script>
		<script src="<?php echo base_url(); ?>template/scripts/tiptip/jquery.tipTip.minified.js"></script>
		<script src="<?php echo base_url(); ?>template/scripts/validation/jquery.validate.min.js" type="text/javascript"></script>	
    <script src="<?php echo base_url() ;?>template/scripts/DataTables/jquery.dataTables.js" type="text/javascript" ></script>
    <script src="<?php echo base_url() ;?>template/scripts/adminica/adminica_datatables.js" type="text/javascript" ></script>	

		<!-- Configuration Script -->
		<script type="text/javascript" src="<?php echo base_url(); ?>template/scripts/adminica/adminica_ui.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>template/scripts/adminica/adminica_forms.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>template/scripts/adminica/adminica_mobile.js"></script>
		
		<!-- Live Load (remove after development) -->
		<script>  // document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
     
	</head>
	<body>