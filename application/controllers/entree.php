<?php
  class Entree extends CI_controller{
  public function __construct()
	{
		parent::__construct(); // pour pouvoir utiliser $this-> ...
	}
     
            
  function index()
  {
    $pourLaVue['page'] = 'pages/accueil' ;   // Choix de la vue à afficher
    $this->load->view('layout',$pourLaVue) ; // affichage du layout avec la vue sélectionnée  
  }
  
  function montrer_vue_lien1()
  {
    $pourLaVue['page'] = 'pages/je_peux_placer_mes_vues_dans_des_sous_dossiers/vue_principale' ;
    $this->load->view('layout',$pourLaVue) ; // affichage du layout 
  }
  
 
  }
?>
