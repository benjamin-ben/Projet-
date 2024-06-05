<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>changement de filiere</title>
</head>
<body>
   <form action="" method="post">
            <h1>formulaire de changement de filiere </h1>

            <label for="anciennefiliere"><b> ancienne filiere choisie:</b></label>
        <select name="anciennefiliere" id="nouvellefiliere">
            <option>❖ GIM : Génie Industriel et Maintenance</option>
            <option>❖ GMP : Génie Mécanique et Energie</option>
            <option>❖ GTE : Génie Thermique et Energie</option>
            <option>❖ GFE : Génie ferroviaire</option>
            <option>❖ GMI : Génie Métallurgique</option>
            <option>❖ GC : Génie Civil </option>
            <option>❖ GEII : Génie Electrique et Informatique Industrielle</option>
            <option>❖ GI : Génie Informatique</option>
            <option>❖ GRT : Génie Réseaux et Télécommunication</option>
            <option>❖ GBM : Génie Biomédical</option>
            <option>❖ GLT : Génie Logistique et Transport</option>
            <option>❖ OGA : Organisation de Gestion Administrative</option>
            <option>❖ GEA : Gestion des Entreprises et Administrative</option>
            <option>❖ GCF : Gestion Comptable et Financièr</option>
        </select>
<br><br>
        <label for="nouvellefiliere"><b> nouvelle filiere choisie:</b></label>
        <select name="nouvellefiliere" id="nouvellefiliere">
            <option value="#">❖ GIM : Génie Industriel et Maintenance</option>
            <option value="#">❖ GMP : Génie Mécanique et Energie</option>
            <option value="#">❖ GTE : Génie Thermique et Energie</option>
            <option value="#">❖ GFE : Génie ferroviaire</option>
            <option value="#">❖ GMI : Génie Métallurgique</option>
            <option value="#">❖ GC : Génie Civil </option>
            <option value="#">❖ GEII : Génie Electrique et Informatique Industrielle</option>
            <option value="#">❖ GI : Génie Informatique</option>
            <option value="#">❖ GRT : Génie Réseaux et Télécommunication</option>
            <option value="#">❖ GBM : Génie Biomédical</option>
            <option value="#">❖ GLT : Génie Logistique et Transport</option>
            <option value="#">❖ OGA : Organisation de Gestion Administrative</option>
            <option value="#">❖ GEA : Gestion des Entreprises et Administrative</option>
            <option>❖ GCF : Gestion Comptable et Financièr</option>
        </select>
        <br><br>
       <div>
        <label for="raison"> <b>raison du changement de filiere:</b></label>
        <textarea name="raison" id="raison" rows="25" cols="50"></textarea>
       </div>
       <input type="submit" name="soumettre" value="soumettre">
   </form> 
</body>
</html>