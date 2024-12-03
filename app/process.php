<?php
// Données d'utilisateur prédéfinies
$users = [
    ['email' => 'test@example.com', 'password' => 'password123'],
    ['email' => 'admin@example.com', 'password' => 'admin2024']
];

// Récupération des données du formulaire
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Vérification des identifiants
$isValid = false;
foreach ($users as $user) {
    if ($user['email'] === $email && $user['password'] === $password) {
        $isValid = true;
        break;
    }
}

// Redirection en fonction de la validation
if ($isValid) {
    header('Location: success.php');
    exit();
} else {
    header('Location: error.php');
    exit();
}
