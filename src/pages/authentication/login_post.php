<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/src/middlewares/startSession.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/src/utils/urlUtils.php";

require_once $_SERVER['DOCUMENT_ROOT'] . "/bootstrap.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/src/models/User.php";


$username = $_POST['username'];
$password = $_POST['password'];


try {
	if(!$username || !$password) throw new Error('Credentials cannot be empty');

	$userRepository = $entityManager->getRepository('User');
	$user = $userRepository->findOneBy(array('username' => $username, 'password' => $password));
	if($user == null) {
		throw new Error("Invalid Login Credentials");
	}

	// ! Session Auth info is set here
	$_SESSION['userId'] = $user->getId();

	URLUtils::redirectWithMessage('./profile.php', 'success', 'Login successful !!');
} catch (\Throwable $error) {
	URLUtils::redirectWithMessage('./login.php', 'error', $error->getMessage());
}
