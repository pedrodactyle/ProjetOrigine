<?php include 'includes/document_head.php'?>
		<div id="wrapper">	
			<?php include 'includes/topbar.php'?>		
			<?php include 'includes/sidebar.php'?>
			<div id="main_container" class="main_container container_16 clearfix">
				<?php $keyphrase = '3'; include 'includes/navigation.php'?>
				<div class="flat_area grid_16">
					<h2>Step by Step Wizard</h2>
				</div>
				<div class="box grid_16">
					<h2 class="box_head">Wizard</h2>
					<a href="#" class="grabber">&nbsp;</a>
					<a href="#" class="toggle">&nbsp;</a>
					<div class="toggle_container">
						<div class="wizard">
							<div class="wizard_progressbar"></div>
							
							<div class="wizard_steps">
								<ul class="clearfix">
									<li class="current">
										<a href="#step_1" class="clearfix">
											<span>1. <strong>Register</strong></span>
											<small>It only takes a minute</small>
										</a>
									</li>
									<li>
										<a href="#step_2" class="clearfix">
											<span>2. <strong>Information</strong></span>
											<small>Fill out our form</small>
										</a>
									</li>
									<li>
										<a href="#step_3" class="clearfix">
											<span>3. <strong>Another Step</strong></span>
											<small>Were nearly there</small>
										</a>
									</li>
									<li>
										<a href="#step_4" class="clearfix">
											<span>4. <strong>Finish</strong></span>
											<small>Confirm and complete</small>
										</a>
									</li>
								</ul>		
							</div>
							
							<div class="wizard_content">
							
								<div id="step_1" class="step block" style="display:block;">
									<h1 class="section">1. Register</h1>
								
									<fieldset class="label_side">
										<label>Text Field<span>Label placed beside the Input</span></label>
										<div>
											<input type="text">
										</div>
									</fieldset>
								
									<fieldset class="label_side">
										<label>Text Field<span>Label placed beside the Input</span></label>
										<div>
											<input type="text">
										</div>
									</fieldset>
									
									<div class="button_bar clearfix">
										<button class="next_step move send_right" data-goto="step_2">
											<img height="24" width="24" alt="Bended Arrow Right" src="images/icons/small/white/bended_arrow_right.png">
											<span>Next Step</span>
										</button>
									</div>
								</div>
	
								<div id="step_2" class="step block">
									<h1 class="section">2. Information</h1>
								
									<fieldset class="label_side">
										<label>Text Field<span>Label placed beside the Input</span></label>
										<div>
											<input type="text">
										</div>
									</fieldset>
								
									<fieldset class="label_side">
										<label>Text Field<span>Label placed beside the Input</span></label>
										<div>
											<input type="text">
										</div>
									</fieldset>
									
									<div class="button_bar clearfix">
										<button class="next_step move light" data-goto="step_1">
											<img height="24" width="24" alt="Bended Arrow Right" src="images/icons/small/grey/bended_arrow_left.png">
											<span>Prev Step</span>
										</button>
										<button class="next_step move send_right" data-goto="step_3">
											<img height="24" width="24" alt="Bended Arrow Right" src="images/icons/small/white/bended_arrow_right.png">
											<span>Next Step</span>
										</button>
									</div>
								</div>		
							
								<div id="step_3" class="step block">
									<h1 class="section">3. Another Step</h1>
								
									<fieldset class="label_side">
										<label>Text Field<span>Label placed beside the Input</span></label>
										<div>
											<input type="text">
										</div>
									</fieldset>
								
									<fieldset class="label_side">
										<label>Text Field<span>Label placed beside the Input</span></label>
										<div>
											<input type="text">
										</div>
									</fieldset>
									
									<div class="button_bar clearfix">
										<button class="next_step move light" data-goto="step_2">
											<img height="24" width="24" alt="Bended Arrow Right" src="images/icons/small/grey/bended_arrow_left.png">
											<span>Prev Step</span>
										</button>
										<button class="next_step move send_right" data-goto="step_4">
											<img height="24" width="24" alt="Bended Arrow Right" src="images/icons/small/white/bended_arrow_right.png">
											<span>Next Step</span>
										</button>
									</div>
								</div>
							
								<div id="step_4" class="step block">
									<h1 class="section">4. Another Step</h1>
								
									<fieldset class="label_side">
										<label>Text Field<span>Label placed beside the Input</span></label>
										<div>
											<input type="text">
										</div>
									</fieldset>
								
									<fieldset class="label_side">
										<label>Text Field<span>Label placed beside the Input</span></label>
										<div>
											<input type="text">
										</div>
									</fieldset>
									
									<div class="button_bar clearfix">
										<button class="next_step move light" data-goto="step_3">
											<img height="24" width="24" alt="Bended Arrow Right" src="images/icons/small/grey/bended_arrow_left.png">
											<span>Prev Step</span>
										</button>
										<button class="next_step green send_right">
											<img height="24" width="24" alt="Bended Arrow Right" src="images/icons/small/white/bended_arrow_right.png">
											<span>Complete</span>
										</button>
									</div>
								</div>
							</div>										
						</div>
					</div>
				</div>
			</div>
		</div>
		
<script type="text/javascript" src="scripts/adminica/adminica_wizard.js"></script>

<?php include 'includes/closing_items.php'?>