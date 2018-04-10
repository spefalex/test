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
    <script src="../Controller/updateFiche.js"></script>

</head>
<body>

<?php
include_once('../Modele/databases.php');
 $database=new Database();
$id=isset($_GET['idFiche']) ? $_GET['idFiche'] : die('not found.');
 

$query=$database->request("SELECT f.idFiche,f.libelleFiche,f.idCategorie, f.DescriptionFiche,c.idCategorie,c.libelleCategorie FROM fiche f LEFT JOIN categorie c ON f.idCategorie =c.idCategorie WHERE idFiche='$id'");
    $fetch= $query->fetch(PDO::FETCH_ASSOC);
 
    $libelleFiche= $fetch['libelleFiche'];
	
	$DescriptionFiche= $fetch['DescriptionFiche'];
	$idCategorie= $fetch['idCategorie'];
    $libelleCategorie= $fetch['libelleCategorie'];

?>

<div class="panel panel-info" id="panelModif">
    <div class="panel panel-header text-center" id="panelHeader">
        <h3>Modifier Fiche</h3>
    </div>
    <form id='update-fiche-form' action='#' method='post' border='0'>
    <div class="panel panel-body">
        <table class="table" id="tbl">
        <tr id="libel">
            <td id="label">Libellé fiche :</td>
            <td><input type='text' id="txt" name='libelleFiche' class='form-control' value='<?php echo htmlspecialchars($libelleFiche, ENT_QUOTES); ?>' required /></td>
        </tr>
        <tr>
            <td id="label">Description Fiche : </td>
            <td>
            <textarea name='DescriptionFiche' id="area" class='form-control' required><?php echo htmlspecialchars($DescriptionFiche, ENT_QUOTES); ?></textarea>
            </td>
        </tr>
        <tr>

            <td id="label"> Libellé catégorie : </td>
            <?php
            include_once('../Modele/databases.php');
            $database=new Database();

            $reske=$database->request("SELECT idCategorie,libelleCategorie FROM categorie");
            ?>
            <td>
            <select name="categories" id="selct">
            <?php 
            while ($data=$reske->fetch())
            {
                echo "<option value='".$data['idCategorie']."'>".$data['libelleCategorie']."</option>";
            }
            ?>        
            </select>
            </td>
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
        <a href="readFiche.php" class="btn btn-default">Retour à la liste</a>
    </div>
    </form>
</div>
</body>
</html>