$(document).on('click', '.edit-btn', function(){ 
 
var n=$("input:checked" ).length;
	if(n==1){
	
	if( $('input[id=checkbox]').is(':checked')){
	$("input[type=checkbox]:checked").each( 
    function() { 
	 var id = $(this).closest('td').find('.NumCategorie').text();

     document.location.href="../Vue/updateCategorie.php?idCategorie="+id; 
             
                });
} 
else
	{alert("Veuillez choisir une catégorie!")

}
	}

else{
	
	alert("Veuillez choisir seulement une catégorie!");
}
	  
} 
);

	$(document).on('submit', '#update-categorie-form', function() {
 
    $.post("../Modele/updateCategorie.php",$(this).serialize()).done(function(data) {
             
          alert("bien modifier");
          document.location.href="../Vue/readCategories.php"; 
        });
             
    return false;
});