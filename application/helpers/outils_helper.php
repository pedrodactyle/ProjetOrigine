  <?php   if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    function getImageMarkUp($niveau)
    { 
      switch($niveau)
      {
        case 'confirmé' : $im = '1' ;    break ;
        case 'débutant' : $im = '2' ;    break ;
        case 'expert' : $im = '3' ;      break ;
        default  : $im='' ;
      }
      $chemin = base_url().'assets/images/' ;
      return '<img src="'.$chemin.$im.'.gif" alt="'.$niveau.'" title="'.$niveau.'" width="40" height="12"/>' ; 
    }
    
    function get_image_suppr()
    {
       $chemin = base_url().'assets/images/' ;
       return $chemin.'icone_suppr.png' ;
    }
  ?>
