<?php 
session_start();
require('connexionbd.php');

if (isset($_POST['envoyer'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $NomComplet = htmlspecialchars($_POST['nomcomplet']);
        $niveau= htmlspecialchars($_POST['niveau']);
        $filiere = htmlspecialchars($_POST['filiere']);
        $id = $_SESSION['id'];

        if (!empty($NomComplet) && !empty($niveau) && !empty($filiere)) {
            $stk = $bd->prepare("INSERT INTO pbmatricule (id_eleve, NomComplet, Niveau, Filiere) VALUES (:id_eleve, :NomComplet, :Niveau, :Filiere)");
            $stk->bindParam(":id_eleve", $id);
            $stk->bindParam(":NomComplet", $NomComplet);
            $stk->bindParam(":Niveau", $niveau);
            $stk->bindParam(":Filiere", $filiere);

            if ($stk->execute()) {
                echo " votre requete sur le changement de filière a bien été envoyé";
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
    <title>probleme de matricule</title>
</head>
<body>
    <h1>pout tous ceux n'ayant pas de matricule, bien vouloir remplir ce formulaire</h1>
  <fieldset>
    <legend>entrer vos informations</legend>
    <form action="" method="post">
        <label for="nom">
            nom complet:
        </label>
        <input type="text" name="nomcomplet" id="nom" placeholder="entrer vore nom complet"><br><br>
               <label for="niveau">
                    niveau:
                </label>
                <select name="niveau" id="niveau">
                    <option value="I">I</option>
                    <option value="II">II</option>
                    <option value="III">II</option>
                    <option value="IV">IV</option>
                    <option value="V">V</option>

                </select>
                <label for="filiere">filiere:</label>
                <select name="filiere" id="filiere">
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
        
                </select><br><br>
                
                <input type="submit" name="envoyer" id="envoyer" value="envoyer">

    </form>  
  </fieldset>
</body>
</html>