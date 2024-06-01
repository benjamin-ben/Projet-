<?php
    $host="mysql:host=localhost; dbname=apprequete";
    $user="root";
    $password="";
    try
    {
        $bd=new PDO($host,$user,$password);
        $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
    if(isset($_POST["envoyer"])){
        if($_SERVER['REQUEST_METHOD']=== "POST"){
            $nouveaumotdepasse=$_POST["nouveaumotdepasse"];
    
                    // Requête pour récupérer le du mot de passe
        $stmt = $bd->prepare("SELECT MotDePasse FROM etudiant WHERE MATRICULE= :matricule");
        $stmt->bindParam(":matricule", $matricule);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $nomcompletbd = $row['NomComplet'];
    
            // Vérification du mot de passe
            if ($nomcomplet===$nomcompletbd) {
    
              header("location:nouveaumotdepasse .php");
            } else {
              echo "vos informations sont incorrectes.";
            }
    
          }
        }
    
    }
    }
    catch(PDOException $e)
    {
        echo "ERREUR".$e->getMessage();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
    <link rel="stylesheet" href="css/bootstrap.min (2).css">
    <link rel="stylesheet" href="connexion.css">
    <script link="connexion.js" > </script>
</head>
<body>
    <h1 class="text-info"><img src="images/logoiut.png" alt="#" width="70px" height="70px" border-radius="50%"><b>nouveau mot de passe</b></h1>
<fieldset class="btn btn-outline-info">
    <legend>entrez votre nouveau mot de passe</legend>
    <form action="#" method=" post">
        <div class="identifient">
            <label for="nouveaupasse">
                nouveau mot de passe:
            </label>
            <input type="text" placeholder="entrez votre nouveau mot de passe" name="nouveaupasse">
            <br><br>
            <label for="nouveaupasse">
        <div class="connexion"> 
            <p><a href="connexion.html">connexion</a></p>
            <input type="submit" value="envoyer" name="envoyer">
        </div>
    </form>
</fieldset>
</body>
</html>