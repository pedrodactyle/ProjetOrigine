$(document).ready(affichageactivites) ;


function affichageactivites()
{
  $("#listeActivites tr").hover(getActivite, effaceActivite) ;

 }
 
 function getActivite()
 {
  // alert($(this).attr("id"))
  $.post("detaillerUneActivite",{id : $(this).attr("idActivite")  }, afficheActivite ) ;
 }
   
 function afficheActivite(resultat)
 {
     //alert("afficheActivite"+ resultat) ;
      $("#detailActivite").html(resultat);
 }
  function effaceActivite()
 {
//  $("div#detailActivite").html("");
  //alert("effaceActivite") ;
 }