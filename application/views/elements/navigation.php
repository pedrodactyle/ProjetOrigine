<div id="nav_top" class="clearfix round_top">
	<ul class="clearfix">
	     <li><a href="<?php echo site_url(); ?>/entree/montrer_vue_lien1"><img src="<?php echo base_url(); ?>template/images/icons/small/grey/home.png"/><span>Lien 1</span></a>
			 </li>
	 
	

		<li><a href="#"><img src="<?php echo base_url(); ?>template/images/icons/small/grey/coverflow.png"/><span>Liste de liens</span></a>
			<ul>
				<li><a href=""><span>Item 1</span></a></li>
				<li><a href=""><span>Item 2</span></a></li>
					<li><a class="hide_mobile" href="#"><span>Sous-sous-menu</span></a>
					<ul class="drawer">						
						<li><a href=""><span>Premier</span></a></li>
						<li><a href=""><span>Second</span></a></li>
					</ul>
				</li>
				
			</ul>
		</li>		
	
	 
	</ul>
 
			
                            <?php $this->load->view('elements/dialog_logout.php');?>
	
	
<script type="text/javascript">
	
	var currentPage = <?php echo $keyphrase ?> -1 ;  // This is only used in php to tell the nav what the current page is
	$('#nav_top > ul > li').eq(currentPage).addClass("current");
	$('#nav_top > ul > li').addClass("icon_only").children("a").children("span").parent().parent().removeClass("icon_only");
</script>
 
	
	<div id="mobile_nav">
		<div class="main"></div>
		<div class="side"></div>
	</div>
	
</div><!-- #nav_top -->
