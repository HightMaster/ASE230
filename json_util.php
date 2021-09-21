<?php
	
function readJSON($json){
	$file = json_decode(file_get_contents($json), true);
	return $file;
}

function saveJSON($arrayToSave, $json){
	file_put_contents($json,json_encode($arrayToSave, JSON_PRETTY_PRINT));
}
?>