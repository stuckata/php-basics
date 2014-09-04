<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Word Mapper</title>
</head>
<body>
<section>
	<form method="post" action="">
		<p><textarea name="input" rows="4" cols="100" autofocus="autofocus"></textarea></p>
		<input type="submit" name="submit" value="Color text">
	</form>
	<br>
</section>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['input'])) {

	$text = $_POST['input'];
	$text = str_replace(' ', '', $text);
	$charArr = str_split($text, 1);

	foreach ($charArr as $char) {

		$charValue = ord($char);
		$isEven = checkOddEven($charValue);
		if ($isEven) {
			printEvenChar($char);
		} else {
			printOddChar($char);
		}
	}
}

function checkOddEven($charValue)
{

	if ($charValue % 2 == 0) {
		return true;
	} else {
		return false;
	}
}

function printEvenChar($char){

	echo '<span style="color: red; font-size: 30px;">' . $char . ' ' . '</span>';
}

function printOddChar($char){

	echo '<span style="color: blue; font-size: 30px;">' . $char . ' ' . '</span>';
}