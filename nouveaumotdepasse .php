<?php
session_start();

    $host="mysql:host=localhost; dbname=app_requete";
    $user="root";
    $password="";
    try
    {
        $bd=new PDO($host,$user,$password);
        $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
    if(isset($_POST["envoyer"])){
        if($_SERVER['REQUEST_METHOD']=== "POST"){
        $nouveaumotdepasse=password_hash($_POST["nouveaumotdepasse"], PASSWORD_DEFAULT);
            var_dump($nouveaumotdepasse);
            $_SESSION["NomComplet"];
                    // Requête pour récupérer le du mot de passe
        $stmt = $bd->prepare("UPDATE eleves SET MotDePasse=:nouveaumotdepasse WHERE NomComplet=:nomcomplet");
        $stmt->bindParam(":nomcomplet",  $_SESSION["NomComplet"]);
        $stmt->bindParam(":nouveaumotdepasse",  $nouveaumotdepasse);
        $stmt->execute();
        if ($stmt->rowCount() ==1)
        {
                header("location:requetes.php");
            } else {
                  echo "vos informations sont incorrectes.";
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
    <form action="" method="post">
        <div class="identifient">
            <label for="nouveaupasse">
                nouveau mot de passe:
            </label>
            <input type="text" placeholder="entrez votre nouveau mot de passe" name="nouveaumotdepasse">
            <br><br>
            <label for="nouveaupasse">
        <div class="connexion"> 
            <p><a href="connexion.php">connexion</a></p>
            <input type="submit" value="envoyer" name="envoyer">
        </div>
    </form>
</fieldset>
</body>
</html>