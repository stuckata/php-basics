<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Car Randomizer</title>
	<style>
		table, tr, td {
			border: 1px solid black;
		}
	</style>
</head>
<body>
<section>
	<form method="post" action="">
		<label for="input_cars">Enter Cars </label><input type="text" id="input_cars" name="cars"
		                                                  autofocus="autofocus">
		<input type="submit" name="submit" value="Show result">
	</form>
	<br>
</section>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['cars'])) {

	$colorsArray = array('red', 'green', 'yellow', 'black', 'silver', 'gray', 'white');
	$carsArray = explode(', ', $_POST['cars']);

	echo '<table><tr><td><strong>Car</strong></td><td><strong>Color</strong></td><td><strong>Count</strong></td></tr>';

	foreach ($carsArray as $car) {

		$randomColor = array_rand($colorsArray);
		$randomNum = rand(1, 5);

		echo '<tr><td>' . $car . '</td><td>' . $colorsArray[$randomColor] . '</td><td>' . $randomNum . '</td></tr>';
	}

	echo '</table>';
}
