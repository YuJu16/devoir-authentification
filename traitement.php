<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pseudo = $_POST['pseudo'] ?? '';
    $password = $_POST['password'] ?? '';
    if (empty($pseudo) || empty($password)) {
        echo "Veuillez remplir tous les champs.";
    } else {
        echo "Bonjour $pseudo<br>";
        echo "Votre mot de passe est $password";
    }
} else {
    echo "Désolé, le formulaire n'a pas été envoyé correctement.";
}
?>
