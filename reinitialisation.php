<?php
// connecion à la bd
$host="mysql:host=localhost; dbname=apprequete";
$user="root";
$password="";
try
{
    $bd=new PDO($host,$user,$password);
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if(isset($_POST["envoyer"])){
    if($_SERVER['REQUEST_METHOD']=== "POST"){
        $nomcomplet=$_POST["nomcomplet"];
        $matricule=$_POST["matricule"];

                // Requête pour récupérer le du mot de passe
    $stmt = $bd->prepare("SELECT NomComplet FROM etudiant WHERE MATRICULE= :matricule");
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
    <title>reinitialisation</title>
    <link rel="stylesheet" href="css/bootstrap.min (2).css">
    <link rel="stylesheet" href="css/connexion.css">

    <script link="connexion.js" > </script>
</head>
<body>
    <div class="logoiut">
    <h1 class="text-info"><img src="images/logoiut.png" alt="#" width="70px" height="70px" border-radius="50%"><b>reinitialiser votre mot de passe</b></h1>

    </div>
    <fieldset class="btn btn-outline-info">
    <legend>entrez vos informations personnelle pour reinitialiser votre mot de passe</legend>
    <form action="" method="POST">
        <div class="identifient">
            <label for="nomcomplet">
                <b>nom complet:</b>
            </label>
            <input type="text" placeholder="entrez votre nom complet" name="nomcomplet">
            <br><br>
            </label>
            <label for="matricule">
                <b>matricule</b>
            </label>
            <input type="text" name="matricule" id="matricule" placeholder="entrez votre matricule">
        </div>
        <div class="reinitialisation"> 
            <p><a href="connexion.php">connexion</a></p>
            <input type="submit" value="envoyer" name="envoyer">
        </div>


    </form>
</fieldset>
</body>
</html>