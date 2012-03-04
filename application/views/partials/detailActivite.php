<?php
  if ($nbInscriptions==0) $messageInscriptions = "Personne n'est inscrit" ;
    else if ($nbInscriptions==1) $messageInscriptions = "Une personne est inscrite" ;
    else $messageInscriptions = "$nbInscriptions personnes sont inscrites" ; 
  
  $message  = '<h2>'.$activite->libelle.'</h2>' ;
  $message .= '<ul>' ; 
  $message .= '<li>'.$messageInscriptions.'</li>' ;
  $message .= '<li>'.$activite->date.'</li>' ;
  $message .= '<li>'.$activite->lieu.'</li>' ; ;
  $message .= '</ul>' ;
  echo $message ;
?>