$(document).ready(initialiser) ;

function initialiser()
{
  $(".editable").each(rendreEditable) ;
}

function rendreEditable()
{
  // alert("rendre editable ce champ") ;
    $(this).editable("enregistrer_libelle", {event : "dblclick", tooltip   : "Double-cliquez pour modifier",  submitdata : {idActivite : $(this).closest("tr").attr('idactivite')} }  );
//  $(this).editable("afficher_activites", {event : "dblclick", tooltip   : "Double-cliquez pour modifier", style  : "inherit", submitdata : {idActivite: $(this).closest("tr").attr('activite')}  });
}

