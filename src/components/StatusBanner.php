<?php

function StatusBanner ($text="Some Status", $type="success") {
	if(!$text) return;

	switch ($type) {
		case 'success':
			$bannerClass = 'bg-green-300';
			$textClass = 'text-green-900';
			break;
		case 'error':
			$bannerClass = 'bg-red-300';
			$textClass = 'text-red-900';
			break;
		case 'warning':
			$bannerClass = 'bg-yellow-300';
			$textClass = 'text-yellow-900';
			break;
		case 'info':
			$bannerClass = 'bg-blue-300';
			$textClass = 'text-blue-900';
			break;
		default:
			return;
	}
	echo '
		<div class="w-full text-center '. $bannerClass .'">
			<p class="p-2 '. $textClass .'"> '. $text .' </p>
		</div>
	';
};
