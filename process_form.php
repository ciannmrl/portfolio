<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Créer le contenu à enregistrer
    $contenu = "Nom: " . $nom . "\n";
    $contenu .= "Email: " . $email . "\n";
    $contenu .= "Message: " . $message . "\n";
    $contenu .= "Date: " . date("Y-m-d H:i:s") . "\n";
    $contenu .= "---\n\n";
    
    // Ajouter au fichier contact.txt
    file_put_contents("contact.txt", $contenu, FILE_APPEND);
    
    // Rediriger vers la page d'accueil avec un message de succès
    header("Location: index.html?success=1");
    exit;
}
?>
