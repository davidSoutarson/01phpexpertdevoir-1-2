<?php
// Inclure la configuration globale
/* include("../../root.php"); */
require_once("../../root.php");

// Inclure le header
require_once(VIEWS_PATH . "Header.php");
?>

<h2>Page PHP 1</h2>

<p> ici on ajoute le contenue de la page d'accueill du devire 1.php </p>

<p> modife 5 </p>

<?php
require_once(VIEWS_PATH_PH1 . "pageAccueille.php");



// Inclure le footer
require_once(VIEWS_PATH . "Footer.html");
?>