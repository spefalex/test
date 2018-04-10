<!DOCTYPE HTML>
<html>
<head>
    <title>Human Cart'Office</title>
     
    
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/main.css" />
         
    <!-- custom css -->
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
                <h1> Liste Categories </h1>
            </div>
            <div class="panel-body">
                <div id='create-categories' class='btn btn-info '>
                    <span class='glyphicon glyphicon-plus' ></span> Ajouter
                </div>

                <?php
                    include_once('../Modele/databases.php');
                    $database=new Database();

                    $reske=$database->request("SELECT idCategorie,libelleCategorie  FROM categorie ");

                        echo "<table class='table table-bordered table-hover' id='t'>";
                            echo "<tr>";
                                echo "<th class='width-30-pct'>Numéro catégorie</th>";
                                echo "<th class='width-30-pct'>Libellé catégorie</th>";
                                echo "<th style='text-align:center;'>Action </th>";
                            echo "</tr>";

                            while($data=$reske->fetch()){
                                echo "<tr>";
                
                                    $idCategorie=$data['idCategorie'];
                                    $libelleCategorie=$data['libelleCategorie'];
                                         echo "<td>$idCategorie</td>";
                                         echo "<td>$libelleCategorie</td>";
                                         echo "<td style='text-align:center;'>";
                                         echo "<div class='NumCategorie display-none'> $idCategorie </div>";
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
<script src="../Controller/deleteCategories.js"></script>
<script src="../Controller/updateCategorie.js"></script>
<!-- confirm delete record will be here -->
 
</body>
</html>
