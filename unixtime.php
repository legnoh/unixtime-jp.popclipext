<?php
function ifNull($a, $b) {
	return $a?$a:$b;
}
function doConvert($text) {
	date_default_timezone_set('Asia/Tokyo');
	return date(DATE_RSS, $text);	
}
if ($input=getenv('POPCLIP_TEXT')) {
	echo doConvert($input);
}
?>