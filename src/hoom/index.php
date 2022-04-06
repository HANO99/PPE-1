<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ANNO - agence digitale</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/LOGO.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
 
</head>

<body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="assets/img/LOGO.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">ACCUEIL</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                       
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

   

  <!-- Masthead -->
  <header  class="masthead">
            <div class="container">
                <div classe ="masthead" >  </div>
                <div class="masthead-subheading"></div>
                <div class="masthead-heading text-uppercase">AGENCE DIGITALE ANNO</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">dis m'en plus</a>
                <div class="masthead-subheading">Pour être informé par Email de toute l'actualité, inscrivez-vous à notre newsletter. </div>
                <form>
                <input type="email" class="masthead-subheading"   placeholder="    ...Entrer votre Email...">
                
                <br>
                <a  class=" btn-primary btn-xl text-uppercase"  href="login.php">connecter vous </a>
                </form>
            </div>
        </header>



  <!-- Icons Grid -->
  <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Solutions</h2>
                    <h3 class="section-subheading text-muted">
Les avantages du site internet sont nombreux : Une espace dédié et personnalisé pour communiquer sur votre marque. La possibilité d'améliorer votre visibilité et de trouver de nouveaux clients. La possibilité de vendre en ligne sans perdre de temps.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Commerce</h4>
                        <p class="text-muted">Augmenter vos ventes et atteindre de nouveaux clients via une plateforme créative, innovante et parfaitement optimisée.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Sites Vitrines</h4>
                        <p class="text-muted">Améliorer et renforcer votre identité de marque grâce à un site responsive et unique qui vous distinguera de vos concurrents.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Landing Pages</h4>
                        <p class="text-muted">Créer une page web optimisée pour convertir vos visiteurs en clients.</p>
                    </div>
                </div>
            </div>
        </section>

       
  <!-- modifier produit -->
                  <?php
									$host = "localhost";
									$dbUsername = "root";
									$dbPassword = "";
									$dbName="registratio";
									$conn =  mysqli_connect($host, $dbUsername, $dbPassword, $dbName);
									if ($conn->connect_error) {
										die("Connection failed: " . $conn->connect_error);
							  	}else{
									$sql = "SELECT  description, photo,prix,id FROM ecomm";
							    $result = $conn->query($sql);
							
						   	    if ($result->num_rows > 0) {?>
								 
											<div class='row'>
												<?php
											  	while($row = $result->fetch_assoc()) {?>
														<div class="col-sm-3 m-5 " >
															<div class="card mb-4" style="width: 18rem;">
																<img src="<?php	echo "img/" . $row['photo'] ?>" class="card-img-top" alt="...">
																<div class="card-body">
																	<h5 class="card-title">Prix : <?php	echo $row["prix"] ?> €/moins</h5>
																	<p class="card-text"><?php	echo $row["description"] ?>.</p>
																	<a href="contact.php" class="btn btn-primary">    contactez nous   </a>	
																</div>
															</div> 
														</div>
													<?php
													}?>
											</div>
											<?php
									  } else {
												echo "0 results";
									  }
									    	$result->close();
								  }
									?>

  <!-- Call to Action -->
  
  <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Nos clients, nos projets</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2022</h4>
                                <h4 class="subheading">SITE WEB vitrine </h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"></p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4> 2022</h4>
                                <h4 class="subheading">site web dynamique PORTFOLIO</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"></p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2021</h4>
                                <h4 class="subheading">APPLICATION  VOTE</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"></p></div>
                        </div>
                    </li>
               
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                FAIRE PARTIE
                                <br />
                                DE NOTRE
                                <br />
                                HISTOIRE!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
 
 <!-- Contact-->
 <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2021</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/23406488heni"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/ben-ali-heni-620a921a7/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
  <!-- Bootstrap core JavaScript -->
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
