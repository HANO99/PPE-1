
<?php
 
 session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="css/contact.css">
   <title>Document</title>
</head>
<body>
    <div class="container my-5 py-5">
         <a href="dashbord.php"><h1 class="text-center mt-3 text-secondary">Click back to the dashbord</h1></a>
         <h1 class="text-center mt-3 text-secondary">LOG IN</h1>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" class="controle-form" method="post">
        
            <input type="text" name="email" placeholder="Type your Email"class="form-control" required>
            <i class="fas fa-envelope-open-text"></i>
            <input type="text" name="password" placeholder="Type your password" class="form-control" required>
            <i class="fas fa-key"></i>
            <input type="submit"  class="btn btn-primary btn-block" name="submit" value="Valid">
            <i class="fas fa-paper-plane "></i>
        </form>
       
    </div>
    <?php
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName="registratio";
    $db =  mysqli_connect($host, $dbUsername, $dbPassword, $dbName);
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myemail = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM logex WHERE email = '$myemail' and passw = '$mypassword'";
      $result = mysqli_query($db,$sql);
   
      $count = mysqli_num_rows($result);
      
      // If result matched $myemail and $mypassword, table row must be 1 row
		echo $count;
      if($count == true) {
        
         $_SESSION['login_user'] = $myemail;
         
         header("location: dashbord.php");
      }else{
        header("location:log-in.php");
        die();
       
     }
   }

  
  
   
   
?>

<!-- boostrap cdn -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


     
   

</body>
</html>