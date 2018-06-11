<?php

error_reporting(E_ALL);

$uri = null;
$uri = explode('/', $_SERVER['REQUEST_URI']);

$getID = strip_tags(filter_input(INPUT_GET, 'id'));
$userPart = new UserPart($pdo, $twig, $perPage);
$adminPart = new AdminPart($pdo, $twig, $perPage);

if ($uri[1] === 'category') {
	$userPart->theQuestions($uri);
} else if ($uri[1] === 'question') {
	$userPart->theQuestion($uri);
} else if ($uri[1] === 'ask') {
	$userPart->theFAQForm();
} else if ($uri[1] === 'admin' && $uri[2] === 'questions' && $uri[3] === 'question') {
	$adminPart->editQuestion($uri);
} else if ($uri[1] === 'admin' && $uri[2] === 'questions') {
	$adminPart->editQuestions($uri);
} else if ($uri[1] === 'admin' && $uri[2] === 'categories') {
	$adminPart->editCategories($uri);
} else if ($uri[1] === 'admin' && $uri[2] === 'users') {
	$adminPart->editUsers($uri);
} else if ($uri[1] === 'admin') {
	$adminPart->getDashboard($uri);
} else {
	$userPart->theQuestions($uri);
}