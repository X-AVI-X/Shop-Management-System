<?php
	include_once "../Controller/header-check.php"
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../style.css">
	<title>E-shop.com</title>
</head>
<body>
	<div style="width: 100% ; background-color:white;">
		<div style="color:gray;"  align="center" >
			<h1>E-Shop.com</h1> <hr>
		</div>
		<fieldset>
			<div class="header"> 
				<a href="../View/home-seller.php">Home</a>
				<a href="../View/history-seller.php">History</a>
				<a href="../View/profile-seller.php">Profile</a>
			</div>

			<div class="searchbox">
				<?php include_once '../View/searchProduct.php' ?>
			</div>

			<div align="right">
				Welcome, <?php echo $_SESSION['name']?><a href="logout.php">|Log-out</a>
			</div>
		</fieldset>
	</div>
</body>
</html>
<?php echo "<br>"; ?>