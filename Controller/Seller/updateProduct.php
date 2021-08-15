<?php  
require_once '../Model/model.php';


if (isset($_POST['updateProduct'])) {
	$data['Name'] = $_POST['Name'];
	$data['Buy_Price'] = $_POST['Buy_Price'];
	$data['Sell_Price'] = $_POST['Sell_Price'];
	// $data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);;
	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../uploads";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);


  if (updateProduct($_POST['id'], $data)) {
  	echo 'Successfully updated!!';
  	//redirect to showStudent
  	header('Location: ../View/showProduct.php?id=' . $_POST["id"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>