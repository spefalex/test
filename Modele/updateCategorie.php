<?php

include_once('databases.php');
 $database=new Database();
 

  
if(isset($_POST['id'])){

	$id=$_POST['id'];

	
$libelleCategorie=$_POST['libelleCategorie'];  


  $query=$database->request("UPDATE categorie SET libelleCategorie='$libelleCategorie' WHERE idCategorie='$id'");
 
}

?>