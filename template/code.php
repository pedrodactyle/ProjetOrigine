<?php include 'includes/document_head.php'?>	
		<div id="wrapper">	
			<?php include 'includes/topbar.php'?>		
			<?php include 'includes/sidebar.php'?>
			<div id="main_container" class="main_container container_16 clearfix">
				<?php $keyphrase = '3'; include 'includes/navigation.php'?>
				<div class="box grid_16">
					<h2 class="box_head">Expanded Code View</h2>
					<a href="#" class="grabber">&nbsp;</a>
					<a href="#" class="toggle">&nbsp;</a>
					<div class="toggle_container">
						<div class="block">
							<script type="syntaxhighlighter" class="brush:xml; toolbar:false;"><![CDATA[
							<div class="box grid_16">
								<h2 class="box_head grad_colour">Expanded Code View</h2>
								<a href="#" class="grabber">&nbsp;</a>
								<a href="#" class="toggle">&nbsp;</a>
								<div class="toggle_container">
									<div class="block no_padding">
										Markup for a headered box.								
									</div>
								</div>	
							</div>		]]></script>
						</div>
					</div>	
				</div>	
				<div class="box grid_16">
					<div class="block">
						<script type="syntaxhighlighter" class="brush:xml;collapse:true;"><![CDATA[
						<div class="box grid_16">
							<div class="block no_padding">
								<p>This is a regular box without header.</p>
							</div>
						</div>				]]></script>
					</div>
				</div>
			</div>
		</div>
				
<script type="text/javascript" src="scripts/syntax_highlighter/scripts/shCore.max.js"></script>
<script type="text/javascript" src="scripts/syntax_highlighter/scripts/shBrushXml.js"></script>
<script type="text/javascript" src="scripts/syntax_highlighter/scripts/shBrushJScript.js"></script>
<script type="text/javascript">
	SyntaxHighlighter.all();
</script>
		
<?php include 'includes/closing_items.php'?>