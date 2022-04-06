<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
 
</head>
<body id="page-top">










<!-- Contact-->
<section class="page-section" >
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
               
                <form action="contact.php" method="post"   id="contactForm" >
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" name="name" type="text"value="" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" name="email" type="text"value="" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" name="tel" type="text"value="" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" name="message"value=""type="text" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                   
                    <!-- Submit Button-->
                    <div class="text-center"><button name="submit" class="submit"  type="Insert">Send Message</button></div>
                    <?php
               

               $connection = mysqli_connect("localhost", "root", "");
               
                   //Selecting Database from Server
                   $db = mysqli_select_db( $connection, "registratio");
                   if(isset($_POST['submit'])){
                  
                   //Fetching variables of the form which travels in URL
                   
                   $name=$_POST['name'];
                   $email = $_POST['email'];
                   $tel = $_POST['tel'];
                   $message = $_POST['message'];
                   if($name !=''||$email !=''){
                   //Insert Query of SQL
                   $query = mysqli_query($connection, "insert into contact(name-c, email-c, tel-c, message-c) values ('$name', '$email', '$tel', '$message')");
                   echo "<br/><br/><span>Data Inserted successfully...!!</span>";
                   }
                   else{
                   echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";   
                   }
                
                   }
                   //Closing Connection with Server
                   mysqli_close($connection);
               ?>					
                </form>
            </div>
        </section>
         <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>