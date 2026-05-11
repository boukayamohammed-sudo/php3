<?php

require 'Article.php';

$article = new Article();

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];
    $auteur = $_POST['auteur'];

    $article->create($titre, $contenu, $auteur);

    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un article</title>
</head>
<body>

<h1>Ajouter un article</h1>

<form method="POST">

    <label>Titre :</label><br>
    <input type="text" name="titre"><br><br>

    <label>Contenu :</label><br>
    <textarea name="contenu"></textarea><br><br>

    <label>Auteur :</label><br>
    <input type="text" name="auteur"><br><br>

    <button type="submit">Ajouter</button>

</form>

</body>
</html>