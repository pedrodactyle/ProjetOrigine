$(document).ready(affichageactivites) ;


function affichageactivites()
{
  $("#listeAdherents tr").hover(getAdherent, effaceAdherent) ;

 }
 
 function getAdherent()
 {
   //alert('{id :'+ $(this).attr("idadherent")+'  }') ;
  idAdh= $(this).attr("idadherent") ;
  adh = $(this) ;
  $.post("detaillerUnAdherent",{id : $(this).attr("idadherent")  }, function(resultat)
                                                                      {
                                                                        position=adh.position() ; 
                                                                        $("#detailAdherent").html(resultat);
                                                                        $("#detailAdherent").attr("style", "top : "+(position.top-70)+"px" );
                                                                        
                                                                         
                                                                        }
                                                                        ) ;
 }
   

  function effaceAdherent()
 {
//  $("div#detailActivite").html("");
  //alert("effaceActivite") ;
 }