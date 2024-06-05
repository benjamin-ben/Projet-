<?php
// connexion à la base de donnée
 
$host="mysql:host=localhost; dbname=app_requete";
$user="root";
$password="";
try
{
    $bd=new PDO($host,$user,$password);
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// echo "connexion reussi";
}
catch(PDOException $e)
{
    echo "ERREUR".$e->getMessage();
}
?>
