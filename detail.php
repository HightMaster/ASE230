<!DOCTYPE html>
<html lang="en">
	<head>
	<?php
		$webpage_title = "ASE 230 - Munene Gatobu";
		require("functions.php");
	$name = $_GET['name'];
	$key = $_GET['index'];
	?>
	<!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
		<title>This is ASE 230</title>
	</head>
	<body>
		<link rel="stylesheet" href="assets/css/detail.css" />
		
		<div class="container text-center mb-5">
			<h1>
			<?=
			 "This is ASE 230" . " - ".$students[$key]['name']; #targets the $students array to find the name of the student
			?>
			</h1>
		</div>
		<div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-6">
        <div class="mb-2">
          <img class="w-100" src="<?= $students[$key]['img'] ?>" alt="">
        </div>
        <div class="mb-2 d-flex">
          <h4 class="font-weight-normal"><?= $students[$key]['name']?></h4>
          <div class="social d-flex ml-auto">
            <p class="pr-2 font-weight-normal">Follow on:</p>
            <a href="<?= $students[$key]['social'] ?>" class="text-muted mr-1"> <?php #uses social media link from the social key in the $students array?>
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="<?= $students[$key]['social'] ?>" class="text-muted mr-1"> <?php #uses social media link from the social key in the $students array?>
              <i class="fab fa-twitter"></i>
            </a>
            <a href="<?= $students[$key]['social'] ?>" class="text-muted mr-1"> <?php #uses social media link from the social key in the $students array?>
              <i class="fab fa-instagram"></i>
            </a>
            <a href="<?= $students[$key]['social'] ?>" class="text-muted"> <?php #uses social media link from the social key in the $students array?>
              <i class="fab fa-linkedin"></i>
            </a>
          </div>
        </div>
        <div class="mb-2">
          <ul class="list-unstyled">
            <li class="media">
              <span class="w-25 text-black font-weight-normal">Dream Profession:</span>
              <label class="media-body"><?= $students[$key]['dream_profession'] ?></label>
            </li>
            <li class="media">
              <span class="w-25 text-black font-weight-normal">Dream Company:</span>
              <label class="media-body"><?= $students[$key]['dream_company'] ?></label>
            </li>
            <li class="media">
              <span class="w-25 text-black font-weight-normal">Email:</span>
              <label class="media-body"><?= $students[$key]['email'] ?></label>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-7 col-md-6 pl-xl-3">
        <h5 class="font-weight-normal">Short Intro</h5>
        <p><?= $students[$key]['intro'] ?></p>
        <div class="my-2 bg-light p-2">
          <p class="font-italic mb-0"><?= $students[$key]['quote'] ?></p>
        </div>
        <div class="mb-2 mt-2 pt-1">
          <h5 class="font-weight-normal">Top Skills</h5>
        </div>
		<?php for ($x=0; $x < count($students[$key]['skills']); $x++){
			$skill = $students[$key]['skills'][$x]?>
        <div class="py-1">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:<?= $skill['value']?>%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar-title"><?= $skill['name'] ?></div>
              <span class="progress-bar-number"><?= $skill['value']."%"?></span>
            </div>
          </div>
        </div>
		<?php }?>
        
        <h5 class="font-weight-normal">Fun Fact</h5>
        <p><?= $students[$key]['fact'] ?></p>
		<p><strong>Current Age:</strong> <?= calculateAge($key).". Born " .calculateDaysBorn($key)." ago"; ?></p>
      </div>
	  <h5><a href="index.php"><?=" Back To Home ";?></a></h5>
	  <h5><a href="modify.php?index=<?=$key?>&name=<?=$name?>"><?=" Modify Person ";?></a></h5>
	  <h5><a href="delete.php"><?=" Delete Person ";?></a></h5>
    </div>
  </div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>