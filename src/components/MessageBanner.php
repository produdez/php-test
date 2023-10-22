<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/src/components/StatusBanner.php";


function MessageBanner()
{
	if (session_status() == PHP_SESSION_NONE) throw new Error('PHP session must be started for this component to work!');
	$messageType = $_SESSION['messageType'] ?? null;
	unset($_SESSION['messageType']);
	$message = $_SESSION['message'] ?? null;
	unset($_SESSION['message']);

	if (!$message) return;
	if (!$messageType) return StatusBanner($message);
	return StatusBanner($message, $messageType);
}
