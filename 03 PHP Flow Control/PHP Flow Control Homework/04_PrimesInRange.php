<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Primes In Range</title>
	<style>
		body {
			font-size: 20px;
		}
	</style>
</head>
<body>
<section>
	<form method="post" action="">
		<p><label for="start_index">Starting Index: </label><input type="text" name="start" id="start_index"
		                                                           autofocus="autofocus">
			<label for="end_index">End: </label><input type="text" name="end" id="end_index"><input type="submit"
			                                                                                        name="submitButton">
		</p>
	</form>
</section>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['start']) && !empty($_POST['end'])) {

	$startIdx = $_POST['start'];
	$endIdx = $_POST['end'];

	for ($i = $startIdx; $i <= $endIdx; $i++) {

		$isPrime = checkPrimeNum($i);

		if($i != $startIdx){
			echo ', ';
		}

		if($isPrime){
			printPrimeNum($i);
		} else {
			printNotPrimeNum($i);
		}
	}
}

function checkPrimeNum($num)
{

	$isPrime = true;

	if ($num == 0 || $num == 1 || $num == 2) {

		return $isPrime;
	} else {

		for ($i = 2; $i <= sqrt($num); $i++) {

			if ($num % $i == 0) {
				$isPrime = false;
				return $isPrime;
			}
		}
		return $isPrime;
	}
}

function printPrimeNum($num)
{
	echo '<strong>' . $num . '</strong>';
}

function printNotPrimeNum($num)
{
	echo $num;
}
