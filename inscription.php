
<?php
session_start();
require('connexionbd.php');
// récuperation des informations et securité
  if(isset($_POST["enregistrer"]))
  {
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
      $nomcomplet=htmlspecialchars($_POST["nomcomplet"]);
      $matricule=htmlspecialchars($_POST["Matricule"]);
      $nomcomplet=strtoupper($nomcomplet);
      $matricule=strtoupper($matricule);
     $_SESSION['nomcomplet'];
var_dump($matricule);
var_dump($nomcomplet);

      // comparaison de mot2passe à confirmpasse avant de hasher
      $mot2passe=$_POST["mot2passe"];
      $mot2passe=password_hash($_POST["mot2passe"], PASSWORD_DEFAULT);
      if( !empty($nomcomplet) && !empty($matricule) && !empty($mot2passe))
      {


              {
                  // serifions que l'etudiant soit unique dans la bd.
                  $stmt = $bd->prepare("SELECT MATRICULE NomComplet FROM étudiant WHERE MATRICULE = :matricule");
                  $stmt->bindParam(":matricule", $matricule);
                  $stmt->execute();
          
                  if ($stmt->rowCount()== 0)
                  {
                    
                    // requete preparer pour le stockage dans la base de donnée
                    $stk=$bd->prepare(" INSERT INTO étudiant (NomComplet, MATRICULE, MotDePasse) VALUES(:NomComplet, :MATRICULE, :MotDePasse) ");
                    $stk->bindParam(":NomComplet", $nomcomplet);
                    $stk->bindParam(":MATRICULE", $matricule);
                    $stk->bindParam(":MotDePasse", $mot2passe);
                    $stk->execute();
                      echo "l'étudiant(e) $nomcomplet vient d'être enrégistré(e) dans votre base de donnée";
                  }
                        else
                          {
                            echo "l'étudiant $nomcomplet existe déjà";
                          }

           }
      }    
        else{
          echo "veuillez remplir tous les champs!";
        }
    }
  }
 
 ?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
</head>
<body>
  <fieldset>
    <legend>
        <h1>créer un compte :exclusivement resservé à l'admin</h1>
    </legend>
    <form action="" method="POST">
        <label for="nomcomplet"><b>Nom Complet:</b></label>
      <input type="text" name="nomcomplet" placeholder="saisir votre Nom Complet"><br>
             <label for="Matricule"><b>Matricule:</b></label>
             <input type="text" name="Matricule" placeholder="saisir le Matricule" ><br>
           <label for="mot2passe"><b>mot de passe:</b></label>
           <input type="password" name="mot2passe" placeholder="saisir votre mot de passe"><br>
          <input type="submit" value="enregistrer" name="enregistrer">
    </form>
  </fieldset>  
</body>
</html>