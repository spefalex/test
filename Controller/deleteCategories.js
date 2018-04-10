$(document).on('click', '.delete-btn', function(){ 
    if(confirm('Etes vous sur de supprimer cette catégorie?')){
     
		if( $('input[id=checkbox]').is(':checked')){
			$("input[type=checkbox]:checked").each( 
    function() { 
	 var id = $(this).closest('td').find('.NumCategorie').text();
			
$.post("../Modele/deleteCategories.php", { id:id }).done(function(data){
    alert("Bien Supprimer");
    document.location.href="../Vue/readCategories.php"; 
                
        });
	});
	   }
    else{alert("Veuillez choisir une catégorie");} } 
});

  $('#create-categories').click(function(){
      document.location.href="../Vue/InsertCategorie.php"; 
    });