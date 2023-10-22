<?php

class URLUtils {
	static public function redirect($url, $statusCode = 303) {
		header('Location: ' . $url, true, $statusCode);
	}

	static public function redirectWithMessage($url, $messageType, $message) {
		$url = URLUtils::queryMany($url, ['messageType' => $messageType, 'message' => $message]);

		return URLUtils::redirect($url);
	}

	static public function queryMany($url, $keyValueList) {
		$i = 0;
		foreach ($keyValueList as $key => $value) {
			$prefix = $i == 0 ? '?' : '&';
			$url = $url . $prefix . $key . '=' . $value;
			$i++;
		}
		return $url;
	}
	static public function query($url, $key, $value) {
		return $url . '?' . $key . '=' . $value;
	}
}

// TODO: how to redirect with data but not in url? PHP
