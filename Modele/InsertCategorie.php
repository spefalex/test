<?php	

 include_once('databases.php');

 $database=new Database();

if(isset($_POST['libelleCategorie']))
{

$libelleCategorie=$_POST['libelleCategorie'];

// vérifcation de libelle déjà éxisté
$requeteVerification=$database->request("SELECT count(libelleCategorie) as find from categorie where libelleCategorie='$libelleCategorie' ");
		
$fetch= $requeteVerification->fetch(PDO::FETCH_ASSOC);

$nombreTrouve=$fetch['find'];

if($nombreTrouve == 1) {
 $result['message']="libelle déjà éxiste";
 echo(json_encode($result));
}  else {

// insertion dans la table categorie si le condition return 0
 $query=$database->request("INSERT INTO categorie(libelleCategorie) VALUES('$libelleCategorie')");
 $result['message']="bien inserer";	

echo(json_encode($result));

	}

}

	?>