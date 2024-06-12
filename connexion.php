<?php
// lancement d'une session de connexion;
session_start();
// connexion à la bd
$host="mysql:host=localhost; dbname=app_requete";
$user="root";
$password="";
try
{
    $bd=new PDO($host,$user,$password);
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// action quant on appuis sur le boutton connexion
if(isset($_POST["connexion"])){
    if($_SERVER['REQUEST_METHOD']=== "POST"){
        $matricule = htmlspecialchars($_POST["matricule"]);
        $password=$_POST["motdepasse"];
        $matricule=strtoupper($matricule);
        var_dump($password);
        var_dump($matricule);

                // Requête pour récupérer le mot de passe dans la base de donnée
    $stmt = $bd->prepare("SELECT MotDePasse, NomComplet, id FROM eleves WHERE MATRICULE= :matricule");
    $stmt->bindParam(":matricule", $matricule);
    $stmt->execute();
    if ($stmt->rowCount()==1) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $MotDePasse = $row['MotDePasse'];
       $_SESSION['NomComplet'] = $row['NomComplet'];
       $_SESSION['id']=$row['id'];
              // Vérification du mot de passe
        if (password_verify($password, $MotDePasse)) {
          echo "Connexion au compte réussie!";
// si connexion reussi afficher
          header("location:requetes.php");
        } else {

          echo "matricule ou mot de passe incorrect.";
        }

      } else {
        echo "Aucun utilisateur trouvé avec ce matricule.";
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
    <link rel="stylesheet" href="css\connexion.css">
    <script link="js\connexion.js" > </script>
</head>
<body>
    <h1 class="text-info"><img src="images/logoiut.png" alt="#" width="70px" height="70px" border-radius="50%"><b>connectez-vous à votre compte</b></h1>
<fieldset class="btn btn-outline-info">
    <legend>entrez vos informations de connexion</legend>
    <form action="" method="post">
        <div class="identifient">
            <label for="matricule">
                matricule:
            </label>
            <input type="text" placeholder="entrez votre matricule" name="matricule">
            <br><br>
            <label for="motdepasse">
                mot de passe:
            </label>
            <input placeholder="entrez votre mot de passe" name="motdepasse" type="password" >
        </div>
        <div class="connexion"> 
            <p><a href="reinitialisation.php">reinitialisation</a></p>
            <input type="submit" value="connexion" name="connexion">
        </div>
    </form>
</fieldset>
</body>
</html>