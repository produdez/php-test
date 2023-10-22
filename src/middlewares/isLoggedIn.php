<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/src/middlewares/startSession.php";

if(!isset($_SESSION['userId'])) {
	http_response_code(404);
	require_once $_SERVER['DOCUMENT_ROOT'] . "/src/pages/errors/403_forbidden.php";
	die();
}

require_once $_SERVER['DOCUMENT_ROOT'] . "/bootstrap.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/src/models/User.php";
$user = $entityManager->find('User', $_SESSION['userId']);
