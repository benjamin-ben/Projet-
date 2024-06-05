<?php
require('vendor/autoload.php'); // Si vous avez installé via Composer

class PDF extends FPDF
{
    // En-tête
    function Header()
    {
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Rapport Academique', 0, 1, 'C');
        $this->Ln(10);
    }

    // Pied de page
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
    }

    // Tableau de notes
    function LoadData($eleve_id)
    {
        $data = [];
        $conn = new mysqli('localhost', 'username', 'password', 'database');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $query = "SELECT matieres.nom AS matiere, notes.note, notes.commentaire 
                  FROM notes 
                  JOIN matieres ON notes.matiere_id = matieres.id 
                  WHERE notes.eleve_id = ?";
                  
        if ($stmt = $conn->prepare($query)) {
            $stmt->bind_param("i", $eleve_id);
            $stmt->execute();
            $result = $stmt->get_result();

            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }

            $stmt->close();
        }

        $conn->close();
        return $data;
    }

    function BasicTable($header, $data)
    {
        // En-tête
        foreach ($header as $col) {
            $this->Cell(40, 7, $col, 1);
        }
        $this->Ln();

        // Données
        foreach ($data as $row) {
            foreach ($row as $col) {
                $this->Cell(40, 6, $col, 1);
            }
            $this->Ln();
        }
    }
}

// Création du PDF
$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);

try {
    // Connexion à la base de données avec PDO
    $conn = new PDO("mysql:host=localhost;dbname=app_requete", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête préparée
    $query = "SELECT matieres.nom AS matiere, notes.note, notes.commentaire 
              FROM notes 
              JOIN matieres ON notes.matiere_id = matieres.id 
              WHERE notes.eleve_id = :eleve_id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':eleve_id', $eleve_id);
    $stmt->execute();

    // Récupérer les données
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $conn = null; // Fermer la connexion
} catch(PDOException $e) {
    echo "ERREUR : " . $e->getMessage();
    die(); // Arrêter l'exécution du script
}

return $data;


// Désactiver le tampon de sortie
ob_start();

// Création du PDF
$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);


// Ajout des informations de l'élève au PDF
$pdf->Cell(0, 10, "Nom: $nom", 0, 1);
$pdf->Cell(0, 10, "Prenom: $prenom", 0, 1);
$pdf->Cell(0, 10, "Classe: $classe", 0, 1);
$pdf->Cell(0, 10, "Date de Naissance: $date_naissance", 0, 1);
$pdf->Cell(0, 10, "Adresse: $adresse", 0, 1);
$pdf->Ln(10);

// Chargement des données
$header = ['Matiere', 'Note', 'Commentaire'];
$data = $pdf->LoadData($eleve_id);

// Affichage du tableau des notes
$pdf->BasicTable($header, $data);

// Génération du fichier PDF
$pdf->Output('D', 'rapport_academique.pdf');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page Académique</title>
</head>
<body>
    <h1>Page Académique</h1>
    <p>Pour télécharger le rapport académique, cliquez sur le bouton ci-dessous :</p>
    <a href="generate_pdf.php?eleve_id=1" target="_blank">Télécharger le Rapport</a>
</body>
</html>