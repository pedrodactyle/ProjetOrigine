<?php include 'includes/document_head.php'?>
		<div id="wrapper">	
			<?php include 'includes/topbar.php'?>		
			<?php include 'includes/sidebar.php'?>
			<div id="main_container" class="main_container container_16 clearfix">
				<?php $keyphrase = '9'; include 'includes/navigation.php'?>
				<div class="flat_area grid_16">
					<h2>Graphs and Charts</h2>
				</div>
				<div class="box grid_16">
					<h2 class="box_head">Line Graph</h2>
					<a href="#" class="grabber"></a>
					<a href="#" class="toggle"></a>
					<div class="toggle_container">					
						<div class="block">
							<div class="section">
								<div id="flot_line" class="flot"></div>
							</div>
				 		</div>
					</div>
				 </div>
				
				<div class="box grid_16">
					<h2 class="box_head">Point Graph with Pie chart</h2>
					<a href="#" class="grabber"></a>
					<a href="#" class="toggle"></a>
					<div class="toggle_container">					
						<div class="block">
							<div class="columns">
								<div class="col_66">
									<div class="section">
										<div id="flot_points" class="flot"></div>
									</div>								
								</div>
								<div class="col_33">
									<div class="section">
										<div id="flot_pie_1" class="flot"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="box grid_16">
					<h2 class="box_head">Bar Graph</h2>
					<a href="#" class="grabber"></a>
					<a href="#" class="toggle"></a>
					<div class="toggle_container">					
						<div class="block">
							<div class="section">
								<div id="flot_bar" class="flot"></div>
							</div>
						</div>
					</div>
				</div>													
			</div>
		</div>
		
<script type='text/javascript' src='scripts/flot/excanvas.min.js'></script>
<script type='text/javascript' src='scripts/flot/jquery.flot.min.js'></script>
<script type='text/javascript' src='scripts/flot/jquery.flot.resize.min.js'></script>		
<script type='text/javascript' src='scripts/flot/jquery.flot.pie.min.js'></script>
<script type='text/javascript' src='scripts/flot/jquery.flot.pie.resize_update.js'></script>

<script type="text/javascript" src="scripts/adminica/adminica_charts.js"></script>
		
<?php include 'includes/closing_items.php'?>