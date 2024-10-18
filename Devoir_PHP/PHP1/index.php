<?php
# Atention Branche master

// Inclure la configuration globale
/* include("../../root.php"); */
require_once("../../root.php");

// Inclure le header
require_once(VIEWS_PATH . "Header.php");
?>

<h2>Page PHP 1</h2>

<p> ici on ajoute le contenue de la page d'accueill du devire 1.php </p>

<?php
require_once(VIEWS_PATH_PH1 . "pageAccueille.php");



// Inclure le footer
require_once(VIEWS_PATH . "Footer.html");
?>

<!--
# Atention Branche master
# nous somme sur la branche master 
-->