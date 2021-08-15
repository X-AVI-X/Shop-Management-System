<?php  
require_once '../Model/model.php';


if (isset($_POST['createProduct'])) {
	$data['Name'] = $_POST['Name'];
	$data['Buy_Price'] = $_POST['Buy_Price'];
	$data['Sell_Price'] = $_POST['Sell_Price'];

	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../uploads/";
	$target_file = $target_dir.basename($_FILES["image"]["name"]);

	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ".basename( $_FILES["image"]["name"]). " has been uploaded.";
  } 



  if (addProduct($data)) {
  	echo 'Successfully added!!';
  }
} 



?>