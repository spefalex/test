
$(document).on('submit', '#create-CATEGORIE-form', function() {
 
 $.post("../Modele/InsertCategorie.php", $(this).serialize()).done(
	function(json) {
             
   var textejson=json;
   var parsa =JSON.parse(textejson);
   $("#libelleCategorie").val("");
   //document.location.href="../Vue/readCategories.php"; 
   alert(parsa.message);
   
  
  },'json');
  
    return false;
});

$().ready(function() {
   $("#create-CATEGORIE-form").validate({
errorClass: "my-error-class",
   validClass: "my-valid-class",
	rules : {
		libelleCategorie : {
		required : true,
		},

	 },

     messages: {
		libelleCategorie:{
        required: "Veuillez remplir ce champ",
	  
	  },
	     },

});});