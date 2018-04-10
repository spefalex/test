$(document).on('click', '.edit-btn', function(){ 
 
var n=$("input:checked" ).length;
	if(n==1){
	
	if( $('input[id=checkbox]').is(':checked')){
	$("input[type=checkbox]:checked").each( 
    function() { 
	 var id = $(this).closest('td').find('.NumFiche').text();

     document.location.href="../Vue/updateFiche.php?idFiche="+id; 
             
                });
} 
else
	{alert("choisir")

}
	
	
	}

else{
	
	alert("Veuillez choisir seulement une fiche");
}
	  
} 
);

	 $(document).on('submit', '#update-fiche-form', function() {
 
    
     
    
    $.post("../Modele/updateFiche.php",$(this).serialize()).done(function(data) {
             
          alert("bien modifier");
          document.location.href="../Vue/readFiche.php"; 
        });
             
    return false;
});