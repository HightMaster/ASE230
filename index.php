<!DOCTYPE html>
<?php
	$name = "Munene Gatobu";
	$role = "Student";
	$names = array("Munene Gatobu", "Thick Boi", "Aggressive Boi");
	$roles = array("Student", "Student", "Student");
	require('functions.php');
	
	function createCard($key){ 
		require_once('functions.php');
		$students = json_decode(file_get_contents("classtest.json"), true);
		?>
		<div class="col-12 col-sm-6 col-lg-3"> 
				<div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
					<!-- Team Thumb-->
					<div class="advisor_thumb"><a href="detail.php?index=<?=$key?>&name=<?=$students[$key]["name"]?>"><?php if($students[$key]['year'] == 1){
					/* Set of conditional statements used to assign certain pictures to a student based on 
					their current school year. 
					*/
					 echo "<img src=\"freshmen.png\" alt=\"\">"; 
					}else if($students[$key]['year'] == 2){
						echo "<img src=\"sophomore.png\" alt=\"\">";
					}else if($students[$key]['year'] == 3){
						echo "<img src=\"junior.png\" alt=\"\">";
					}else {
						echo "<img src=\"senior.png\" alt=\"\">"; 
				}?>
					<img src="<?= $students[$key]['img']?>" alt=""></a>
					<!-- Social Info-->
					<div class="social-info"><a href="<?= $students[$key]['social'] ?>"><i class="fa fa-facebook"></i></a><a href="<?= $students[$key]['social'] ?>"><i class="fa fa-twitter"></i></a><a href="<?= $students[$key]['social'] ?>"><i class="fa fa-linkedin"></i></a></div>
					</div>
					<!-- Team Details-->
					<div class="single_advisor_details_info">
						<h6>
							<?= $students[$key]['name'];?>
						</h6>
						<p class="designation">
							<?= $students[$key]['role'];?>
						</p>
						<p class="designation">
							<strong>Age:</strong><?=" ".calculateAge($key);?>
						</p>
						<p class="designation">
							<?= "Born ". calculateDaysBorn($key). " ago";?>
						</p>
					</div>
				</div>
			</div>
	 <?php } ?> 

<html lang="en">
	<head>
		<!-- https://www.bootdey.com/snippets/view/single-advisor-profile#html -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/index.css" />
	<title>ASE 230 - class of Spring/Fall/Summer 20XX </title>
	</head>
	<body>
		<div class="container text-center">
			<h1>This is ASE 230 - class of Spring/Fall/Summer 20XX</h1>
		</div>
		<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-sm-8 col-lg-6">
					<!-- Section Heading-->
						<div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
							<h3>Our Creative <span> Team</span></h3>
							<p>Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</p>
							<h4><a href="create.php"><?="Create Person";?></a></h4>
						<div class="line"></div>
					</div>
				</div>
			</div>
		<div class="row">
			<!-- Single Advisor-->
			
		<?php 
			for($x=0 ; $x < count($students); $x++){
				createCard($x);
			}
		?>
		</div>
		
		</div>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</body>
</html>

