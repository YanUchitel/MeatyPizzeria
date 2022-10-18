<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Big daddy's Meaty Pizza</title>
	<link rel="stylesheet" href="css/styles.css" type="text/css" />
</head>

<body>
	<header>
		<img src="images/big.png" alt="The logo for big daddy's pizza, with big daddy giving a thumbs up" width="310.5" height="246.75">
	</header>
	<main>
		<h2>Your order is complete and was sent to our kitchen!</h2>
		<div><b>Order details:</b><br><br></div>
		<?php

		// assigning pizza variables
		$pizzaNum = $_GET['pizzaNum'];
		$customPizzaNum = $_GET['customPizzaNum'];
		$pizzaSize = $_GET['pizzaSize'];
		$pizzaShape = $_GET['pizzaShape'];

		// checks if the topping array is full or not, if full assigns to a variable
		if (isset($_GET['topingsLeft'])) {
			$pizzaToppingsLeft = $_GET['topingsLeft'];
		}
		if (isset($_GET['topingsRight'])) {
			$pizzaToppingsRight = $_GET['topingsRight'];
		}
		if (isset($_GET['topingsWhole'])) {
			$pizzaToppingsAll = $_GET['topingsWhole'];
		}

		$pizzaCrust = $_GET['pizzaCrust'];
		$deliveryType = $_GET['delivery'];

		// order options
		$adress = $_GET['streetName'];
		$aptNum = $_GET['aptNum'];
		$zipCode = $_GET['zipcode'];
		$province = $_GET['province'];
		$name = $_GET['fullName'];
		$phoneNum = $_GET['telephone'];
		$email = $_GET['email'];
		$deliveryInstructions = $_GET['dInstructions'];


		if($pizzaNum == 'custom'){
			echo('Number of pizzas: ' . $customPizzaNum . "<br>");
		}
		else{
			echo ('Number of pizzas: ' . $pizzaNum . "<br>");
		}
		echo ('Size of the pizza: ' . $pizzaSize . '<br>
			In the shape of a ' . $pizzaShape . '.');

		if (isset($_GET['topingsLeft'])) {
			echo ('<br>Toppings on the left:');
			foreach ($pizzaToppingsLeft as $l) {
				echo ($l . " ");
			}
		}

		if (isset($_GET['topingsRight'])) {
			echo ('<br>Toppings on the right: ');
			foreach ($pizzaToppingsRight as $r) {
				echo ($r . " ");
			}
		}

		if (isset($_GET['topingsWhole'])) {
			echo ('<br>Toppings on the entire pizza: ');
			foreach ($pizzaToppingsAll as $w) {
				echo ($w . " ");
			}
		}

		echo ('<br>Your chosen crust is: ' . $pizzaCrust . '<br>And your delivery type is: ' . $deliveryType);

		echo ('<br>The order will be sent to ' . $adress . ', and we will contact you on: ' . $phoneNum);

		?>
	</main>
	<footer>
		<p><small>©Big Daddy Inc. All rights reserved</small></p>
	</footer>
</body>

</html>