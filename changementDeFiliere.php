<?php 
session_start();
require('connexionbd.php');

if (isset($_POST['soumettre'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $ancienneFiliere = htmlspecialchars($_POST['anciennefiliere']);
        $nouvelleFiliere = htmlspecialchars($_POST['nouvellefiliere']);
        $raison = htmlspecialchars($_POST['raison']);
        $id = $_SESSION['id'];

        if (!empty($ancienneFiliere) && !empty($nouvelleFiliere) && !empty($raison)) {
            $stk = $bd->prepare("INSERT INTO changementfiliere (id_eleve, AncienneFiliere, NouvelleFiliere, Raison) VALUES (:id_eleve, :AncienneFiliere, :NouvelleFiliere, :Raison)");
            $stk->bindParam(":id_eleve", $id);
            $stk->bindParam(":AncienneFiliere", $ancienneFiliere);
            $stk->bindParam(":NouvelleFiliere", $nouvelleFiliere);
            $stk->bindParam(":Raison", $raison);

            if ($stk->execute()) {
                echo $_SESSION['NomComplet'] . " votre requete sur le changement de filière a bien été envoyé";
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
    <link rel="stylesheet" href="">
    <title>Changement de filière</title>
</head>
<body>
    <form action="" method="post">
        <?php echo $_SESSION['NomComplet']; ?>
        <h1>Formulaire de changement de filière</h1>

        <label for="anciennefiliere"><b> Ancienne filière choisie:</b></label>
        <select name="anciennefiliere" id="anciennefiliere">
            <option value="GIM : Génie Industriel et Maintenance">❖ GIM : Génie Industriel et Maintenance</option>
            <option value="GMP : Génie Mécanique et Energie">❖ GMP : Génie Mécanique et Energie</option>
            <option value="GTE : Génie Thermique et Energie">❖ GTE : Génie Thermique et Energie</option>
            <option value="GFE : Génie ferroviaire">❖ GFE : Génie ferroviaire</option>
            <option value="GMI : Génie Métallurgique">❖ GMI : Génie Métallurgique</option>
            <option value="GC : Génie Civil">❖ GC : Génie Civil </option>
            <option value="GEII : Génie Electrique et Informatique Industrielle">❖ GEII : Génie Electrique et Informatique Industrielle</option>
            <option value="GI : Génie Informatique">❖ GI : Génie Informatique</option>
            <option value="GRT : Génie Réseaux et Télécommunication">❖ GRT : Génie Réseaux et Télécommunication</option>
            <option value="GBM : Génie Biomédical">❖ GBM : Génie Biomédical</option>
            <option value="GLT : Génie Logistique et Transport">❖ GLT : Génie Logistique et Transport</option>
            <option value="OGA : Organisation de Gestion Administrative">❖ OGA : Organisation de Gestion Administrative</option>
            <option value="GEA : Gestion des Entreprises et Administrative">❖ GEA : Gestion des Entreprises et Administrative</option>
            <option value="GCF : Gestion Comptable et Financièr">❖ GCF : Gestion Comptable et Financièr</option>
        </select>
        <br><br>

        <label for="nouvellefiliere"><b> Nouvelle filière choisie:</b></label>
        <select name="nouvellefiliere" id="nouvellefiliere">
            <option value="GIM : Génie Industriel et Maintenance">❖ GIM : Génie Industriel et Maintenance</option>
            <option value="GMP : Génie Mécanique et Energie">❖ GMP : Génie Mécanique et Energie</option>
            <option value="GTE : Génie Thermique et Energie">❖ GTE : Génie Thermique et Energie</option>
            <option value="GFE : Génie ferroviaire">❖ GFE : Génie ferroviaire</option>
            <option value="GMI : Génie Métallurgique">❖ GMI : Génie Métallurgique</option>
            <option value="GC : Génie Civil">❖ GC : Génie Civil </option>
            <option value="GEII : Génie Electrique et Informatique Industrielle">❖ GEII : Génie Electrique et Informatique Industrielle</option>
            <option value="GI : Génie Informatique">❖ GI : Génie Informatique</option>
            <option value="GRT : Génie Réseaux et Télécommunication">❖ GRT : Génie Réseaux et Télécommunication</option>
            <option value="GBM : Génie Biomédical">❖ GBM : Génie Biomédical</option>
            <option value="GLT : Génie Logistique et Transport">❖ GLT : Génie Logistique et Transport</option>
            <option value="OGA : Organisation de Gestion Administrative">❖ OGA : Organisation de Gestion Administrative</option>
            <option value="GEA : Gestion des Entreprises et Administrative">❖ GEA : Gestion des Entreprises et Administrative</option>
            <option value="GCF : Gestion Comptable et Financièr">❖ GCF : Gestion Comptable et Financièr</option>
        </select>
        <br><br>

        <label for="raison"><b> Raison du changement de filière:</b></label>
        <textarea name="raison" id="raison" rows="5" cols="40"></textarea>
        <br><br>

        <input type="submit" name="soumettre" value="Soumettre">
    </form>
</body>
</html>