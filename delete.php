<!DOCTYPE html>
<?php
require("json_util.php");
function deletePerson($index){
	$file = readJSON("classtest.json");
	if($index <= count($file) && $index >= 0){
		array_splice($file, $index, 1);
		saveJSON($file, "classtest.json");
		return "The specified user has been removed";
	} else {
		return "Please enter a valid index";
	}
}
?>
	<head>
	</head>
	<body>
		<h1><?php echo deletePerson(3);?></h1>
	</body>
</html>