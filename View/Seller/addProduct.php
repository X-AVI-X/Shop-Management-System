
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Add Products</title>
  

    <?php include_once ('./header.php');
    require_once '../Controller/createProduct.php';?>

</head>

<body>
    <center>


<div>
 	   <h3 style="color: red; background-color: yellow;" align="center">Add Products</h3>
 </div>

 <form method="POST" id="form">
  <label for="Name">Name:</label><br>
  <input type="text" id="Name" name="Name"><br>
  <label for="Buy_Price">Buy Price:</label><br>
  <input type="text" id="Buy_Price" name="Buy_Price"><br>
  <label for="Sell_Price">Sell Price:</label><br>
  <input type="text" id="Sell_Price" name="Sell_Price"><br>
  <input type="file" name="image"><br><br>
  <input type="submit" name = "createProduct" value="Create">
  <input type="reset"> 
</form> 

 <?php include 'footer.php' ?>
<script type="text/javascript" src = 'javascript/addProductScript.js'></script>
</center>
</body>
</html>




