<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../style.css">
	<title>Order Products</title>

	 <?php include_once ('./header.php');
    require_once '../Controller/order-check.php';
    require_once('../Model/db_connect.php');
    require_once('../Model/model.php');
    require_once('../Model/mysqli-model.php');
    require_once('../Model/connection.php');
    ?>
</head>
<body>
    <center>


<div>
 	   <h3 style="color: red; background-color: yellow;" align="center">Order Products</h3>
 </div>

 <div  class = "container mt-5">

 <div class = "row">
    <div class = "col-lg-12">
<table class="table">
  <thead>
    <tr>
        <tr>
      <th scope="col">User Name</th><br>
      <th scope="col">Order id</th>
      <th scope="col">Price</th>
      <th scope="col">image</th>
      <th scope="col">Quantity</th>
    </tr>
</tr>
  </thead>
  <tbody>
    <?php
    $query="SELECT * FROM 'cart'";
    $user_result=mysqli_query($con,$query);
    while($user_fetch=mysqli_fetch_assoc($user_result))
    {

        echo"
     <tr>
      <td>$user_fetch[uname]</td>
      <td>$user_fetch[pid]</td>
      <td>$user_fetch[Price]</td>
      <td>$user_fetch[quantity]</td>
    </tr>
    ";

    }

    $order_query="SELECT * FROM 'orders' WHERE'Order id'=$user_fetch[pid]'";
    $order_result=mysqli_query($con,$order_query);

   ?>
  </tbody>
</table>

    </div>

</div>
 </div>
 </center>

 <?php include_once ('./footer.php');?>
</body>