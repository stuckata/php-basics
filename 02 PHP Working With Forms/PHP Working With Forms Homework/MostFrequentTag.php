<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Most Frequent Tags</title>
</head>
<body>
<section>
	<p>Enter Tags:</p>

	<form method="post" action="">
		<p><input type="text" name="text_field" autofocus="autofocus">
			<input type="submit"></p>
	</form>

</section>
</body>
</html>

<?php

$input = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["text_field"])) {

	$input = $_POST["text_field"];
	$inputArr = explode(", ", $input);
	$resultArr = array();

	for ($i = 0; $i < count($inputArr); $i++) {
		if (array_key_exists($inputArr[$i], $resultArr)) {
			$resultArr[$inputArr[$i]]++;
		} else {
			$resultArr[$inputArr[$i]] = 1;
		}
	}

	arsort($resultArr);

	foreach ($resultArr as $word => $wordValue) {
		echo "{$word} : {$wordValue} times";
		echo '<br>';
	}

	$allKeys = array_keys($resultArr);

	echo '<p>';
	echo "Most Frequent Tag is: ";
	echo $allKeys[0];
	echo '</p >';

} else {
	echo 'You have to enter tags!';
}

