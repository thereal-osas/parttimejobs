<?php

require_once('connection.php');

if(isset($_POST['btn-save']))
{
    $Email = mysqli_real_escape_string($conn,$_POST['email']);
    $Password = mysqli_real_escape_string($conn,$_POST['password']);
    $City = mysqli_real_escape_string($conn,$_POST['city']);
    $Phone = mysqli_real_escape_string($conn,$_POST['phone']);

    if(empty($Email) || empty($Password) || empty($City)|| empty($Phone))
    {
        echo "<script>alert('Please Fill in the Blanks.')</script>";
    }  
    else
    {
        $sql = "INSERT INTO glovo (email,password,city,phone) VALUES ('$Email','$Password','$City','$Phone')";
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