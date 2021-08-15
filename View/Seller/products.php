<?php  
require_once '../Controller/productInfo.php';

$products = fetchAllProducts();




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <?php 
    include_once ('./header.php');
    include_once ('../Model/model.php');
?>
</head>
<body>
<div>
 	   <h3 style="color: red; background-color: yellow;" align="center">Products</h3>
 </div>

<label for="Search">Live Search:</label><br>
 <input id="myInput" type="text" placeholder="Search">
<br><br>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div id="table-data">
          
      </div>
    </div>
  </div>
</div>


<!----------- 
   <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Buy Price</th>
            <th>Sell Price</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $i => $product): ?>
            <tr>
                <td><a href="showProduct.php?id=<?php echo $product['ID'] ?>"><?php echo $product['ID'] ?></a></td>
                <td><?php echo $product['Name'] ?></td>
                <td><?php echo $product['Buy_Price'] ?></td>
                <td><?php echo $product['Sell_Price'] ?></td>
                <td><img width="100px" src="../Upload/<?php echo $product['image'] ?>" alt="<?php echo $product['Name'] ?>"></td>
                <td><a href="editProduct.php?id=<?php echo $product['ID'] ?>">Edit</a>&nbsp<a href="../Controller/deleteProduct.php?id=<?php echo $product['ID'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
            </tr>
        <?php endforeach; ?>
        

    </tbody>
    

</table> ---------->

<script type="text/javascript">
        $(document).ready(function(){
            function loadData(page){
            $.ajax({
                url  : "../Controller/ajax_pagination.php",
                type : "POST",
                cache: false,
                data : {page_no:page},
                success:function(response){
                $("#table-data").html(response);
                }
            });
            }
            loadData();
            
            // Pagination code
            $(document).on("click", ".pagination li a", function(e){
            e.preventDefault();
            var pageId = $(this).attr("ID");
            loadData(pageId);
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

</body>
</html>


<?php 
    include ('./footer.php');
?>