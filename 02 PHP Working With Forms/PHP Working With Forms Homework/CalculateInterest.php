<?php

$amount = 0;
$currency = '';
$interestPerMonth = 0;
$period = 0;
$result = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST["amount"]) && !empty($_POST["interest"]) && isset($_POST["currency"])) {

	$amount = $_POST['amount'];

	$interestPerMonth = (($_POST['interest'] / 12 + 100) / 100);

	$period = $_POST['months'];

	for ($p = 1; $p <= $period; $p++) {
		$amount *= $interestPerMonth;
	}

	$amount = round($amount, 2);

	switch ($_POST['currency']) {
		case 'usd':
			$currency = '$';
			$result = $currency . " " . $amount;
			break;
		case 'eur':
			$currency = '€';
			$result = $currency . " " . $amount;
			break;
		case 'bgn':
			$currency = 'lv';
			$result = $amount . " " . $currency;
			break;
	}

	echo $result;
} else {
	echo "You have to enter additional data!";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculate Interest</title>
</head>
<body>
<section>
	<form method="post" action="">
		<p><label for="amount">Enter Amount </label><input type="text" id="amount" name="amount"
		                                                   autofocus="autofocus"><br>
			<input type="radio" name="currency" id="usd_curr" value="usd"><label for="usd">USD</label>
			<input type="radio" name="currency" id="eur_curr" value="eur"><label for="eur">EUR</label>
			<input type="radio" name="currency" id="bgn_curr" value="bgn"><label for="bgn">BGN</label><br>
			<label for="interest">Compound Interest Amount </label><input type="text" id="interest" name="interest"><br>
			<select name="months" id="period_select">
				<option value="6">6 Months</option>
				<option value="12">1 Year</option>
				<option value="24">2 Years</option>
				<option value="60">5 Years</option>
			</select>
			<input type="submit" value="Calculate">
		</p>
	</form>
</section>
</body>
</html>


