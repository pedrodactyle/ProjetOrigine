<?php include 'includes/document_head.php'?>
		<div id="wrapper">	
			<?php include 'includes/topbar.php'?>		
			<?php include 'includes/sidebar.php'?>
			<div id="main_container" class="main_container container_16 clearfix">
				<?php $keyphrase = '5'; include 'includes/navigation.php'?>
				<div class="flat_area grid_16">
					<h2>Sortable Gallery</h2>
					<p>This is one of <strong>Adminica</strong>'s coolest features, a dynamically sortable gallery. Change the radio buttons and watch them slide! </p>
					<p><strong>You can sort anything with this not just image tiles</strong> eg. it could rearrange a contact or feature list.</p>
				</div>
					<div class="box grid_16">
						<div class="block">	
							<div class="columns clearfix">			
								<div class="col_50">				
									<fieldset class="label_side label_small">
										<label>Filter by:<span>Colour</span></label>
										<div>
											<div class="jqui_radios">
												<input type="radio" name="filter" class="isotope_filter" id="filter_all" checked="true"/><label for="filter_all">All</label>
												<input type="radio" name="filter" class="isotope_filter" id="filter_blue"/><label for="filter_blue">Blue</label>		
												<input type="radio" name="filter" class="isotope_filter" id="filter_sepia"/><label for="filter_sepia">Sepia</label>		
												<input type="radio" name="filter" class="isotope_filter" id="filter_bw"/><label for="filter_bw">Grey</label>
											</div>
										</div>
									</fieldset>	
								</div>
								<div class="col_50">														
									<fieldset class="label_side label_small">
										<label>Sort by:<span>Order</span></label>
										<div>
											<div class="jqui_radios">
												<input type="radio" name="sort" class="isotope_sort" id="sort_name" checked="true"/><label for="sort_name">Name</label>
												<input type="radio" name="sort" class="isotope_sort" id="sort_size" /><label for="sort_size">Size</label>
											</div>
										</div>
									</fieldset>
								</div>
							</div>
						</div>
					</div>
					<div class="grid_16">
						<div class="indent gallery fancybox">
							<?php include 'includes/gallery_images.php'?>
						</div>
					</div>
					<div class="flat_area grid_16">
						<p><strong>Note:</strong> You will need moderate programming ability if you want to change how the sorter works, eg. If you wanted to reverse sort or sort by date. However, if you just want to add more categories then it's a piece of cake.</p>
					</div>
				</div>		
			</div>
		</div>

<script type="text/javascript" src="scripts/isotope/jquery.isotope.min.js"></script>
<script type="text/javascript" src="scripts/fancybox/jquery.fancybox-1.3.4.js"></script>

<script type="text/javascript" src="scripts/adminica/adminica_gallery.js"></script>

<?php include 'includes/closing_items.php'?>