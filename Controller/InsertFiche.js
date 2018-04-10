
$(document).on('submit', '#create-FICHE-form', function() {
 
 $.post("../Modele/InsertionFiche.php", $(this).serialize()).done(
	function(json) {
             
   var textejson=json;
   var parsa =JSON.parse(textejson);
   $("#libelleFiche").val("");
   $("#description").val("");

   alert(parsa.message);
			
  
  },'json');
  
    return false;
});

$().ready(function() {
   $("#create-FICHE-form").validate({
errorClass: "my-error-class",
   validClass: "my-valid-class",
	rules : {
		libelleFiche : {
		required : true,
		},
		description : {
		required : true,
		},

	 },

     messages: {
		libelleFiche:{
        required: "Veuillez remplir ce champ",
	  
	  },
	  	description:{
        required: "Veuillez remplir ce champ",
	  
	  },
	     },

});});