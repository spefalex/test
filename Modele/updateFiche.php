<?php

include_once('databases.php');
 $database=new Database();
 

  
if(isset($_POST['id'])){

	$id=$_POST['id'];

	
$libelleFiche=$_POST['libelleFiche'];  
$DescriptionFiche=$_POST['DescriptionFiche'];  
$categories=$_POST['categories'];

  $query=$database->request("UPDATE fiche SET libelleFiche='$libelleFiche', DescriptionFiche='$DescriptionFiche', idCategorie ='$categories' WHERE idFiche='$id'");
 
}

?>