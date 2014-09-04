<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sum of Digits</title>
	<style>
		body {
			font-size: 20px;
		}

		table, tr, td {
			border: 1px solid black
		}
	</style>
</head>
<body>
<section>
	<form method="post" action="">
		<p><label for="input">Input String: </label><input type="text" name="input" id="input"
		                                                   autofocus="autofocus"><input type="submit"
		                                                                                name="submitButton">
		</p>
	</form>
</section>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['input'])) {

	$inputArr = explode(', ', $_POST['input']);

	echo '<table>';

	foreach ($inputArr as $num) {
		if (is_numeric($num)) {
			printSumOfNum($num);
		} else {
			printNAN($num);
		}
	}

	echo '</table>';
}

function printNAN($inputStr)
{
	echo '<tr><td>' . $inputStr . '</td><td>I cannot sum that</td></tr>';
}

function printSumOfNum($num)
{
	$sum = 0;
	$n = $num;
	$temp = 0;

	while ($n >= 1) {
		$temp = $n % 10;
		$sum += $temp;
		$n = $n / 10;
	}

	echo '<tr><td>' . $num . '</td><td>' . $sum . '</td></tr>';
}
