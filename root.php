<?php

/**
 * Configuration de base du projet.
 */

/**
 * Définir le protocole (HTTP ou HTTPS) en fonction de la configuration du serveur.
 */
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";

/**
 * Définir une constante pour la racine du projet.
 */
define('BASE_PATH', __DIR__ . '/');
define('BASE_URL', $protocol . $_SERVER['SERVER_NAME'] . '/01phpexpertdevoir-1-2/');

/**
 * Définir des constantes pour les chemins relatifs des vues (HTML).
 */
define('VIEWS_PATH', BASE_PATH . 'Vue_HTML/');

/**
 * Définir des constantes pour les chemins: Devoir_PHP/PHP1 relatifs des vues (Devoir_PHP/PHP1/vue).
 */
define('VIEWS_PATH_PH1', BASE_PATH . 'Devoir_PHP/PHP1/vue/');

/**
 * Chemin absolu vers le fichier CSS
 */
define('CSS_PATH', BASE_URL . 'css/style.css');


// Définir les chemins dynamiques pour les liens de navigation
$homeUrl = BASE_URL . 'index.php';
$php1Url = BASE_URL . 'Devoir_PHP/PHP1/index.php';
$php2Url = BASE_URL . 'Devoir_PHP/PHP2/index.php';
