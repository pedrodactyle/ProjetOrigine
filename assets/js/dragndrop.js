$(document).ready(gererDragNDrop) ;


function gererDragNDrop()
{
//var test=$("#participant1").html() ;
//alert("test");
 $("#participants  li").draggable(); // Rendre draggable chaque li de la liste 1
 
 
  $("#participants li").draggable('option','revert','invalid') ; // Pour que les éléments glissés retournent à leur position d'origine
                                                            // S'ils ne sont pas déposés dans une zone droppable 
  $("#participants li").draggable('option','opacity',0.5) ;     // Opacité des éléments glissés

  $("#nonParticipants").droppable(); // Rendre droppable les listes     
      
 
  $('#nonParticipants').bind('drop', function(event, ui){  // Attacher un gestionnaire d'évènement
                               
                          //     alert("drop !") ;
                               $(this).append(ui.draggable) ; // Ajouter l'élément glissé (ui.draggable) à l'element de dépot $(this)
                               ui.draggable.removeAttr("style"); // Enlever l'attribut "style" de l'élément déplacé
                               ui.draggable.attr("style","position :relative");
                               var parametres = '{ idAdherent: '+ ui.draggable.attr("id") + ', idActivite: '+ $(this).attr("destination")  +'}' ;  
                              // $.post('ajouter_participant',parametres ,function(){alert("Ajout effectué : "+parametres);}) ;
                               // alert("suppression : "+parametres + " ou "+ "{idAdherent: 2, idActivite: 1}");
                              
                              
                               //  parametres =  '{ idAdherent: 2, idActivite: 1 }' ;
                               $.post('supprimer_participant',{ idAdherent: ui.draggable.attr("id"),idActivite: $(this).attr("destination")}  ) ;
                               //$.post('supprimer_participant',{idAdherent: 2, idActivite: 1} ) ;
                              
                              }
                       ) ;     
                       
    $("#nonParticipants  li").draggable(); // Rendre draggable chaque li de la liste 1
 
 
  $("#nonParticipants li").draggable('option','revert','invalid') ; // Pour que les éléments glissés retournent à leur position d'origine
                                                            // S'ils ne sont pas déposés dans une zone droppable 
  $("#nonParticipants li").draggable('option','opacity',0.5) ;     // Opacité des éléments glissés

  $("#participants").droppable(); // Rendre droppable les listes     
      
 
  $('#participants').bind('drop', function(event, ui){  // Attacher un gestionnaire d'évènement
                               
                          //     alert("drop !") ;
                               $(this).append(ui.draggable) ; // Ajouter l'élément glissé (ui.draggable) à l'element de dépot $(this)
                               ui.draggable.removeAttr("style"); // Enlever l'attribut "style" de l'élément déplacé
                               ui.draggable.attr("style","position :relative"); 
                              //  var parametres = "{ idAdherent : "+ ui.draggable.attr("id") + ", idActivite : "+ $(this).attr("destination")  +"}" ;
                              $.post('ajouter_participant',{ idAdherent: ui.draggable.attr("id"),idActivite: $(this).attr("destination")}  ) ;
                             
                              }
                       ) ;  
                       
                      function ajoutReussi(donnee, statut, xhr)
                      {
                        //alert("Ajout effectué !"+ xhr) ;
                      }          

 }