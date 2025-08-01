<?php
require_once "bdd-crud.php";
if (isset($_POST["title"]) && 
    isset($_POST["description"]) &&
    isset($_POST["user_id"])){

    add_task($_POST["title"],$_POST["description"], $_POST["user_id"]);    
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- TODO Formulaire pour ajouter une tâche -->
    <h2>New tache</h2>
    <form action="#" method="post">
        <input type="text" name="title" placeholder="Votre titre !">
        <input type="text" name="description" placeholder="Votre descrition!" >
        <input type="text" name="user_id">
        <button>Nouvelle Tache</button>
    </form>
</body>
</html>