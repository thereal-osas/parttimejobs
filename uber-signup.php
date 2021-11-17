<?php

require_once('connection.php');

if(isset($_POST['btn-save']))
{
    $firstName = mysqli_real_escape_string($conn,$_POST['firstname']);
    $lastName = mysqli_real_escape_string($conn,$_POST['lastname']);
    $Email = mysqli_real_escape_string($conn,$_POST['email']);
    $Password = mysqli_real_escape_string($conn,$_POST['password']);
    $Phone = mysqli_real_escape_string($conn,$_POST['phone']);
    $City = mysqli_real_escape_string($conn,$_POST['city']);
    

    if(empty($firstName) || empty($lastName) || empty($Email) || empty($Password) || empty($Phone) || empty($City))
    {
        echo "<script>alert('Please Fill in the Blanks.')</script>";
    }  
    else
    {
        $sql = "INSERT INTO uber (firstname,lastname,email,password,phone,city) VALUES ('$firstName','$lastName','$Email','$Password','$Phone','$City')";
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