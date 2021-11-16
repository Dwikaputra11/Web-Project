<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" href="styleoutput.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Courgette&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<title>Index Output</title>
</head>
<body>

	<?php 
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $address = $_POST['address'];
	 $region = $_POST['region'];
	 $province = $_POST['province'];
	 $zip = $_POST['zip'];
	 $gender = $_POST['gender'];
	 $subject = $_POST['subject'];
	 ?>

	 <!-- 		NavBar		 -->
	 <div class="container_nav">
	 	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="#">Navbar</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		      <div class="navbar-nav ms-auto">
		        <a class="nav-link active" aria-current="page" href="#">Home</a>
		        <a class="nav-link active" href="#">About Me</a>
		        <a class="nav-link active" href="#">Project</a>
		        <a class="nav-link active" href="#">Contact</a>
		      </div>
		    </div>
		  </div>
		</nav>
	 </div>
   	<!-- 		Akhir NavBar		 -->

   	<div class="jumbotron">
   		<p class="hello">
   			Hello,
   			<?php  
   				echo "$name";
   			?>
   		</p>
   		<p class="desc">
   			Glad To Have You Here <br>
   			Please Check Your Information So Far
   		</p>
   		
   	</div>

   	<!-- Content -->
   	<div class="content">
   		<div class="email">
   			<p>
   				Email : 
   				<?php  
	   			echo "$email";
	   			?>
   			</p>
   		</div>
   		<div class="address">
   			<p>
   				Address : 
   				<?php  
   					echo "$address,";	
		   		?>
		   		<?php  
		   			echo "$region,";
		   		?>
		   		<?php  
		   			echo "$province,";
		   		?>
		   		<?php  
		   			echo "$zip";
		   		?>
   			</p>
   		</div>
   		<div class="gender">
   			<p>
   				Gender : 
   				<?php  
		   			echo "$gender";
		   		?>
   			</p>
   		</div>
   		<div class="subject">
   			<p>
   				Subject : 
   				<?php  
		   			echo "$subject";
		   		?>
   			</p>
   		</div>

   		<div class="circle1"></div>
   		<div class="rectangle"></div>
	   	<div class="circle2"></div>
	   	<div class="circle3"></div>
	   	<div class="circle4"></div>
   		<div class="circle5"></div>
   	</div>
   	<p class="end">
   		Thank You
   	</p>
   	<!-- End Content -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>