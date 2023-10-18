<?php
if(!isset($c_meta_charset)) $c_meta_charset = 'UTF-8';
if(!isset($c_meta_title)) $c_meta_title = 'Document';


echo '
	<head>
		<meta charset="'. $c_meta_charset .'" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title> '. $c_meta_title . '</title>
	</head>
';

