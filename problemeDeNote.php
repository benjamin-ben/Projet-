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
        <label for="matricule">
            niveau:
        </label>
        <input type="text" name="matricule" id="matricule">
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