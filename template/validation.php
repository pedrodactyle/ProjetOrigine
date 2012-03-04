<?php include 'includes/document_head.php'?>
		<div id="wrapper">
			<?php include 'includes/topbar.php'?>		
			<?php include 'includes/sidebar.php'?>
				<div id="main_container" class="main_container container_16 clearfix">
				<?php $keyphrase = '4'; include 'includes/navigation.php'?>

					<div class="box grid_16">
						<div class="block">
							<h2 class="section">Form Validation</h2>
							
							<form class="validate_form">
							<fieldset class="label_side">
								<label for="required_field">Text Field<span>Regular field</span></label>
								<div>
									<input id="required_field" type="text" class="required">
									<div class="required_tag"></div>
								</div>
							</fieldset>

							<fieldset class="label_side">
								<label for="required_textarea">Textarea<span>Autogrow Textarea</span></label>
								<div class="clearfix">
									<textarea id="required_textarea" class="autogrow required"></textarea>
									<div class="required_tag"></div>
								</div>
							</fieldset>

							<fieldset class="label_side">
								<label for="required_email">Email Address</label>
								<div>
									<input type="text" id="required_email" class="required email">
									<div class="required_tag"></div>
								</div>
							</fieldset>

								
							<div class="button_bar clearfix">
								<button class="green" type="submit">
									<img height="24" width="24" alt="Bended Arrow Right" src="images/icons/small/white/bended_arrow_right.png">
									<span>Submit</span>
								</button>
							</div>
							</form>
						</div>
					</div>
				</div>						
			</div>
		</div>

<script type="text/javascript">
	$(".validate_form").validate();
</script>
		
<?php include 'includes/closing_items.php'?>