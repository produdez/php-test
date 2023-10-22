<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/src/utils/urlUtils.php";

require_once $_SERVER['DOCUMENT_ROOT'] . "/bootstrap.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/src/models/User.php";


$username = $_POST['username'];
$password = $_POST['password'];
$fullName = $_POST['fullName'];


try {
	if (!$username || !$password) throw new Error('Credentials cannot be empty');

	$userRepository = $entityManager->getRepository('User');
	$user = $userRepository->findOneBy(array('username' => $username));
	if ($user != null) {
		throw new Error("User Already Exists");
	}

	// TODO: add more server-side validations + encryption
	$user = new User();
	$user->setUsername($username);
	$user->setPassword($password);
	$user->setFullName($fullName);

	$entityManager->persist($user);
	$entityManager->flush();

	URLUtils::redirectWithMessage('./login.php', 'info', 'Account registered, please login.');
} catch (\Throwable $error) {
	URLUtils::redirectWithMessage('./register.php', 'error', $error->getMessage());
}
