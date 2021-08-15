<?php
    require_once '../View/header.php';
    require_once ('../Model/model.php');

    if (isset($_GET['id']))
    {
        if(removeFromCart($_GET['id']))
        {
            echo "<h2>Failed to remove from order.<h2>";
        }
        else {
            echo "<h2>Removed from order.<h2>";
            header('location:../View/cart.php');
        }
    }
    //else header('location:../View/cart.php');
    
    require_once '../View/footer.php';
?>