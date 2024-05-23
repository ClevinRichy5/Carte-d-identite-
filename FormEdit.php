<?php
 require('DbConnexion.php');
$id = $_GET['id'];
 $req="SELECT * FROM personne WHERE Matricule = $id ";
 $requete=$base->query($req);
 $personne=$requete->fetch(PDO::FETCH_ASSOC);
?>




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="chalenge4.css">
     <title>Carte d'identite</title>
</head>
<body>
<div class="container">
        <div class="contenu">
            <h4>What Is Lorem, Ipsum?</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt tenetur 
                eveniet iure ipsam natus maiores! Culpa temporibus beatae aspernatur minus 
                consectetur. Repudiandae deleniti itaque vitae laboriosam esse quibusdam repellat fugiat.</p>
                 <div class="save">
                     <button>Lire la suite</button>
                 </div>
        </div>
        <div class="right">
            <h4>Formulaire de modification</h4>
            <form action="Update.php" method="post">
                <input type="hidden" name="matricule" placeholder="Matricule" value="<?php echo $personne['Matricule']?>">
                <input type="text" name="nom" placeholder="nom" value="<?php echo $personne['Nom']?>">
                <input type="text" name="prenom" placeholder="prenom" value="<?php echo $personne['Prenom']?>">
                <input type="text" name="pere" placeholder="Nom du pere" value="<?php echo $personne['Pere']?>">
                <input type="text" name="mere" placeholder="Nom de la mere"value="<?php echo $personne['Mere']?>">
                <input type="text" name="profession" placeholder="votre profession" value="<?php echo $personne['Profession']?>">
                <input type="text" name="age" id=""placeholder="Entrez votre age" value ="<?php echo $personne['Age']?>">
                <select name="sexe" id="sexe"value="<?php echo $personne['Sexe']?>">
                    <option value="Masculin">Masculin</option>
                    <option value="Feminin">Feminin</option>
                </select>
                <div class="connect">
               <a href="Dashboard.php"> <input type="submit" value="Modifier" name="Modifier"></a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>