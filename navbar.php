<?php 
session_start();

if (isset($_SESSION['id_admin']) && isset($_SESSION['login'])) {

 ?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Website menu 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/navbar.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
	
.table-title {        
	padding-bottom: 15px;
	background: #fff;
	color: #fff;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
</style>
	</head>
	<body>
	<section class="ftco-section">
	
		<div class="container">
			<nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
		    <div class="container">
		    	<a class="navbar-brand" href="index.html">Logo</a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="fa fa-bars"></span> Menu
		      </button>
		      <div class="collapse navbar-collapse" id="ftco-nav">
		        <ul class="navbar-nav ml-auto mr-md-3">
		        	<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="service.php" class="nav-link">Services</a></li>
		        	<li class="nav-item"><a href="docs.php" class="nav-link">Docteurs</a></li>
		        	<li class="nav-item"><a href="inf.php" class="nav-link">Infirmiers</a></li>
		          <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
		          <li class="dropdown nav-item d-md-flex align-items-center">
                <a href="#" class="dropdown-toggle nav-link d-flex align-items-center justify-content-center icon-cart p-0" id="dropdown04" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-shopping-cart"></i>
                  <b class="caret"></b>
                </a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown04">
				<div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">Profile</a>
                  <div class="dropdown-divider"></div>
                  <a href="logout.php" class="dropdown-item">Sortie</a>
                  <div class="dropdown-divider"></div>
                </div>
              </li>
		        </ul>
		      </div>
		    </div>
		  </nav>
    <!-- END nav -->
  </div>
	</section>
	

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>



<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>