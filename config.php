<?php
session_start();

/**
 * DB Config
 */
require_once 'connect.php';
try {
	$pdo = new PDO('mysql:host=' . HOST . ';dbname=' . DB . ';charset=utf8', USER, PASS);
} catch (PDOException $e) {
	exit('Возникла ошибка соединения: ' . $e->getMessage());
}

/**
 * Autoloader
 */
require_once 'vendor/autoload.php';

/**
 * Twig Config
 */
$loader = new Twig_Loader_Filesystem('views');

$twig = new Twig_Environment($loader, array(
	'cache' => 'tmp/cache',
	'auto_reload' => true,
	'debug' => true
));
$twig->addExtension(new Twig_Extension_Debug());

/**
 * PerPage
 */
$perPage = 4;