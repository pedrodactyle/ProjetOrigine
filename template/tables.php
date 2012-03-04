<?php include 'includes/document_head.php'?>

		<div id="wrapper">		
			<?php include 'includes/topbar.php'?>
			<?php include 'includes/sidebar.php'?>
	
			<div id="main_container" class="main_container container_16 clearfix">
				<?php $keyphrase = '6'; include 'includes/navigation.php'?>
				<div class="flat_area grid_16">
					<h2>Sortable Tables</h2>
					<p>This <strong>jQuery powered Table</strong> takes a standard html table and turns it into a <strong>sortable</strong>, <strong>filterable</strong> and <strong>searchable</strong>  table. The<strong> search is LIVE</strong> so doesn't require you to reload the page! Also, the items are <strong>automatically paginated</strong> into sets of 10, 20 or 50. </p><p>Try it out and you'll see how <strong>powerful yet easy to use</strong> it is.</p>
				</div>
				<div class="box grid_16 single_datatable">
					<div id="dt1" class="no_margin"><?php include 'includes/datatables_data.php'?></div>
				</div>
				<div class="flat_area grid_16">
					<h2>Tabbed table</h2>
					<p>The table below can be placed in a tabbed box just like any other <strong>Adminica</strong> control. This is really good to supply extra info about table or even plot a graph of the data. </p>
				</div>
				<div class="box grid_16 tabs">		
						<ul id="touch_sort" class="tab_header clearfix">
							<li><a href="#tabs-1">Table Data</a></li>
							<li><a href="#tabs-2">Table <span>(no pagination)</span></a></li>
							<li><a href="#tabs-3">Another Tab</a></li>
						</ul>	
						<a href="#" class="grabber"></a>
						<a href="#" class="toggle"></a>
						<div class="toggle_container">
							<div id="tabs-1" class="block">
								<div id="dt2"><?php include 'includes/datatables_data.php'?></div>
							</div>
							<div id="tabs-2" class="block">
								<div id="dt3"><?php include 'includes/datatables_data.php'?></div>
							</div>
							<div id="tabs-3" class="block">
								<div class="section">
									<p>Information about the Table can go here, or another table could go here or pretty much anything could go here!</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
<script type="text/javascript" src="scripts/DataTables/jquery.dataTables.js"></script>

<script type="text/javascript" src="scripts/adminica/adminica_datatables.js"></script>
		
<?php include 'includes/closing_items.php'?>