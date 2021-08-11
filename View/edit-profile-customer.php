  
<?php
    require_once'../Model/db_connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
  <?php include_once 'header.php' ?>
  <?php include_once ('../Controller/edit-profile-customer-check.php'); ?>
  <link rel="stylesheet" href="../style.css">
	<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 40%;
  margin-left: auto;
  margin-right: auto;

}
td, th {
  border: 0px solid #dddddd;
  text-align: left;
  padding: 8px;
}

</style>
</head>
<body>
 
 <div>
 	   <h3 class="title">My Profile</h3>
 </div>

 <table>
  <form action='../Controller/edit-profile-customer-check.php' method="POST">
  
  <tr>
      <td><b>Name</b></td>
    <td>
     <input type='text' name = 'name' value="<?php echo $_SESSION['name']; ?>" required/>
                            </td>
	
   
  </tr>
  <tr>
    <td><b>Username</b></td>
	 <td>
     <input type='text' name = 'uname' value="<?php echo $_SESSION['uname']; ?>" required/>
                            </td>

  </tr>
  <tr>
    <td><b>E-mail</b></td>
	 <td>
       <input type='email' name = 'email' value="<?php echo $_SESSION['email']; ?>" required/>
                            </td>
  </tr>
  <tr>
    <td><b>Gender</b></td>
<td>
    <input type='text' name = 'gender' value="<?php echo $_SESSION['gender']; ?>" required/>
                            </td>

  </tr>
  <tr>
    <td><b>Phone number</td>
	<td>
    <input type='text' name = 'phone' value="<?php echo $_SESSION['phone']; ?>" required/>
                            </td>

  </tr>
  <tr>
    <td><b>City</td>
<td>
  <input type='text' name = 'city' value="<?php echo $_SESSION['city']; ?>" required/>
                            </td>

  </tr>


       <tr>
           <td colspan="2">
              <center>
          <input type='submit' value="Submit">
               </center>
              </td>

  </tr>
</table>
<br>




  <?php include_once 'footer.php' ?>

</body>
</html>