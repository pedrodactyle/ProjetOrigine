<?php $this->load->view('elements/document_head.php') ; ?>    <!-- va jusqu'à <body> inclus -->

		<div id="wrapper">
			<?php $this->load->view('elements/topbar.php') ; ?>	
			<?php $this->load->view('elements/sidebar.php') ;?>
			
			<?php
      // à venir : un foreach affichant chaque partiel du contenu principal
          $this->load->view($page) ;
      
      
      ?>
			
			
     <!-- 
      <div id="main_container" class="main_container container_16 clearfix">
				<?php // $keyphrase = '1'; $this->load->view('elements/navigation.php') ;?> 
				<div class="box grid_6 tabs">
					<ul class="tab_header clearfix">
						<li>
							<a href="#tabs-1">Layout</a>
						</li>
						<li>
							<a href="#tabs-2" class="round_top">Tricycle</a>
						</li>
					</ul>
					<a href="#" class="grabber">&nbsp;</a>
					<a href="#" class="toggle">&nbsp;</a>
					<div class="toggle_container">
						<div id="tabs-1" class="block">
							<ul class="flat_large">
								<li>Toggle <a href="{site_url}template/css/theme/switcher1.php?style=layout_fixed.css">Fixed</a> and <a href="css/theme/switcher1.php?style=switcher.css">Fluid</a> width layout</li>
								<li><a href="{site_url}template/css/theme/switcher2.php?style=switcher.css">Sidebar</a> or <a href="css/theme/switcher2.php?style=layout_top.css">Full Width</a></li>								
								<li class="theme_colour">
									<a class="black" href="template/css/theme/switcher3.php?style=switcher.css">
										<span>Black</span></a>
									<a class="blue" href="template/css/theme/switcher3.php?style=theme_blue.css">
										<span>Blue</span></a>
									<a class="navy" href="template/css/theme/switcher3.php?style=theme_navy.css">
										<span>Navy</span></a>
									<a class="red" href="template/css/theme/switcher3.php?style=theme_red.css">
										<span>Red</span></a>
									<a class="green" href="template/css/theme/switcher3.php?style=theme_green.css">
										<span>Green</span></a>
									<a class="magenta" href="template/css/theme/switcher3.php?style=theme_magenta.css">
										<span>Magenta</span></a>
									<a class="orange" href="template/css/theme/switcher3.php?style=theme_brown.css">
										<span>Brown</span></a>
								</li>
								<li><a href="template/css/theme/switcher2.php?style=header_slideout.css">New Slide Menu!</a> Check it out.</li>
							</ul>
						</div>
						<div id="tabs-2" class="block">
							<div class="section">
								<p><strong>Adminica</strong> was created by <a href="http://www.tricycle.ie" target="_blank">Tricycle Interactive</a>. Please visit our site and have a look around - <a href="http://www.tricycle.ie" target="_blank">www.tricycle.ie</a></p>
								<p>If you need special customization to the theme, please email <strong>themeforest@tricycle.ie</strong>.
							</div>
						</div>
					</div>
				</div>		
				
				<div class="flat_area grid_10">
					<h2>Welcome to <strong>Adminica</strong></h2>
					<p><strong>Adminica</strong> is a <strong>cleanly coded</strong>, <strong>beautifully styled</strong>, easily <strong>customisable</strong>, <strong>cross-browser</strong> compatible <strong>Web Application Interface</strong>.</p>

					<p><strong>Adminica</strong> is packed full of features, allowing you<strong> unlimited combinations</strong> of layouts, controls and styles to ensure you have a <strong>trully unique app</strong>. </p>

					<p><strong>Adminica</strong>  can <strong>scale itself automatically</strong> to fit whatever screen resolution the user has. The interface<strong> works perfectly all the way down to iPhone size</strong></p>
				</div>				
			</div>
			
			<div class="main_container container_16 clearfix">
				<div class="box grid_8">
					<div class="block">					
						<fieldset class="label_side label_small">
							<label>Filter by:</label>
							<div>
								<div class="jqui_radios">
									<input type="radio" name="filter" class="isotope_filter" id="filter_all" checked="true"/><label for="filter_all">All</label>
									<input type="radio" name="filter" class="isotope_filter" id="filter_new"/><label for="filter_new">New</label>		
									<input type="radio" name="filter" class="isotope_filter" id="filter_cool"/><label for="filter_cool">Cool</label>		
								</div>
							</div>
						</fieldset>	
					</div>
				</div>
				<div class="box grid_8">
					<div class="block">	
						<fieldset class="label_side label_small">
							<label>Sort by:<span>Order</span></label>
							<div>
								<div class="jqui_radios">
									<input type="radio" name="sort" class="isotope_sort" id="sort_name" checked="true"/><label for="sort_name">Name</label>
									<input type="radio" name="sort" class="isotope_sort" id="sort_update"/><label for="sort_update">Update</label>
									<input type="radio" name="sort" class="isotope_sort" id="sort_random"/><label for="sort_random">Random</label>								
								</div>
							</div>
						</fieldset>
					</div>
				</div>
				<div class="grid_16">
					<div class="indent gallery">
						<?php // $this->load->view('elements/feature_tiles.php') ;?>
					</div>
				</div>
				
			</div>
			<div class="main_container container_16 clearfix">
				<div class="flat_area grid_16">
					<p><strong>Adminica</strong> comes bundled with <strong>7 beautiful themes</strong> and backgrounds (...my favorite are <a href="template/css/theme/switcher1.php?style=multiple&switcher3.php=theme_navy.css&switcher4.php=bg_wood.css">navy</a> and <a href="template/css/theme/switcher1.php?style=multiple&switcher3.php=theme_blue.css&switcher4.php=bg_honeycomb.css">blue</a>). You can easily create your own themes by specifying your own colour values. All gradients and buttons have been created using <strong>CSS3 so no need to save out new images!</strong></p>
				</div>
			</div>
			-->
		</div>	
		
<script type="text/javascript" src="<?php echo base_url() ; ?>template/scripts/isotope/jquery.isotope.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ; ?>template/scripts/fancybox/jquery.fancybox-1.3.4.js"></script>

<script type="text/javascript" src="<?php echo base_url() ; ?>template/scripts/adminica/adminica_gallery.js"></script>
		 
<?php $this->load->view('elements/closing_items.php') ;?>