<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Game O'clock</title>
	<!-- Latest compiled and minified CSS -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

	<!-- Le css du jeu -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>vendor/css/menu.css"/>

</head>
<body>
<div class="container forget-password">
	<div class="row">
		<div class="col-md-12 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="text-center">
						<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQF5PKgCJcgkQI_iqrmfP6rOITBzKs1p5mCIg&usqp=CAU alt="car-key" border="0">
						<h2 class="text-center">Le jeu : Memory</h2>
						<p>Donne ton pseudo et c'est parti !</p>
						<?php echo form_open('game'); ?>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
									<input name="pseudo" placeholder="Pseudo" class="form-control" type="text">
								</div>
							</div>
							<div class="form-group">
								<input name="btnForget" class="btn btn-lg btn-primary btn-block btnForget" value="Jouer" type="submit">
							</div>
						<a href="#scores"><input class="btn btn-lg btn-primary btn-block btnForget" value="Les scores"></a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row mb-4">
		<div class="col-12 text-center pt-3">
			<h1 id="scores">Le tableau des scores</h1>
		</div>
	</div>
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
