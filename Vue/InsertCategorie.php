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
    <title>Ajout Catégories</title>
    
    <script src="../JS/jquery.js"></script>
	  <script src="../Controller/InsertCategorie.js"></script>
    <script src="../JS/jquery.validate.js"></script>
    <script src="../JS/additional-methods.min.js"></script>

</head>
<body>

  <div class="panel panel-info" id="panelAjout">
      <div class="panel panel-header text-center" id="panelHeader">
          <h3>Ajouter une nouvelle catégorie</h3> 
      </div>
      <form id='create-CATEGORIE-form' action='#' method='post' border='0'>
      <div class="panel panel-body">
          <p>Inserér libellé catégorie:
              <input type="text" class="form-control" name="libelleCategorie" placeholder="Libellé Catégorie" id="libelleCategorie" autofocus>
          </p>
      </div>
      <div class="panel panel-footer text-center" id="panelFooter">
          <input class="btn btn-default" type="submit" value="Enregistrer">
          <a href="readCategories.php" class="btn btn-default">Retour à la liste</a>
      </div>
      </form>
  </div>

</body>
</html>