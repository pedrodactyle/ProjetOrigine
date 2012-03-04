<div id="sidebar">
	<div class="cog">+</div>
	
	<a href="<?php echo site_url(); ?>" class="logo"><span>Accueil</span></a>

	<div class="user_box dark_box clearfix">
		<img src="<?php echo base_url(); ?>template/images/profile.jpg" width="55" alt="Profile Pic" />
		<h2>Projet Bidule</h2>
		<h3><a href="#">Groupe Machin</a></h3>
		<ul>
			<li><a href="#">Profil</a><span class="divider">|</span></li>
			<li><a href="login.php">Déconnexion</a></li>
		</ul>
	</div><!-- #user_box -->

	<ul class="side_accordion"> <!-- add class 'open_multiple' to change to from accordion to toggles -->
		 <li><a href="<?php echo site_url(); ?>"><img src="<?php echo base_url(); ?>template/images/icons/small/grey/home.png"/>Accueil</a></li>	
		<li><a href="#"><img src="<?php echo base_url(); ?>template/images/icons/small/grey/documents.png"/>Liens</a>
			<ul class="drawer">
				<li><a href="https://phpfog.com/">PhpFog</a></li>
				<li><a href="http://git-scm.com/">Git</a></li>
				<li><a href="https://github.com/pedrodactyle/ProjetOrigine">Projet d'Origine</a></li>
			</ul>
		</li>
</ul>		
	
	<form>
		<div id="search_side" class="dark_box"><input class="" type="text" value="Rechercher ..." onclick="value=''"></div>
	</form>
 
	<ul id="side_links" class="side_links" style="margin-bottom:0;">
		<li><a href="http://goo.gl/UjRRe">Doc du template</a>

		<li><a href="http://themeforest.net/item/admin-control-panel-v2/439777?clickthrough_id=43108361&redirect_back=true&ref=datatables&ref=datatables">Site du template</a></li>
	</ul>

</div><!-- #sidebar -->
