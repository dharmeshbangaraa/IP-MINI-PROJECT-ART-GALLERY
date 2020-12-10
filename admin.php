
<?php
	
		
	if(isset($_POST['submit'])){
		$Email = $_POST['admEmail'];
		$Pass = $_POST['admPass'];
		
		if($Email == 'admin@gmail.com')
		{
			if($Pass == 'admin')
			{
				header("Location: admin1.php");
			}

		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Art Gallery - Admin</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/all.min.js"></script>
	 <link href="https://fonts.googleapis.com/css?family=Gelasio&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
     <link rel="icon" type="image/gif/png" href="images/logo.png">
</head>
<body>
	 <header>
		<nav class="nav navbar-expand-lg fixed-top bg-dark mb-5">
    		<a href="index.html" class="navbar-brand">
          <div class="row m-0 p-0">
            <div class="col-md-5">
              <img src="images/logo.png" width="125" height="60">
            </div>
            
          </div>
    		
    		</a>
    		 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
   <span><i class="fas fa-bars"></i></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.html">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.html">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery.php">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.html">Contact Us</a>
      </li>
      <li class="nav-item mr-2">
        <a class="nav-link active text-danger" href="admin.php">Admin<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
	</header>

	<section>
		<div class="ser mt-5" style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(https://source.unsplash.com/1600x900/?streetphotography);">
			<h1>Admin</h1>
		</div>
	</section>

	<section>
		<div class="container mt-4">
			<div class="row">
				<div class="col text-center gal">
					<h3>Please Login</h3>
				</div>
			</div>
		</div>
				<div class="row" style="margin-right: 20%; margin-left: 20%;">
				<div class="col-md-12">
				<form method="POST">
				<div class="form-group">
    				<label>Email address</label>
    				<input type="email" name="admEmail" class="form-control" aria-describedby="emailHelp" placeholder="Enter your email address." required="">
    				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  				</div>
  				<div class="form-group">
    				<label>Password</label>
    				<input type="password" class="form-control" name="admPass" placeholder="Enter your password." required="">
  				</div>
  				<button type="submit" class="btn btn-primary" name="submit">Submit</button>

				</form>
			</div>
		</div>
				</div>
				</div>

	</section>

	<footer id="footer" class="bg-dark mt-4">
	<div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 footer">
          <ul style="list-style-type: none;" class="pl-0 mt-3 text-left">
            <li>  <img src="images/logo.png" height="60" width="125"> </li>
            <li><h3 class="brand">Art Gallery</h3></li>
            <li><p class="text-light">&copy;Copyright claim 2020-21. Art Gallery</p></li>

          </ul>
								
					
        </div>
				<div class="col-md-6 text-light icon mt-2 text-right">
          <ul class="pl-0">
            <li><a href="#"><i class="fab fa-facebook "></i></a></li>
            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
				 </div>
				
			</div>
			
		</div>
	</div>

</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>

