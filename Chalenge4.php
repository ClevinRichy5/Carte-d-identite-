<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carte d'identite</title>
    <link rel="stylesheet" href="chalenge4.css">
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
            <h4>Inscription</h4>
            <form action="ajout.php" method="post">
                <input type="text" name="matricule" placeholder="Matricule">
                <input type="text" name="nom" placeholder="nom">
                <input type="text" name="prenom" placeholder="prenom">
                <input type="text" name="pere" placeholder="Nom du pere">
                <input type="text" name="mere" placeholder="Nom de la mere">
                <input type="text" name="profession" placeholder="votre profession">
                <input type="text" name="age" id=""placeholder="Entrez votre age">
                <select name="sexe" id="sexe">
                    <option value="Masculin">Masculin</option>
                    <option value="Feminin">Feminin</option>
                </select>
                <div class="connect">
               <a href="Dashboard.php"> <input type="submit" value="Envoyer" name="Envoyer"></a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>