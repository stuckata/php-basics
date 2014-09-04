<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Text Filter</title>
	<style>
		body {
			font-size: 20px;
		}

		input[type="text"] {
			width: 300px;
			height: 20px;
		}

		input[type="submit"] {
			font-size: 20px;
		}
	</style>
</head>
<body>
<section>
	<form method="post" action="">
		<span>Enter text:</span><br>
		<textarea name="input" id="txt_input" rows="4"
		          cols="100"
		          autofocus="autofocus"></textarea></p>

		<p><label for="banned_words">Enter words to be banned: </label><input type="text" id="banned_words"
		                                                                      name="bannedWords">
			<input type="submit" name="submit" value="Filter words"></p>
	</form>
	<br>
</section>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['input']) && !empty($_POST['bannedWords'])) {

	$inputTxt = $_POST['input'];
	$bannedWordsArr = explode(', ', $_POST['bannedWords']);

	foreach ($bannedWordsArr as $word) {

		$asterisks = printAsterisk($word);
		$inputTxt = str_replace($word, $asterisks, $inputTxt);
	}

	echo $inputTxt;
}

function printAsterisk($word)
{

	$asterisks = '';

	for ($i = 0; $i < strlen($word); $i++) {
		$asterisks = $asterisks . '*';
	}

	return $asterisks;
}
