<?php 

require_once('connection.php');

if(isset($_POST['btn-login'])){
    $Email = $_POST['email'];
    $Password = $_POST['password'];

    if(empty($Email) || empty($Password)){
        echo 'Please Fill in the Blanks';
    }
    else{
        $query = "SELECT * FROM uber WHERE email='$Email'";
        $result = mysqli_query($conn,$query);

        if($row=mysqli_fetch_assoc($result))
        {
            $db_password = $row['password'];

            if($Password == $db_password){
                echo 'bithch!!';
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