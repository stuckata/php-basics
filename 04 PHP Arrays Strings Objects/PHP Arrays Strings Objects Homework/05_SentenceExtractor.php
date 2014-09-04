<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sentence Extractor</title>
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
		          autofocus="autofocus"></textarea>

		<p><label for="wordToExtract">Enter word: </label><input type="text" id="wordToExtract"
		                                                         name="word">
			<input type="submit" name="submit" value="Extract"></p>
	</form>
	<br>
</section>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['input']) && !empty($_POST['word'])) {

	$sentencesArr = preg_split('/(?<=[.?!])\s+/', $_POST['input'], -1, PREG_SPLIT_DELIM_CAPTURE);
	$word = $_POST['word'];

	printResult($sentencesArr, $word);
}

function printResult($sentencesArr, $word)
{
	foreach ($sentencesArr as $sentence) {

		$wordsArr = explode(' ', $sentence);
		$charsArr = str_split($sentence);

		if (in_array($word, $wordsArr) || in_array($word . '.', $wordsArr) || in_array($word . '?', $wordsArr) || in_array($word . '!', $wordsArr)) {
			if (in_array('.', $charsArr) || in_array('!', $charsArr) || in_array('?', $charsArr)) {
				echo $sentence . '<br>';
			}
		}
	}
}
