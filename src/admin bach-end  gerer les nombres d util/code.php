<?php
session_start();
$connection=mysqli_connect("localhost","root","","registratio");

if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    if($password==$cpassword)
    { 
        $query = "INSERT INTO users (username,email,password) VALUES ('$username','$email','$password')";
        $query_run = mysqli_query($connection,$query);
    
        if($query_run)
        {
            //echo"saved";
            $_SESSION['success'] ="admin Profile Added";
            header('Location :register.php') ;
    
        }
        else
        {
            $_SESSION['status'] = "Admin Profile NOT added" ;
            header('Location:register.php') ;
    
        }


    }
    else
    {
        $_SESSION['status'] = "password and confirm password does Not MATCH " ;
            header('Location:register.php') ;
     
    }


   

}




?>