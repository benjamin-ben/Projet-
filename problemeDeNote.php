<?php 
session_start();
require('connexionbd.php');

if (isset($_POST['soumettre'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $matricule = htmlspecialchars($_POST['matricule']);
        $niveau = htmlspecialchars($_POST['niveau']);
        $matiere= htmlspecialchars($_POST['matiere']);
        $description = htmlspecialchars($_POST['commentaire']);
        $recue =$_POST['recue'];
        $id=$_SESSION['id'];

        if (!empty($matricule) && !empty($niveau) && !empty($matiere) && !empty($description) && !empty($recue)) {
            $stk = $bd->prepare("INSERT INTO problemesdenotes (id_eleve, MATRICULE, niveau, matiere, commentaire, RecuDePaiement) VALUES (:id_eleve, :MATRICULE, :niveau, :matiere, :commentaire, :RecuDePaiement)");
            $stk->bindParam(":id_eleve", $id);
            $stk->bindParam(":MATRICULE", $matricule);
            $stk->bindParam(":niveau", $niveau);
            $stk->bindParam(":matiere", $matiere);
            $stk->bindParam(":commentaire", $description);
            $stk->bindParam(":RecuDePaiement", $recue);

            if ($stk->execute()) {
                echo $_SESSION['NomComplet'] ." ". "votre requete sur la matiere :"; echo $matiere." ". "a ete envoyer";
            } else {
                echo "Une erreur s'est produite lors de l'envoi de votre demande.";
            }
        } else {
            echo "Veuillez remplir tous les champs!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="problemeDeNote.js"></script>
    <link rel="stylesheet" href="css\problemeDeNote.css">
    <title>probleme de note</title>
</head>
<body> <h1>
    <b>
        <i>
            resolution des problemes essentiellement lier aux notes
        </i>
    </b>
</h1>
<fieldset>
    <legend>
        <b>soumettre cette requette pour tous vos problemes de notes</b>
    </legend>
    <form action="" method="post">
        <label for="matricule">
            matricule:
        </label>
        <input type="text" name="matricule" id="matricule">
        <label for="niveau">niveau:</label>
        <select name="niveau" id="niveau">
            <option value="niveau I">niveau I</option>
            <option value="niveau II">niveau II</option>
            <option value="niveau III">niveau III</option>
            <option value="niveau IV">niveau IV</option>
            <option value="niveau V">niveau V</option>
        </select>
        <label for="matieres">
            les matieres 
        </label>
        <select name="matiere" id="matieres" multiple> 
            <option>mathematique</option>
            <option>phisique</option>
            <option>chimie</option>
            <option>poo</option>
            <option>ascii</option>
            <option>droi</option>
            <option>anglais</option>
            <option>❖ GI : Génie Informatique</option>
            <option>❖ GRT : Génie Réseaux et Télécommunication</option>
            <option>❖ GBM : Génie Biomédical</option>
            <option>reseautage</option>
            <option>algorithmique</option>
            <option>comptabilité</option>
            <option>ergonomie</option>
            
        </select><br><br>
        <label for="commentaire"> description:</label>
        <textarea name="commentaire" title="commentaire" id="commentaire" placeholder="decire la situatuion de votre probleme de note"></textarea><br><br>

        <button id="choisir" type="button">recue de paiement:</button>
        <label for="recue"> inserer un recue correspondans</label>
        <input type="file" name="recue" id="recue"><br><br>
        <input type="submit" name="soumettre" value="soumettre">

    </form>
</fieldset>
</body>
</html>