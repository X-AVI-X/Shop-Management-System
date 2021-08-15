<?php
require_once ('../Model/model.php');
$emailErr = $passwordErr = $cpasswordErr = $error = "";
$email  = $password = $cpassword = $success = "";

if (isset($_POST['submit'])) {
 if (empty($_POST["email"])) 
    {
        $emailErr = "Email is required";
    } 
    else 
    {
        $email = $_POST["email"];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
            $emailErr = "Invalid email format";
            $email ="";
        }
    }
     if (empty($_POST["password"])) 
    {
        $passwordErr = "Password is required";
    } 
    else 
    {
        $password = $_POST["password"];
        if (strlen($password) >= 8) 
        {
        }
        else
        {
            $passwordErr = "Password  must contain atleast 8 charecters";
            $password = "";
        }
    }

    if (empty($_POST["cpassword"])) 
    {
        $cpasswordErr = "Confirm password is required";
    } 
    else 
    {
        $cpassword = $_POST["cpassword"];
        if ($cpassword == $password) 
        {
        }
        else
        {
            $cpasswordErr = "Password and confirm passward did not match";
            $password = "";
            $cpassword= "";
        }
    }

    if (empty($email) || empty($password) || empty($cpassword))
    {

    }
    else
    {
        if(forgetPass($email, md5($password)))
        {
            echo "<h3> Password reset successfully! </h3";
        }
    }
    

}
?>