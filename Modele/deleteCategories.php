<?php
 include_once('databases.php');

 $database=new Database();
 
 if(isset($_POST['id'])){

 $idi=$_POST['id'];
 
   $query=$database->request("DELETE FROM categorie WHERE idCategorie= '$idi'");
    
     
 }

?>