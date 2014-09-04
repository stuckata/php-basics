<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Square Root Sum</title>
	<style>
		table, tr, td {
			border:1px solid black
		}
	</style>
</head>
<body>
<section>
	<table>
		<tr>
			<td><strong>Number</strong></td>
			<td><strong>Square</strong></td>
		</tr>

		<?php

		$total = 0;

		for ($cell = 0; $cell <= 100; $cell += 2) {
			echo '<tr>';
			echo '<td>' . $cell . '</td>';
			$squareRoot = round(sqrt($cell), 2);
			echo '<td>' . $squareRoot . '</td>';
			echo '</tr>';
			$total +=$squareRoot;
		}

		echo '<tr><td><strong>Total:</strong></td><td>' . $total .'</td></tr>';

		?>

	</table>
</section>
</body>
</html>
