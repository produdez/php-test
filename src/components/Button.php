<?php

function Button ($text="Button", $type="summit", $disabled=false, $color="red") {
	// NOTE: these arguments are not OPTIMAL (i know, this is just for illustration purposes)
	$disabled_attr = $disabled ? "disabled" : "";
	echo '
		<button style="color: '. $color .';" '. $disabled_attr .' type="'. $type .'">
			' . $text .' 
		</button>
	';
};

?>
