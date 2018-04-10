<!DOCTYPE html>
<html lang="en">
<head>
  <style>
.display-none{
    display:none;
}
 
.padding-bottom-2em{
    padding-bottom:2em;
}
 
.width-30-pct{
    width:30%;
}
 
.width-40-pct{
    width:40%;
}
 
.overflow-hidden{
    overflow:hidden;
}
 
.margin-right-1em{
    margin-right:1em;
}
 
.right-margin{
    margin:0 .5em 0 0;
}
 
.margin-bottom-1em {
    margin-bottom:1em;
}
 
.margin-zero{
    margin:0;
}
 
.text-align-center{
    text-align:center;
}
</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      
    <title>Human Cart'Office </title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/main.css" />

    <script src="../JS/jquery.js"></script>
    <script src="../Controller/updateCategorie.js"></script>

</head>
<body>


<?php
include_once('../Modele/databases.php');
$database=new Database();
$id=isset($_GET['idCategorie']) ? $_GET['idCategorie'] : die('not found.');
$query=$database->request("SELECT libelleCategorie from categorie where idCategorie='$id'");

    $fetch= $query->fetch(PDO::FETCH_ASSOC);    
    $libelleCategorie= $fetch['libelleCategorie'];

?>

<div class="panel panel-info" id="panelAjout">
    <div class="panel panel-header text-center" id="panelHeader">
        <h3>Modifier Catégorie</h3>
    </div>
    <form id='update-categorie-form' action='#' method='post' border='0'>
    <div class="panel panel-body">
        <table>
            <tr>
                <td id="label">Libellé catégorie :</td>
                <td><input type='text' id="txt" name='libelleCategorie' class='form-control' value='<?php echo htmlspecialchars($libelleCategorie, ENT_QUOTES); ?>' required /></td>
            </tr>
            <tr>
                <td>
                    <input type='hidden' name='id' value='<?php echo $id ?>' /> 
                </td>
                <td>
                </td>
            </tr>
        </table>
    </div>
    <div class="panel panel-footer text-center" id="panelFooter">
        <button type='submit' class='btn btn-default'>
            Enregistrer
        </button>
        <a href="readCategories.php" class="btn btn-default">Retour à la liste</a>
    </div>
    </form>
</div>
</body>
</html>