<?php
	require_once('./php/dbconnect.php');
	session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<title>Status</title>

	<link rel="shortcut icon" href="./image/delivery.ico" rel="icon" type="image/x-icon" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		body {
			background-color: #C0C0C0;
		}

		.btn {
			cursor: pointer;
			float: right;
			overflow: auto;
			font-size: 20px;
			font-family: Arial, Helvetica, sans-serif;
		}

		.right j {
			display: block;
			color: #5E6977;
			padding: 15px 15px;
		}

		.btn:hover {
			background-color: #ddd;
			color: black;
		}

		.title {
			height: 60px;
			border-bottom: 1px solid #E1E8EE;
			margin-top: 20px;
			padding: 20px 30px;
			color: #5E6977;
			font-size: 30px;
			font-weight: 400;
		}

		.status {
			position: absolute;
			top: 180px;
			left: 2;
		}

		/* img
	{ 
		width: 30%;
		height: auto;
	}

	.container1
	{
  		position: relative;
		position: absolute;
		bottom: 8px;
		left: 16px;
		font-size: 18px;
	}

	.container2
	{
  		position: relative;
		position: absolute;
		bottom: 8px;
		left: 16px;
	}

	.container3
	{
  		position: relative;
		position: absolute;
		right: 0px;
		bottom: 0px;
	}

	.container1 p
	{
		font-style:italic;
		text-align: center;
	} */

		#wcu h2 {
			margin: auto;
			width: 33.33%;
			text-shadow: #eeccff 2px 1px;
			text-align: center;
			padding: 3px;
			font-size: 14pt;
			font-family: Bungee Inline;
			font-weight: bold;
			margin-top: 350px;
		}

		#delivery-name h1 {
			font-family: "OCR A Extended", monospace;
			margin-top: 2px;
			font-size: 18pt;
			font-weight: bold;
			font-style: italic;
		}


		#delivery-image img {
			margin-top: 10px;
			width: 250px;
			height: 200px;
		}

		#delivery td {
			width: 300px;
		}
	</style>
</head>

<body>
	<div class="title">
		Order Status
	</div>
	<div class="right">
		<button class="btn" onclick="window.location.href='index.php'">
			<j class="fa fa-home"> HOME</j>
		</button>
	</div>
	<div class="status">
		<?php
		if (isset($_SESSION['logged']) && $_SESSION['logged'] == 1) { //check login
            $userid = $_SESSION['id'];
        }

		$sql = "SELECT * from delivery ORDER BY userid";
		$result = mysqli_query($con, $sql);
		while ($row = mysqli_fetch_assoc($result)) {
			echo '<span>Delivery ID &nbsp &nbsp &nbsp &nbsp &nbsp: '.$row["delivery_id"].'</span>';
			// echo '<p>Delivery ID : '.$row["cart_qty"].','.$row["food_id"].','.$row["user_id"].'</p>';
		}
		?>
		<p>Delivery Time &nbsp &nbsp &nbsp: </p>
		<p>Delivery Date &nbsp &nbsp &nbsp: </p>
		<p>Delivery Status &nbsp &nbsp: </p>
		<p>Delivery Address : <br><textarea name="address" placeholder="Please enter your dellivery address here" rows="5" cols="30"></textarea></p>
	</div>
	<!-- <div class="container1">
		<p>Why choose us?</p>
		<p>Fast Delivery</p>
		<p>Delivery in Time</p>
		<p>Responsibility Rider</p>
		<img src="delivery1.jpg" alt="" width="300" height="300">
	</div>
	<div class="container2">
		<img src="delivery2.jpg" alt="" width="300" height="300">
	</div>
	<div class="container3">
		<img src="delivery3.jpeg" alt="" width="300" height="300">
	</div> -->
	<div id="wcu">
		<h2>Why choose us?</h2>
	</div>

	<table id="delivery" align="center" cellpadding="15px" cellspacing="20px">
		<tr>
			<td>
				<div id="delivery-name">
					<h1>Fast Delivery</h1>
				</div>
				<div id="delivery-image"><img src="./image/delivery1.jpg"></div>
				<br />
				<br />
			</td>

			<td>
				<div id="delivery-name">
					<h1>Delivery in Time</h1>
				</div>
				<div id="delivery-image"><img src="./image/delivery2.jpg"></div>
				<br />
				<br />
			</td>

			<td>
				<div id="delivery-name">
					<h1>Responsibility Rider</h1>
				</div>
				<div id="delivery-image"><img src="./image/delivery3.jpeg"></div>
				<br />
				<br />
			</td>
		</tr>
	</table>
</body>

</html>