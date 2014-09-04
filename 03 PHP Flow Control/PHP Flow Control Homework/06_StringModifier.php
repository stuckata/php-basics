<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>String Modifier</title>
	<style>
		body {
			font-size: 20px;
		}

		#submit {
			font-size: 20px;
		}

		#input {
			width: 200px;
		}
	</style>
</head>
<body>
<section>
	<form method="post" action="">
		<p><label for="input">Input String: </label><input type="text" name="input" id="input"
		                                                   autofocus="autofocus">
			<input type="radio" name="option" value="palindrome" id="palindrome_check" checked="checked"><label
				for="palindrome_check">Check
				Palindrome</label>
			<input type="radio" name="option" value="reverse" id="reverse_str"><label for="reverse_str">Reverse String
			</label>
			<input type="radio" name="option" value="split" id="split_str"><label for="split_str">Split
			</label>
			<input type="radio" name="option" value="hash" id="hash_str"><label for="hash_str">Hash String
			</label>
			<input type="radio" name="option" value="shuffle" id="shuffle_str"><label for="shuffle_str">Shuffle String
			</label>
			<input type="submit" name="submitButton" id="submit">
		</p>
	</form>
</section>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['input'])) {

	$str = $_POST['input'];

	switch ($_POST['option']) {
		case 'palindrome':
			checkIsPalindrome($str);
			break;
		case 'reverse':
			reverseStr($str);
			break;
		case 'split':
			splitStr($str);
			break;
		case 'hash':
			hashStr($str);
			break;
		case 'shuffle':
			shuffleStr($str);
			break;
	}
}

function checkIsPalindrome($str)
{
	$temp = trim($str, ' ');
	$temp = strtolower($temp);
	$strArr = str_split($temp);
	$isPalindrome = true;

	for ($i = 0; $i <= sizeof($strArr) / 2; $i++) {

		if ($strArr[$i] != $strArr[sizeof($strArr) - 1 - $i]) {
			$isPalindrome = false;
		}
	}

	if ($isPalindrome) {
		echo $str . ' is a Palindrome!';
	} else {
		echo $str . ' is not a Palindrome';
	}
}

function reverseStr($str)
{
	echo strrev($str);
}

function splitStr($str)
{
	$temp = trim($str, ' ');
	$strArr = str_split($temp);

	foreach ($strArr as $char) {
		echo $char . ' ';
	}
}

function hashStr($str)
{
	echo crypt($str, '$2y$10$Wqjkasd.HdsaTdfwe.AGD.tg$');
}

function shuffleStr($str)
{
	$strArr = str_split($str);
	shuffle($strArr);

	foreach ($strArr as $char) {
		echo $char;
	}
}
