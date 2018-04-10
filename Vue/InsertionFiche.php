<!DOCTYPE html>
<html lang="fr">
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  .my-error-class {
    color:#FF0000;  /* red */
}
.my-valid-class {
    color:#00CC00; /* green */
}
 
 </style>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/main.css" />
    <title>Ajout Fiche</title>
    
    <script src="../JS/jquery.js"></script>
    <script src="../Controller/InsertFiche.js"></script>
    <script src="../JS/jquery.validate.js"></script>
    <script src="../JS/additional-methods.min.js"></script>

</head>
<body>

  <div class="panel panel-info" id="panelAjouts">
      <div class="panel panel-header text-center" id="panelHeader">
          <h3>Ajouter une nouvelle fiche</h3>
      </div>
    <form id='create-FICHE-form' action='#' method='post' border='0'>
      <div class="panel panel-body">
          <p>Inserér libelle fiche:
              <input type="text" name="libelleFiche" class="form-control" placeholder="Libellé Fiche" id="libelleFiche" autofocus>
          </p> <br>
        
          <p>Description Fiche:
              <input type="text" name="description" class="form-control" placeholder="Description" id="description" autofocus>
          </p> <br>
       
<?php
include_once('../Modele/databases.php');
$database=new Database();

$reske=$database->request("SELECT idCategorie,libelleCategorie FROM categorie");
?>
<p> Categorie de fiche: </p>
<select name="categories" id="selects">
<?php 
while ($data=$reske->fetch())
{
    echo "<option value='".$data['idCategorie']."'>".$data['libelleCategorie']."</option>";
}
?>        
</select>
      </div>
      <div class="panel panel-footer text-center" id="panelFooter">
        <input type="submit" class="btn btn-default" value="Enregistrer">
        <a href="readFiche.php" class="btn btn-default">Retour à la liste</a>
      </div>
    </form>
  </div>
</body>
</html>