<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sidebar Builder</title>
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
		<p><label for="categories_input">Categories: </label><input type="text" name="categories"
		                                                            id="categories_input"
		                                                            autofocus="autofocus"></p>

		<p><label for="tags_input">Tags: </label><input type="text" name="tags" id="tags_input"></p>

		<p><label for="months_input">Months: </label><input type="text" name="months" id="months_input"></p>

		<p><input type="submit" name="submit" value="Generate" id="submit_button"></p>
	</form>
	<br>
</section>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['categories']) && !empty($_POST['tags']) && !empty($_POST['months'])) {

	$namesArr = array('Categories', 'Tags', 'Months');
	$categoriesArr = explode(', ', $_POST['categories']);
	$tagsArr = explode(', ', $_POST['tags']);
	$monthsArr = explode(', ', $_POST['months']);
	$sidebarsArr = array($categoriesArr, $tagsArr, $monthsArr);

	echo '<aside style="background">';

	for ($i = 0; $i < count($namesArr); $i++) {
		generateSidebar($namesArr[$i], $sidebarsArr[$i]);
	}

	echo '</aside>';
}

function generateSidebar($name, $sidebarArr)
{
	echo '<nav style="width: 200px; background-color: lightblue; padding-left: 20px; border: 1px solid black;
	border-radius: 20px; margin: 10px;"><h1 style="margin-bottom:0px;
	padding-bottom:0px;">' . $name .
		'</h1><br>';
	echo '<hr noshade style="margin-bottom: 0px; margin-top: 0px; height: 2px; color: black;">';
	echo '<ul style="padding: 20px;">';

	foreach ($sidebarArr as $element) {
		echo '<li><a href="/">' . $element . '</a></li>';
	}

	echo '</ul></nav>';
}


