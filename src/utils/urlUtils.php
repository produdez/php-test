<?php

class URLUtils
{
	static public function redirect($url, $statusCode = 303)
	{
		header('Location: ' . $url, true, $statusCode);
	}

	static public function redirectWithMessage($url, $messageType, $message)
	{
		// message and message type is put in $_SESSION
		if (session_status() == PHP_SESSION_NONE) throw new Error('PHP session must be started for this function to work!');

		// $url = URLUtils::queryMany($url, ['messageType' => $messageType, 'message' => $message]);
		$_SESSION['message'] = $message;
		$_SESSION['messageType'] = $messageType;

		return URLUtils::redirect($url);
	}

	static public function queryMany($url, $keyValueList)
	{
		$i = 0;
		foreach ($keyValueList as $key => $value) {
			$prefix = $i == 0 ? '?' : '&';
			$url = $url . $prefix . $key . '=' . $value;
			$i++;
		}
		return $url;
	}
	static public function query($url, $key, $value)
	{
		return $url . '?' . $key . '=' . $value;
	}
}
