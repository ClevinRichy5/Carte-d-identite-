<?php

require('DbConnexion.php');

    $req="SELECT * FROM personne ";
    $requete=$base->query($req);
    $result=$requete->fetchAll();
?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="css/bootstrap.min.css">
	    <!----css3---->
        <link rel="stylesheet" href="css/custom.css">
		
		
		<!--google fonts -->
	
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	
	
	<!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
</head>
<body>

<div class="details">       
		   <div class="main-content">
           <div class="xp-breadcrumbbar text-center">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Dashboard Monsieur Richy😎</li>
                  </ol>                
            </div>
			  <div class="row">
			    
				<div class="col-md-12">
				<div class="table-wrapper">
    <div class="table-title">
      <div class="row">
        <div class="col-sm-6 p-0 d-flex justify-content-lg-start justify-content-center">
          <h2 class="ml-lg-2">Carte d'identite</h2>
        </div>
        <div class="col-sm-6 p-0 d-flex justify-content-lg-end justify-content-center">
          <a href="chalenge4.php" class="btn btn-success" data-toggle="modal">
		  <i class="material-icons">&#xE147;</i> <span>Ajouter nouveau citoyen</span></a>
        </div>
      </div>
    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <td>Matricule</td>
                                <td>Nom</td>
                                <td>Prenom</td>
                                <td>Pere</td>
                                <td>Mere</td>
                                <td>Profession</td>
                                <td>Sexe</td>
                                <td>Age</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <?php
                           foreach ($result as $personne) {
                            ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $personne["Matricule"]?></td>
                                    <td><?php echo $personne["Nom"]?></td>
                                    <td><?php echo $personne["Prenom"]?></td>
                                    <td><?php echo $personne["Pere"]?></td>
                                    <td><?php echo $personne["Mere"]?></td>
                                    <td><?php echo $personne["Profession"]?></td>
                                    <td><?php echo $personne["Sexe"]?></td>
                                    <td><?php echo $personne["Age"]?></td>
                                    <td>
                                 <a href="FormEdit.php?id=<?= $personne["Matricule"]?>" name="edit" data-toggle="modal">
		                	    <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                <a href="FormDelete.php?id=<?= $personne["Matricule"]?>" name="delete" data-toggle="modal">
			                    <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
          </td>
                                </tr>
                            </tbody>
                           <?php
                           }
                        ?>
                    
                    </table>
</body>
</html>