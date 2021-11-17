<?php

require_once('connection.php');

if(isset($_POST['btn-save']))
{
    $Email = mysqli_real_escape_string($conn,$_POST['email']);
    $Phone = mysqli_real_escape_string($conn,$_POST['phone']);
    $City = mysqli_real_escape_string($conn,$_POST['city']);
    $Password = mysqli_real_escape_string($conn,$_POST['password']);

    if(empty($Email) || empty($Phone) || empty($City)|| empty($Password))
    {
        echo "<script>alert('Please Fill in the Blanks.')</script>";
    }  
    else
    {
        $sql = "INSERT INTO user (email,phone,city,password) VALUES ('$Email','$Phone','$City','$Password')";
        $result = mysqli_query($conn,$sql);

        if($result)
        {
            echo "<h2>Thank You. Proceed to login</h2>";
        }
        else
        {
            echo "<script>alert('woops! Something Went Wrong.')</script>";
        }
    }
    
}


?>