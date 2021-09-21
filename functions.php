<?php
require('data.php');
/*
$dateOfBirth = date_create($students[0]["date_of_birth"]); 
echo $dateOfBirth . "   " . $currentDate;
*/
	
$students = json_decode(file_get_contents("classtest.json"), true);
//echo date('Y-m-d H:i:s'). " ";					    		#prints out current date and time
function calculateAge($studentID){								#IMPORTANT SIDE NOTE, $studentID is technically not supposed to be the actual ID, but all my webpages use $_GET -1 so it doesn't matter at the moment.
	$students = json_decode(file_get_contents("classtest.json"), true);
	$currentDate = date_create(date('Y-m-d'));
	$student = $students[$studentID]["date_of_birth"];			#uses the ID provided in the function parameter to find the right student
	$dateOfBirth = date_create($student); 						#Turns the date of birth string in the $students
																#PHP can't correctly display the result of date_diff as a string. So we need to use
																#the format() method in order to formate it properly.
	return date_diff($currentDate, $dateOfBirth)->format('%y');
}

function calculateDaysBorn($studentID){
	$students = json_decode(file_get_contents("classtest.json"), true);
	$currentDate = date_create(date('Y-m-d'));
	$student = $students[$studentID]["date_of_birth"];			#uses the ID provided in the function parameter to find the right student
	$dateOfBirth = date_create($student); 						#Turns the date of birth string in the $students
	
	
	#Returns the difference between $currentDate and $date of Birth in the specified format
	#PHP can't correctly display the result of date_diff as a string. So we need to use
	#the format() method in order to formate it properly.
	return date_diff($currentDate, $dateOfBirth)->format('%y Years, %m Months, and %d Days');
}


?>