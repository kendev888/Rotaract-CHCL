<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uploadDir = 'uploads/';
    $uploadFile = $uploadDir . basename($_FILES['id_proof']['name']);

    // Vérifiez si le fichier est une image ou un PDF
    $fileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));
    $allowedTypes = ['jpg', 'jpeg', 'png', 'pdf'];

    if (in_array($fileType, $allowedTypes)) {
        if (move_uploaded_file($_FILES['id_proof']['tmp_name'], $uploadFile)) {
            echo "Fichier téléchargé avec succès.";
        } else {
            echo "Erreur lors du téléchargement du fichier.";
        }
    } else {
        echo "Type de fichier non autorisé.";
    }
}
?>