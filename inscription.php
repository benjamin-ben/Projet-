<!-- Voici le code corrigé avec les erreurs résolues :

php -->
<?php
session_start();
require('connexionbd.php');

// récupération des informations et sécurité
if (isset($_POST["enregistrer"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomcomplet = htmlspecialchars($_POST["nomcomplet"]);
        $matricule = htmlspecialchars($_POST["Matricule"]);
        $niveau = htmlspecialchars($_POST["niveau"]);
        $naissance = $_POST["naissance"];
        $nomcomplet = strtoupper($nomcomplet);
        $matricule = strtoupper($matricule);
        $niveau = strtoupper($niveau);
        
        $_SESSION['nomcomplet'] = $nomcomplet;

        if (DateTime::createFromFormat('Y-m-d', $naissance) !== false) {
            // comparaison de mot2passe à confirmpasse avant de hasher
            $mot2passe = password_hash($_POST["mot2passe"], PASSWORD_DEFAULT);

            if (!empty($nomcomplet) && !empty($matricule) && !empty($mot2passe) && !empty($naissance) && !empty($niveau)) {
                // vérifions que l'étudiant soit unique dans la bd.
                $stmt = $bd->prepare("SELECT MATRICULE, NomComplet FROM eleves WHERE MATRICULE = :matricule");
                $stmt->bindParam(":matricule", $matricule);
                $stmt->execute();

                if ($stmt->rowCount() == 0) {
                    // requête préparée pour le stockage dans la base de données
                    $stk = $bd->prepare("INSERT INTO eleves (NomComplet, MATRICULE, date_naissance, niveau, MotDePasse) VALUES(:NomComplet, :MATRICULE, :date_naissance, :niveau, :MotDePasse)");
                    $stk->bindParam(":NomComplet", $nomcomplet);
                    $stk->bindParam(":MATRICULE", $matricule);
                    $stk->bindParam(":date_naissance", $naissance);
                    $stk->bindParam(":niveau", $niveau);
                    $stk->bindParam(":MotDePasse", $mot2passe);
                    $stk->execute();
                    echo "l'étudiant(e) $nomcomplet vient d'être enregistré(e) dans votre base de données";
                } else {
                    echo "l'étudiant $nomcomplet existe déjà";
                }
            } else {
                echo "veuillez remplir tous les champs !";
            }
        } else {
            echo "La date de naissance n'est pas valide.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
</head>
<body>
    <fieldset>
        <legend>
            <h1>créer un compte : exclusivement réservé à l'admin</h1>
        </legend>
        <form action="" method="POST">
            <label for="nomcomplet"><b>Nom Complet:</b></label>
            <input type="text" name="nomcomplet" placeholder="saisir votre Nom Complet"><br>
            <label for="naissance"><b>date de naissance:</b></label>
            <input type="date" name="naissance" placeholder="saisir votre date de naissance"><br>
            <label for="Matricule"><b>Matricule:</b></label>
            <input type="text" name="Matricule" placeholder="saisir le Matricule"><br>
            <label for="niveau"><b>niveau:</b></label>
            <select name="niveau" id="niveau">
                <option value="niveauI">I</option>
                <option value="niveauII">II</option>
                <option value="niveauIII">III</option>
                <option value="niveauIV">IV</option>
                <option value="niveauV">V</option>
            </select><br>
            <label for="mot2passe"><b>mot de passe:</b></label>
            <input type="password" name="mot2passe" placeholder="saisir votre mot de passe"><br>
            <input type="submit" value="enregistrer" name="enregistrer">
        </form>
    </fieldset>
</body>
</html>


<!-- Les principales corrections effectuées sont :

1. Correction de la requête SQL pour récupérer le matricule et le nom complet de l'étudiant.
2. Correction de l'ordre des paramètres dans la requête d'insertion.
3. Correction de la variable $date_naissance qui était mal nommée.
4. Ajout d'un message d'erreur pour le cas où la date de naissance n'est pas valide.
5. Correction de la mise en forme du code pour une meilleure lisibilité. -->