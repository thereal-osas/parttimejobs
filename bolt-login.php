<?php 

require_once('connection.php');

if(isset($_POST['btn-login'])){
    $Email = $_POST['email'];
    $Pass = $_POST['password'];

    if(empty($Email) || empty($Pass)){
        echo 'Please Fill in the Blanks';
    }
    else{
        $query = "SELECT * FROM user WHERE email='$Email'";
        $result = mysqli_query($conn,$query);

        if($row=mysqli_fetch_assoc($result))
        {
            $db_password = $row['password'];

            if($Pass == $db_password){
                echo 'thank you!';
            }
            else
            {
                echo "<script>alert('Incorrect Password.')</script>";
            }
        }
        else
        {
            echo "<script>alert('woops! Something Went Went.')</script>";
        }
    }
}







?>