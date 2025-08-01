<?php
require_once "bdd-crud.php";

if (
    isset($_POST["email"]) &&
    isset($_POST["password"])
) {

    $user_id = create_user($_POST["email"], $_POST["password"]);
    if($user_id ) {
        header("Location: login.php");
    }
}

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>

<body>
    <!-- TODO Formulaire pour s'inscrire (créer un utilisateur) -->
    <h2>S'inscrire</h2>
    <form action="#" method="post">
        <input type="text" name="email" placeholder="Entre votre email !">
        <input type="text" name="password" placeholder="Entre votre mot de passe !">
        <button>Envoyer</button>
    </form>
    <a href="login.php">Se connecter</a>
</body>

</html>