<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>URL Replacer</title>
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
		<textarea name="input" id="txt_input" rows="4" cols="100" autofocus="autofocus"></textarea><br>
		<input type="submit" name="submit" value="Replace">
	</form>
	<br>
</section>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['input'])){

	$textFirstRep = str_replace('<a href="', '[URL=', $_POST['input']);
	$textSecondRep = str_replace('">', ']', $textFirstRep);
	$textResult = str_replace('</a>', '[/URL]', $textSecondRep);
	echo '<p>' . $textResult . '</p>';
}
