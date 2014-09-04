<?php
session_start();
?>

	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>HTML Tags Counter</title>
	</head>
	<body>
	<section>
		<p>Enter HTML Tags:</p>

		<form method="post" action="">
			<p><input type="text" name="text_field" autofocus="autofocus">
				<input type="submit" name="submit"></p>
		</form>
	</section>
	</body>
	</html>



<?php

$tagsArray = array("!--...--", "!DOCTYPE", "a", "abbr", "acronym", "address", "applet", "area", "article", "aside", "audio", "b", "base", "basefont", "bdi", "bdo", "bgsound", "big", "blink", "blockquote", "body", "br", "button", "canvas", "caption", "center", "cite", "code", "col", "colgroup", "content", "data", "datalist", "dd", "decorator", "del", "details", "dfn", "dialog", "dir", "div", "dl", "dt", "element", "em", "embed", "fieldset", "figcaption", "figure", "font", "footer", "form", "frame", "frameset", "h1", "h2", "h3", "h4", "h5", "h6", "head", "header", "hgroup", "hr", "html", "i", "iframe", "img", "input", "ins", "isindex", "kbd", "keygen", "label", "legend", "li", "link", "listing", "main", "map", "mark", "marquee", "menu", "menuitem", "meta", "meter", "nav", "nobr", "noframes", "noscript", "object", "ol", "optgroup", "option", "output", "p", "param", "picture", "plaintext", "pre", "progress", "q", "rp", "rt", "ruby", "s", "samp", "script", "section", "select", "shadow", "small", "source", "spacer", "span", "strike", "strong", "style", "sub", "summary", "sup", "table", "tbody", "td", "template", "textarea", "tfoot", "th", "thead", "time", "title", "tr", "track", "tt", "u", "ul", "var", "video", "wbr", "xmp");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['text_field'])) {

	$input = $_POST['text_field'];

	if (in_array($input, $tagsArray)) {

		if (isset($_SESSION['score'])) {
			$_SESSION['score']++;
		} else {
			$_SESSION['score'] = 1;
		}

		echo '<p><h1>Valid HTML Tag!<br>Score: ' . $_SESSION['score'] . '</h1></p>';

	} else {
		echo '<p><h1>Invalid HTML Tag!<br>Score: ' . $_SESSION['score'] . '</h1></p>';
	}

} else {
	echo '<p><h1>No Tag is Entered!</h1></p>';
}


