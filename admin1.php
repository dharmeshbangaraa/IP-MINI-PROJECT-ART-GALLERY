
<?php 
$host = "localhost";
$username = "root";
$pass = "";
$conn = mysqli_connect($host, $username, $pass, "admin");
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
		<div class="ser mt-5" style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(https://source.unsplash.com/1600x900/?vintage,retro);">
			<h1>Admin</h1>
		</div>
	</section>

	<section>
		<div class="container mt-4">
			<div class="row">
				<div class="col text-center gal">
					<h3>Upload Your Favourite Picks</h3>
				</div>
			</div>
		</div>
				<div class="row" style="margin-right: 20%; margin-left: 30%;">
				<div class="col-md-12">
					 <!-- <p class= "error"> <?php echo $error ?> </p> <p class= "success"> <?php echo $success ?> </p> -->
				<form action="admin1.php" method="post" enctype="multipart/form-data" >
				<input type="file" name="file_img[]" multiple />
				<input type="submit" name="btn_upload" value="Upload">	
				</form>

				<?php
			if(isset($_POST['btn_upload']))
	{
	for($i = 0; $i < count($_FILES['file_img']['name']); $i++)
	{
		$filetmp = $_FILES["file_img"]["tmp_name"][$i];
		$filename = $_FILES["file_img"]["name"][$i];
		$filetype = $_FILES["file_img"]["type"][$i];
		$filepath = "FavouritePicks/".$filename;
	
	move_uploaded_file($filetmp,$filepath);
	
	$sql = "INSERT INTO favouritepicks (names,img_dir) VALUES ('$filename','$filepath')";
	$result = mysqli_query($conn,$sql);
	
	}
}
?>

			</div>
		</div>
	</div>
	</div>

	</section>
	<br>
	<br>

	<section>
		<div class="container mt-4">
			<div class="row">
				<div class="col text-center gal">
					<h3>Upload Some Portraits</h3>
				</div>
			</div>
		</div>
				<div class="row" style="margin-right: 20%; margin-left: 30%;">
				<div class="col-md-12">
					 <!-- <p class= "error"> <?php echo $error ?> </p> <p class= "success"> <?php echo $success ?> </p> -->
				<form action="admin1.php" method="post" enctype="multipart/form-data" >
				<input type="file" name="file_img1[]" multiple />
				<input type="submit" name="btn_upload1" value="Upload">	
				</form>

				<?php
			if(isset($_POST['btn_upload1']))
	{
	for($i = 0; $i < count($_FILES['file_img1']['name']); $i++)
	{
		$filetmp = $_FILES["file_img1"]["tmp_name"][$i];
		$filename = $_FILES["file_img1"]["name"][$i];
		$filetype = $_FILES["file_img1"]["type"][$i];
		$filepath = "Portraits/".$filename;
	
	move_uploaded_file($filetmp,$filepath);
	
	$sql = "INSERT INTO portraits (img_names,img_dir) VALUES ('$filename','$filepath')";
	$result = mysqli_query($conn,$sql);
	
	}
}
?>

			</div>
		</div>
	</div>
	</div>

	</section>
	<br>
	<br>

	<section>
		<div class="container mt-4">
			<div class="row">
				<div class="col text-center gal">
					<h3>Upload Soothing Nature Images</h3>
				</div>
			</div>
		</div>
				<div class="row" style="margin-right: 20%; margin-left: 30%;">
				<div class="col-md-12">
					 <!-- <p class= "error"> <?php echo $error ?> </p> <p class= "success"> <?php echo $success ?> </p> -->
				<form action="admin1.php" method="post" enctype="multipart/form-data" >
				<input type="file" name="file_img2[]" multiple />
				<input type="submit" name="btn_upload2" value="Upload">	
				</form>

				<?php
			if(isset($_POST['btn_upload2']))
	{
	for($i = 0; $i < count($_FILES['file_img2']['name']); $i++)
	{
		$filetmp = $_FILES["file_img2"]["tmp_name"][$i];
		$filename = $_FILES["file_img2"]["name"][$i];
		$filetype = $_FILES["file_img2"]["type"][$i];
		$filepath = "Nature/".$filename;
	
	move_uploaded_file($filetmp,$filepath);
	
	$sql = "INSERT INTO nature (img_names,img_dir) VALUES ('$filename','$filepath')";
	$result = mysqli_query($conn,$sql);
	
	}
}
?>

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


