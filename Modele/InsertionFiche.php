<?php	

 include_once('databases.php');

 $database=new Database();

if(isset($_POST['libelleFiche']) && isset($_POST['description']))
{

$libelleFiche=$_POST['libelleFiche'];
$description=$_POST['description'];
$categories=$_POST['categories'];
 

// vérifcation de libelle déjà éxisté
$requeteVerification=$database->request("SELECT count(libelleFiche) as find from fiche where libelleFiche='$libelleFiche' ");
		
$fetch= $requeteVerification->fetch(PDO::FETCH_ASSOC);

$nombreTrouve=$fetch['find'];

if($nombreTrouve == 1) {
 $result['message']="libelle déjà éxiste";
 echo(json_encode($result));
} 

else {

// insertion dans la table fiche si le condition return 0
 $query=$database->request("INSERT INTO fiche(libelleFiche,DescriptionFiche,idCategorie) VALUES('$libelleFiche','$description','$categories')");
 $result['message']="bien inserer";	

echo(json_encode($result));

	}

}

	?>