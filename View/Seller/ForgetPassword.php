<!DOCTYPE html>
<html>
<head>
	    <style>
.error {color: red;}
.success {color: green;}
</style>
	<title>Forgetpassword</title>

    <?php include_once 'h1.php' ?>
    <?php include_once '../Controller/forgetpass-check.php' ?>
</head>
<body>
	<fieldset>
		<legend><h3>Forget password</h3></legend>
		<form method="post">
			
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" value="<?php echo $email;?>">
  <span class="error">*<?php echo $emailErr;?></span>
		<br><br>
	
		
		<label for="password">Password: </label>
		<input type="password" id="password" name="password" valu="<?php echo $password;?>"required>
		<span class="error">*<?php echo $passwordErr;?> </span>
		<br><br>
		<label for="cpassword">Confirm Password: </label>
		<input type="password" id="cpassword" name="cpassword" valu="<?php echo $cpassword;?>"required>
		<span class="error">*<?php echo $cpasswordErr;?> </span>
		<br><br>

            <input type="submit" name="submit" value="Submit"><a href="home-seller.php">Sign in</a>
		</form> 
	</fieldset>
	<?php include_once 'footer.php' ?>

</body>
</html>