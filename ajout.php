<?php

   require('DbConnexion.php');
    if(isset($_POST['Envoyer'])){
        $matricule=$_POST['matricule'];
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $pere=$_POST['pere'];
        $mere=$_POST['mere'];
        $profession=$_POST['profession'];
        $age=$_POST['age'];
        $sexe=$_POST['sexe'];
       $preparedStatement= "INSERT INTO personne(Matricule, Nom, Prenom, Pere, Mere, Profession, Age, Sexe)  VALUES ('$matricule','$nom','$prenom','$pere','$mere','$profession','$age','$sexe');";        
    $verify=$base->prepare($preparedStatement);
    $verify->execute();
    header('Location:./Dashboard.php');
    if($verify){

        echo "<br>\nCarte enregister avec succees";
    }
    else{
        echo "Carte non enregistrer";
    }
    }


?>