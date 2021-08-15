



<?php
session_start();

if(isset($_SESSION['username'])){


}
else{

    header('location: ../controller/login.php');
}

?>





<?php


  require_once 'readData.php';
  $products = fetchAllProducts();
  //$count=0;

?>

<!DOCTYPE html>
<html>


<?php


include('../header2.php');


?>

<style>
table, th, td {
  border: 2px solid black;
  
}

th, td {
    padding: 8px;
}

</style>

<body>


<div align="center">
    
<br><br>Search <input type="text" name="search" id="search"><br><br>

<table id ="productTable" style="width: 100" align="center">
  <thead>
    <tr>
      <th>Product ID</th>
      <th>Product Name</th>
      <th>Buy Price</th>
      <th>Sell Price</th>
      <th>Image</th>
    </tr>
  </thead>

  <tbody>
    <?php foreach ($products as $i => $data): ?>
      <tr>
        <td><?php echo $data['ID'] ?></td>
        <td><?php echo $data['Name'] ?></td>
        <td><?php echo $data['Buy_Price'] ?></td>
        <td><?php echo $data['Sell_Price'] ?></td>
        <td><?php echo $data['image'] ?></td>
      </tr>
    <?php endforeach; ?>
    

  </tbody>





</table>



</div>



<script type="text/javascript">
  




  
</script>



</body>


<?php


include('../footer.php');


?>

</html>