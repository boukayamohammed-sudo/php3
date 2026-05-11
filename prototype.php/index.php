<?php

require 'Article.php';

$article = new Article();

$articles = $article->read();

?>

<!DOCTYPE html>
<html>
<head>
    
    <title>Liste des articles</title>
</head>
<body>

<h1>Liste des articles</h1>

<a href="create.php">Ajouter un article</a>

<hr>

<?php foreach($articles as $item) { ?>

    <h3><?php echo $item['titre']; ?></h3>

    <p><?php echo $item['contenu']; ?></p>

    <strong><?php echo $item['auteur']; ?></strong>

    <hr>

<?php } ?>

</body>
</html>