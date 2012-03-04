<?php include 'includes/document_head.php'?>	
		<div id="wrapper">	
			<?php include 'includes/topbar.php'?>		
			<?php include 'includes/sidebar.php'?>
			<div id="main_container" class="main_container container_16 clearfix">
				<?php $keyphrase = '7'; include 'includes/navigation.php'?>
				<div class="box grid_16">
					<h2 class="box_head">File Manager</h2>
					<a href="#" class="grabber">&nbsp;</a>
					<a href="#" class="toggle">&nbsp;</a>
					<div class="toggle_container">
						<div class="block">
							<div class="section">
								<div id="finder"></div>
							</div>																			
						</div>
					</div>	
				</div>	
				
			</div>
		</div>
<script src="scripts/elfinder/js/elfinder.min.js"></script>
	<script type="text/javascript" charset="utf-8">
		$().ready(function() {
			
			var f = $('#finder').elfinder({
				url : 'scripts/elfinder/connectors/php/connector.php',
				places: '',
				toolbar : [
					['back', 'reload'],['mkdir','copy','paste'],['remove','rename','info'],['icons','list']
				],

				// dialog : {
				// 	title : 'File manager',
				// 	height : 500
				// }

				// Callback example
				//editorCallback : function(url) {
				//	if (window.console && window.console.log) {
				//		window.console.log(url);
				//	} else {
				//		alert(url);
				//	}
				//},
				//closeOnEditorCallback : true
			})
			// window.console.log(f)
			$('#close,#open,#dock,#undock').click(function() {
				$('#finder').elfinder($(this).attr('id'));
			})
			
		})
	</script>
		
<?php include 'includes/closing_items.php'?>