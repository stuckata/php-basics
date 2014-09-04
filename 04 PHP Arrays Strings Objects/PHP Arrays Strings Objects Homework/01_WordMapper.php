<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Word Mapper</title>
	<style>
		table, tr, td {
			border: 1px solid black;
			background-color: lightgray;
		}
	</style>
</head>
<body>
<section>
	<form method="post" action="">
		<p><textarea name="input" rows="4" cols="100" autofocus="autofocus"></textarea></p>
		<input type="submit" name="submit" value="Count words">
	</form>
	<br>
</section>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['input'])) {

	$text = $_POST['input'];
	$text = strtolower($text);
	$wordsArr = preg_split('/[^A-Za-z]+/', trim($text), -1, PREG_SPLIT_NO_EMPTY);
	$resultArr = array();

	foreach ($wordsArr as $word) {
		if (array_key_exists($word, $resultArr)) {
			$resultArr[$word]++;
		} else {
			$resultArr[$word] = 1;
		}
	}

	echo '<table>';

	foreach ($resultArr as $word => $value) {
		echo '<tr><td>' . $word . '</td><td>' . $value . '</td></tr>';
	}

	echo '</table>';
}

