<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Game O'clock</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Le css du jeu -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>vendor/css/game.css"/>
</head>
<body>

<div class="container">
	<div class="row mb-4">
		<div class="col-12 text-center pt-3">
			<h1>Le tableau des scores</h1>
			<h4>TOP 5</h4>
		</div>
	</div>

	<br>

	<div class="row justify-content-md-center mb-4">
		<div class="col-md-12">

			<!--start code-->
			<div class="widget">
				<!-- widget content -->
				<table class="table small mb-5">
					<thead class="thead-light">
					<tr>
						<th scope="col"></th>
						<th scope="col">Pseudo</th>
						<th scope="col">Score</th>
						<th scope="col">Date</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach($scores as $key => $score) { ?>
					<tr class="bg-success text-white">
						<th scope="col"><?php echo $key + 1 ?></th>
						<th scope="col"><?php echo $score['Pseudo'] ?></th>
						<th scope="col"><?php echo 120 - $score['Score'] . 's' ?></th>
						<th scope="col"><?php echo $score['Date'] ?></th>
					</tr>
					</tbody>
					<?php }?>
				</table>
				<div class="gap-0"></div>
			</div>
			<!--end code-->

		</div>
	</div>
</div>

<script src="<?php echo base_url()?>vendor/js/game.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</body>
</html>
