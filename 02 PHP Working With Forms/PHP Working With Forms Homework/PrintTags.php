<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Print Tags</title>
</head>
<body>
<section>
	<p>Enter Tags:</p>

	<form method="post" action="">
		<input type="text" name="text_field" autofocus="autofocus">
		<input type="submit">
	</form>
	<p></p>
</section>
</body>
</html>

<?php

$input = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["text_field"])) {
	$input = $_POST["text_field"];
	$arrResult = explode(", ", $input);
	for($i = 0; $i < count($arrResult); $i++){
		echo "{$i} : {$arrResult[$i]} <br>";
	}
} else {
	echo 'You have to enter tags!';
}
