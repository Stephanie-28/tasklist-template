<?php
require_once "bdd-crud.php";
// TODO Connection Utilisateur via la session
// $user = get_user($_POST["email"]);
session_start();
if (isset($_POST["email"]) && $_POST["password"]) {

    $user = get_user($_POST["email"]);
    if (password_verify($_POST["password"], $user["password"])) {
        header("Location: index.php");

    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Connexion</h1>
    <!-- TODO Formulaire de connexion -->
    <form action="#" method="post">
        <input type="text" name="email" placeholder="Entre votre email !">
        <input type="text" name="password" placeholder="Entre votre mot de passe !">
        <button>Envoyer</button>
    </form>
    <a href="inscription.php">Pas de compte ? S'inscrire</a>
</body>

</html>