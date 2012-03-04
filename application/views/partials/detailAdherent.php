<?php
  echo '<h2>'.$adherent->prenom.' '.$adherent->nom.'</h2>' ;
  
  // Photo
  $src=0 ;
  $cheminPhoto = base_url().'assets/images/adherents/'.$adherent->id.'.jpg' ;
  $cheminAnonyme = base_url().'assets/images/adherents/anonyme.JPG' ;
 // echo   $cheminPhoto ;
 if(@fopen($cheminPhoto,'r')) $src=$cheminPhoto ;
 else if(fopen($cheminAnonyme,'r')) $src=$cheminAnonyme ;
 // echo'<p>$cheminPhoto : '.$cheminPhoto.'</p>' ;
// if ($src) 
//echo '<p> chemin existe : '.$cheminPhoto.'<br/>'.exec("ls -l ../../assets/images/adherents/ | grep 1.jpg").'</p>' ;
    echo '<img id="photoAdherent" src="'.$src.'"/>' ;
  //  else   echo     $cheminPhoto ;
  
  $message  = '<ul>' ; 
  $message .= '<li><a href="mailto:"'.$adherent->mail.'">'.$adherent->mail.'</a></li>' ;
  $message .= '</ul>' ;
  echo $message ;
?>