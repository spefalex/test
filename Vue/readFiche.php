<!DOCTYPE HTML>
<html>
<head>
    <title>Human Cart'Office</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/main.css" />
         
  
    <style>
    .m-r-1em{ margin-right:1em; }
    .m-b-1em{ margin-bottom:1em; }
    .m-l-1em{ margin-left:1em; }
    .mt0{ margin-top:0; }
     .display-none{
    display:none;
}
    </style>
 
</head>
<body>

    <!--menu-->
    <div class="navbar navbar-default">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../Vue/readCategories.php">Catégories</a></li>
                <li><a href="../Vue/readFiche.php">Fiche</a></li>
            </ul>
        </div>
    </div>
 
    <!-- container -->
    <div class="container">
        <div class="panel panel-default" id="panels">
            <div class="panel panel-header text-center" id="panelhead">
                <h1>Liste fiches</h1>
            </div>
            <div class="panel panel-body">
                <div id='create-fiche' class='btn btn-info '>
        <span class='glyphicon glyphicon-plus' ></span> Ajouter
    </div>
   
 <?php
    include_once('../Modele/databases.php');
    $database=new Database();

    $reske=$database->request("SELECT f.idFiche,f.libelleFiche,f.idCategorie, f.DescriptionFiche,c.idCategorie,c.libelleCategorie FROM fiche f LEFT JOIN categorie c ON f.idCategorie =c.idCategorie");

        echo "<table class='table table-bordered table-hover' id='t'>";
      
        echo "<tr>";
            echo "<th class='width-30-pct'>Numéro fiche</th>";
            echo "<th class='width-30-pct'>Libellé fiche</th>";
            echo "<th>Description Fiche </th>";
            echo "<th> Nom catégorie </th>";
            echo "<th style='text-align:center;'>Action </th>";
          
        echo "</tr>";

        while($data=$reske->fetch()){

            echo "<tr>";
                
            $idFiche=$data['idFiche'];
            $libelleFiche=$data['libelleFiche'];
            $DescriptionFiche=$data['DescriptionFiche'];
            $libelleCategorie=$data['libelleCategorie'];

                echo "<td>$idFiche</td>";
                echo "<td>$libelleFiche</td>";
                echo "<td id='da'>$DescriptionFiche</td>";
                echo "<td id='da'>$libelleCategorie</td>";
                echo "<td style='text-align:center;'>";
                   
                    echo "<div class='NumFiche display-none'> $idFiche </div>";
                    echo "</div>";
        //checkbox
        echo "<input type='checkbox' id='checkbox' />";

            echo "</td>";
            echo "</tr>";
       
        }
    //end table
    echo "</table>";


  // edit button
        echo "<div class='btn btn-info edit-btn margin-right-1em' id='edit'>";
           
            echo "<span class='glyphicon glyphicon-pencil'></span> Modifier ";
       
        echo "</div>";
         
        // delete button
        echo "<div class='btn btn-danger delete-btn' id='m'>";
            echo "<span class='glyphicon glyphicon-trash'></span> Supprimer";

        ?>
            </div>
        </div>
    </div> <!-- end .container -->
     
<script type="text/javascript" src="../JS/jquery.js"></script>
<script type="text/javascript" src="../JS/main.js"></script>
<script src="../Controller/deleteFiche.js"></script>
<script src="../Controller/updateFiche.js"></script>

 
</body>
</html>
