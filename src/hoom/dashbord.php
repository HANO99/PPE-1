<?php
session_start();
// script delete from data base
$host = "localhost";
									$dbUsername = "root";
									$dbPassword = "";
									$dbName="registratio";
									$conn =  mysqli_connect($host, $dbUsername, $dbPassword, $dbName);
	// take the get methode from the bookle while 
if($_SERVER['REQUEST_METHOD'] == "GET"){
		if(isset($_GET['id'])){
			// we get the id from <a href="dashbord.php?id= <?php $row['id'];"> line presque 125
			$GLOBALS['id'] = (int)($_GET['id']); 
				$delete = "DELETE FROM ecomm WHERE id= $id ";
					if (mysqli_query($conn, $delete)) {
					echo "Record deleted successfully";
					} else {
						echo "Error deleting record: " . mysqli_error($conn);
					}
						mysqli_close($conn);
		}	
}

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Bootstrap v4 Dashboard Offcanvas</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://unpkg.com/js-offcanvas@1.2.0/dist/_css/prefixed/js-offcanvas.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
  <link rel="stylesheet" href="css/dashbord.css">
</head>
<body>
  	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
				
				<div class="collapse navbar-collapse" id="navbarsExampleDefault" data-set="bs">
					<ul class="navbar-nav mr-auto js-append-around">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
						</li>
					</ul>
					<form class="form-inline my-2 my-lg-0 js-append-around">
						<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>
				</div>
		</nav>
		<div class="">
			<div class="c-offcanvas-content-wrap">
				<div class="container-fluid">
					<div class="row">
						<nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar" data-set="bs-sidebar">
							<div class="js-append-around">
								<ul class="nav nav-pills flex-column">
									<li class="nav-item">
										<a class="nav-link active" href="#">Overview <span class="sr-only">(current)</span></a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="confingDashbord/addproject.php">Add product</a>
									</li>
								</ul>

							</div>
						</nav>

						<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
							<div class="row">
								<div class="col-sm-7">
									<h1>Dashboard</h1>
								</div>
								
									<div class="col-sm-5 mx-auto">
										<div class="row">
									   	<a href="logout-config.php"class="mr-4	text-dark"><div class="btn btn-outline-success">Log out</div></a>
											<img src="https://img.icons8.com/dusk/34/000000/admin-settings-male.png">
											<?php if(isset($_SESSION["login_user"])){echo $_SESSION['login_user'];}?>
										</div>	
								  </div>
					    </div>
									<?php
									// coonect with data base to show the result 
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
												// bookle while for show the data in dashbord 
											  	while($row = $result->fetch_assoc()) {?>
														<div class="col-sm-4 mb-4 pb-5">
															<div class="card mb-4" style="width: 18rem;">
																<img src="<?php	echo "img/" . $row['photo'] ?>" class="card-img-top" alt="...">
																<div class="card-body">
																	<h5 class="card-title">Prix : <?php	echo $row["prix"] ?> USD</h5>
																	<p class="card-text"><?php	echo $row["description"] ?>.</p>
																	<a href="#" class="btn btn-primary">Buy now</a>
																	<!-- btn to delete from data base -->
																	<div class="btn btn-outline-danger"><a href="dashbord.php?id=<?=$row['id']; ?>"> delete</a></div>	
																	<!-- btn to update data from data base  -->
																	<div class="btn btn-outline-success"><a href="confingDashbord/update.php?id=<?=$row['id']; ?>"> update</a></div>	
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
						</main>
					</div>
				</div>
			</div>
		</div>
		<div class="c-offcanvas is-hidden" id="right">
			<div class="navbar">
				<button type="button" class="btn btn-block btn-outline-dark js-offcanvas-close">Close</button>
				<div class="input-group mt-3">
					<input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
					<span class="input-group-btn">
					<button class="btn btn-secondary" type="button">Go!</button>
				  </span>
				</div>
				<!-- container for appendAround -->
				<div class="offcanvas-nav d-block d-md-none" data-set="bs"></div>
			</div>
		</div>
		<div class="c-offcanvas is-hidden" id="left">
			<!-- container for appendAround -->
			<div class="offcanvas-nav d-block d-sm-none" data-set="bs-sidebar"></div>
		</div>
		<div class="c-offcanvas is-hidden js-offcanvas" data-offcanvas-options='{"modifiers":"top,fixed,overlay"}' id="top">
			<form class="form-signin">
				<h2 class="form-signin-heading">Please sign in</h2>
				<label for="inputEmail" class="sr-only">Email address</label>
				<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
				<label for="inputPassword" class="sr-only">Password</label>
				<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
				<div class="checkbox">
					<label>
						<input type="checkbox" value="remember-me"> Remember me
					</label>
				</div>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
			</form>
		</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script>
<script src='https://npmcdn.com/js-offcanvas@1.2.0/dist/_js/js-offcanvas.pkgd.min.js'></script>
    <script  src="js/dashbord.js"></script>
</body>

</html>
