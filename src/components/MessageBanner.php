<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/src/components/StatusBanner.php";

function MessageBanner()
{
	$messageType = $_GET['messageType'] ?? null;
	$message = $_GET['message'] ?? null;
	if (!$message) return;
	if (!$messageType) return StatusBanner($message);
	return StatusBanner($message, $messageType);
}
