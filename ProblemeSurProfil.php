<?php 
session_start();
require('connexionbd.php');

if (isset($_POST['soumettre'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_SESSION['id'];
        
        // Vérifier si le champ "choix" est défini 
        if (isset($_POST['choix']) && is_array($_POST['choix'])) {
            // Vérifier si le champ "cni" est défini et si le fichier a été uploadé
            if (isset($_FILES['cni']) && $_FILES['cni']['error'] === UPLOAD_ERR_OK) {
                // Valider et nettoyer les données
                $choix = array_map('trim', $_POST['choix']);
                $choix = array_map('htmlspecialchars', $choix);
                
                // Traiter le fichier CNI
                $cni = $_FILES['cni']['name'];
                $cniTmp = $_FILES['cni']['tmp_name'];

                // Déplacer le fichier vers un répertoire sécurisé
                $uploadDir = 'uploads/'; // Remplacez par le répertoire de destination souhaité
                $cniPath = $uploadDir . $cni;
                if (move_uploaded_file($cniTmp, $cniPath)) {
                    // Insérer les données dans la base de données 
                    foreach ($choix as $value) {
                        $stk = $bd->prepare("INSERT INTO pbprofil(id_eleve, Valeuràmodifier, Preuve) VALUES (:id_eleve, :Valeuràmodifier, :Preuve)");
                        $stk->bindParam(":id_eleve", $id);
                        $stk->bindParam(":Valeuràmodifier", $value);
                        $stk->bindParam(":Preuve", $cni);
                        if (!$stk->execute()) {
                            echo "Une erreur s'est produite lors de l'envoi de votre demande.";
                            break; // Arrêter la boucle si une erreur survient
                        }
                    }
                    if (count($choix) > 0) {
                        echo $_SESSION['NomComplet'] . " votre requete sur le changement de filière a bien été envoyé";
                    }
                } else {
                    echo "Une erreur s'est produite lors du téléchargement du fichier.";
                }

            } else {
                echo "Veuillez choisir un fichier CNI/recepise/acte de naissance.";
            }
        } else {
            echo "Veuillez choisir au moins une option dans la liste.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/problemeSurProfil.css">
    <script src="js/problemeDeNote.js"></script>
    <title>probleme sur le profil</title>
</head>
<body>
    <h1>
        <b>
            <i>
                probleme d'identification
            </i>
        </b>
    </h1> 
    <fieldset>
        <legend>
            veuillez faire un choix sur les problemes que vous 
            rencontrez!
        </legend>
                <form action="" method="post" enctype="multipart/form-data"> 
                    <label for="choix">choisir:</label>
                    <select title="choix" id="choix" multiple name="choix[]">
                        <option value="nom"> nom</option>
                        <option value="prenom">prénom</option>
                        <option value="date de naissance">date de naissance </option>
                        <option value="lieu de naissance">lieu de naissance</option>
                        <option value="sexe">sexe</option>
                        <option value="nationalité">nationalité</option>
                    </select><br><br>
                    <label for="cni"> inserer CNI/recepise/acte de naissance:</label>
                    <input type="file" name="cni" id="cni"><br><br>
                    <input type="submit" name="soumettre" value="soumettre">
                </form>

    </fieldset>
</body>
</html>
