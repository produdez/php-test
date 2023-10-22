<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/src/middlewares/startSession.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/src/utils/urlUtils.php";

if (isset($_SESSION['userId'])) {
	unset($_SESSION['userId']);
}

URLUtils::redirectWithMessage('./login.php', 'info', 'You have logged out');
