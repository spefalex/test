$(document).on('click', '.delete-btn', function(){ 
    if(confirm('Etes vous sur de supprimer cette fiche?')){
     
		if( $('input[id=checkbox]').is(':checked')){
			$("input[type=checkbox]:checked").each( 
    function() { 
	 var id = $(this).closest('td').find('.NumFiche').text();
			
$.post("../Modele/deleteFiches.php", { id:id }).done(function(data){
    alert("Bien Supprimer");
    document.location.href="../Vue/readFiche.php"; 
                
        });
	});
	   }
    else{alert("Veuillez choisir une fiche");} } 
});

  $('#create-fiche').click(function(){
      document.location.href="../Vue/InsertionFiche.php"; 
    });