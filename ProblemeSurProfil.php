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
                <form action="" method="post">
                    <label for="choix">choisir:</label>
                    <select title="cni" id="cni" multiple>
                        <option value=""> nom</option>
                        <option value="">prénom</option>
                        <option value="">date de naissance </option>
                        <option value="">lieu de naissance</option>
                        <option value="">sexe</option>
                        <option value="">nationalité</option>
                    </select><br><br>
                    <button id="choisir" type="button">cni</button>
        <label for="recue"> inserer la CNI:</label>
        <input type="file" name="recue" id="recue"><br><br>
        <input type="submit" name="soumettre" value="soumettre">
                </form>

    </fieldset>
</body>
</html>