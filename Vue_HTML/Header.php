<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devoir PHP Expert</title>
    <!-- Inclusion du fichier CSS avec chemin absolu -->
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>">
</head>

<body>
    <header>
        <h1>Bienvenue sur le projet PHP Expert</h1>
        <nav class="menuP">
            <ul class="menuUlListe">
                <!-- Utilisation des chemins absolus définis dans root.php -->
                <li class="listeIteme">
                    <a class="iteme" href="<?php echo $homeUrl; ?>">Accueil</a>
                </li>
                <li class="listeIteme">
                    <a class="iteme" href="<?php echo $ponUrl; ?>">Pon Devoir_PHP </a>
                </li>
                <li class="listeIteme">
                    <a class="iteme" href="<?php echo $php1Url; ?>">Devoir PHP 1</a>
                </li>
                <li class="listeIteme">
                    <a class="iteme" href="<?php echo $php2Url; ?>">Devoir PHP 2</a>
                </li>
            </ul>
        </nav>
    </header>