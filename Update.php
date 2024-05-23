<?php
    require("DbConnexion.php");

    // if(isset($_GET['matricule'])){
    //     $matricule=$_GET['matricule'];
    
    //     $query=$base->query("SELECT * FROM personne  WHERE Matricule = ". $matricule);
    //     $personne=$query->fetch(PDO::FETCH_OBJ);

    if(isset($_POST['Modifier'])){
        $matricule=$_POST['matricule'];
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $pere=$_POST['pere'];
        $mere=$_POST['mere'];
        $profession=$_POST['profession'];
        $age=$_POST['age'];
        $sexe=$_POST['sexe'];
       $preparedStatement="UPDATE `personne` SET `Nom`='$nom',`Prenom`='$prenom',`Pere`='$pere',`Mere`='$mere',`Profession`='$profession',`Age`='$age',`Sexe`='$sexe' WHERE Matricule=$matricule";
       $verify=$base->prepare($preparedStatement);
       $verify->execute();
    //    if($verify){
   
    //        echo "<br>\nCarte modifier avec succees";
    //    }
    //    else{
    //        echo "Carte non modifier";
    //    }
    //
    if($verify){
        echo "Modification Enregistree avec succes";
        header("location:Dashboard.php");
    }
    else{
        echo "Erreur lors de l'enregistrement de la modification:" .$base->error;
    }
 }
?>