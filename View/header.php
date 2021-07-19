<?php
	include_once "../Controller/header-check.php"
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>header</title>
</head>
<body>
	<div style="width: 100% ; background-color:white;">
		<div style="color:gray;"  align="center" >
			<h1>E-Shop.com</h1> <hr>
		</div>
		<fieldset>
			<div style="padding-left: 12px;  margin: 2px;"> 
				<a href="../View/home.php">Home</a>
				<a href="../View/history.php">History</a>
				<a href="../View/profile.php">Profile</a>
			</div>

			<div align="right" style="padding-bottom:  15px;">
				<?php include_once '../View/search-product.php' ?>
			</div>

			<div align="right">
				Welcome <?php echo $_SESSION['name']?><a href="logout.php">|Log-out</a>
			</div>
		</fieldset>
	</div>
</body>
</html>