<?php
require 'Encapsulation et bonnes pratiques.php';

$article = new Article();
$article->setTitre("POO en PHP");
$article->setContenu("<p>Introduction à la programmation orientée objet.</p>");
echo $article->afficher();
?> 