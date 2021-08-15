<?php
    require_once '../View/header.php';
    require_once ('../Model/db_connect.php');
    require_once ('../Model/model.php');

    if (isset($_GET['id']))
    {
        if(addToCart($_GET['id']))
        {
            echo "<h2>Order added!<h2>";
        }
        else echo "Failed to order.";
    }
    else header('location:../View/cart.php');
    
    require_once '../View/footer.php';
?>