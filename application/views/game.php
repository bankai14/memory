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
<div class="container text-center">
	<!-- Le jeu -->

	<h3>Pseudo : <span id="pseudoGame"><?php echo $pseudo ?></span></h3>
	<div id="result">

	</div>
	<!-- ***************************** -->
	<br>

	<!-- La barre de Progression -->
	<div class="barProgress">
		<p>Il te reste : <span class="time">120s</span></p>
		<div class="progress">
			<div class="progress-inner"></div>
		</div>
	</div>
	<!-- ***************************** -->

	<!-- Lorsque l'on gagne -->

	<div class="winGame">
		<img src="https://images.assetsdelivery.com/compings_v2/yusakp/yusakp1809/yusakp180900014.jpg">
		<h3> Votre score: <span name="score" class="timeFinal">Score</span></h3>
		<?php echo form_open('game/getScore'); ?>
		<div class="form-group">
			<input name="btnForget" class="btn btn-lg btn-primary btn-block btnForget" value="Voir le tableau des scores" type="submit">
		</div>
		</form>
	</div>
	<!-- ***************************** -->

	<!-- Lorsque l'on perd -->

	<div class="loseGame">
		<img id="loseGame" src="https://media4.giphy.com/media/eJ4j2VnYOZU8qJU3Py/giphy_s.gif?cid=790b7611b32c60e3fb04b205fab4e063281bbf7341bfb230&rid=giphy_s.gif&ct=g">
		<br>
		<?php echo form_open('game/getScore'); ?>
		<div class="form-group">
			<input name="btnForget" class="btn btn-lg btn-primary btn-block btnForget" value="Voir le tableau des scores" type="submit">
		</div>
		</form>
	</div>
	<!-- ***************************** -->
</div>

<script src="<?php echo base_url()?>vendor/js/game.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</body>
</html>
