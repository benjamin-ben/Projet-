<?php 
session_start();
require('vendor/autoload.php'); 

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

    // Chargement des données avec PDO
    function LoadData($eleve_id)
    {
        $data = [];
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
    }

    // Tableau de notes
    public function BasicTable($header, $data)
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

// Désactiver le tampon de sortie
ob_start();

// Création du PDF
$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);

// Connexion à la base de données avec PDO
try {
    $conn = new PDO("mysql:host=localhost;dbname=app_requete", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer les informations de l'élève
    $eleve_id = $_GET['eleve_id'];
    $query = "SELECT NomComplet, date_naissance, MATRICULE, niveau FROM eleves WHERE id = :eleve_id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':eleve_id', $eleve_id);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // Ajout des informations de l'élève au PDF
    $pdf->Cell(0, 10, "NomComplet: " . $row['NomComplet'], 0, 1);
    $pdf->Cell(0, 10, "date_naissance: " . $row['date_naissance'], 0, 1);
    $pdf->Cell(0, 10, "MATRICULE: " . $row['MATRICULE'], 0, 1);
    $pdf->Cell(0, 10, "niveau: " . $row['niveau'], 0, 1);
    $pdf->Ln(10);

    // Chargement des données
    $header = ['Matiere', 'Note', 'Commentaire'];
    $data = $pdf->LoadData($eleve_id);

    // Affichage du tableau des notes
    $pdf->BasicTable($header, $data);

    // Génération du fichier PDF
    $pdf->Output('D', 'rapport_academique.pdf');

    $conn = null; // Fermer la connexion
} catch(PDOException $e) {
    echo "ERREUR : " . $e->getMessage();
    die();
}

// Supprimer le tampon de sortie
ob_end_clean();
?>
