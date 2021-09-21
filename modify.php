<!DOCTYPE html>
<?php
require("json_util.php");
function modifyPerson(){
	$file = readJSON("classtest.json");
	$index = $_GET['index'];
	if($index <= count($file) && $index >= 0){
		$file[$index]["name"] = "Beethoven";
		saveJSON($file, "classtest.json");
		return "User's name has been changed to Beethoven";
	} else {
		return "Please modify a valid user";
	}
}
?>
	<head>
	</head>
	<body>
		<h1><?php echo modifyPerson();?></h1>
	</body>
</html>