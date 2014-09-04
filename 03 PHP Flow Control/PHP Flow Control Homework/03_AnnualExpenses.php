<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Annual Expenses</title>
	<style>
		table, tr, td {
			border: 1px solid black;
		}
	</style>
</head>
<body>
<section>
	<form method="post" action="">
		<label for="years_count">Enter Number of Years: </label><input type="text" id="years_count" name="years"
		                                                               autofocus="autofocus">
		<input type="submit" name="submitButton" value="Show costs">
	</form>
	<br>
</section>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['years'])) {

	$years = $_POST['years'];

	echo '<table><tr><td><strong>Year</strong></td>';
	printMonthsName();
	echo '<td><strong>Total:</strong></td></tr>';


	for ($i = 0; $i < $years; $i++) {

		printYear($i);
		$total = 0;
		$temp = 0;

		for ($mon = 1; $mon <= 12; $mon++) {

			$temp = generateRandomExp();
			echo '<td>' . $temp . '</td>';
			$total += $temp;
		}
		echo '<td>' . $total . '</td></tr>';
	}

}

function printMonthsName()
{
	for ($i = 2; $i <= 13; $i++) {
		echo '<td><strong>' . date('F', mktime(0, 0, 0, $i, 0, 0, 0)) . '</strong></td>';
	}
}

function printYear($year)
{
	echo '<tr><td>' . date('Y', mktime(0, 0, 0, 0, 0, date('Y') - $year + 1, 0)) . '</td>';

}

function generateRandomExp()
{
	$randomExp = rand(0, 999);
	return $randomExp;
}