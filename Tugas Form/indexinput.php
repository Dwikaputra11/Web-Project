<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="cssreset.css"> -->
    <title>Hello, world!</title>
  </head>
  <body>
   	<!-- 		NavBar		 -->
   	<div class="container-nav">
   			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				  <div class="container-fluid">
				    <a class="navbar-brand ms-3" href="#">Dwika Putra</a>
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


    <!-- 	Form 	-->
    <div class="form">
    	<p class="login">Login</p>
    	<form action="indexoutput.php" method="post">
    		<table border="1" cellspacing="0" cellpadding="5">
    			<div class="mb-3">
    				<tr>
    					<td><label for="exampleInputName1" class="form-label">Name</label></td>
    				</tr>
    				<tr>
    					<td colspan="2"><input type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" name="name"></td>
    				</tr>
				  </div>
    			<div class="mb-3">
    				<tr>
    					<td><label for="exampleInputEmail1" class="form-label">Email address</label></td>
    				</tr>
    				<tr>
    					<td colspan="2"><input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"></td>
    				</tr>
				  </div>
				 <div class="mb-3">
    				<tr>
    					<td><label for="exampleInputAddress" class="form-label">Address</label></td>
    				</tr>
    				<tr>
    					<td colspan="2"><input type="text" class="form-control" id="exampleInputAddress1" aria-describedby="addressHelp" name="address"></td>
    				</tr>
				  </div>
				  <div class="mb-3">
					  <tr>
	    				<td>
	    					<label for="exampleInputRegion1" class="form-label">Region</label>
	    				</td>
	    				<td><label for="exampleInputProvince1" class="form-label">Province</label></td>
	    			</tr>
	    			<tr>
	    				<td>
	    					<input type="text" class="form-control" id="exampleInputRegion1" aria-describedby="regionHelp" name="region">
	    				</td>
	    				<td>
	    					<input type="text" class="form-control" id="exampleInputProvince1" aria-describedby="provinceHelp" name="province">
	    				</td>
	    			</tr>
	    			<tr>
	    				<td>
	    					<label for="exampleInputZip1" class="form-label">Zip</label>
	    				</td>
	    			</tr>
	    			<tr>
	    				<td><input type="text" class="form-control" id="exampleInputZip1" aria-describedby="ZipHelp" name="zip"></td>
	    			</tr>
    			</div>
				  <tr>
				  	<td>
				  		<p>Gender</p>
				  	</td>
				  </tr>
				  <tr>
				  	<td>
				  		<div class="mb-3 form-check gender">
							    <label class="form-check-label" for="exampleCheck1">
								    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="gender"
								    value="Male">Male
							  	</label>
						  </div>
				  	</td>
				  	<td>
				  		<div class="mb-3 form-check gender">
							    <label class="form-check-label" for="exampleCheck1">
								    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="gender"
								    value="Female">Female
							  	</label>
						  </div>
				  	</td>
				  </tr>
				  <tr>
				  	<td><label for="exampleInputSubject1" class="form-label">Subject</label></td>
				  </tr>
				  <tr>
				  	<td colspan="2">
				  		<select class="form-select" aria-label="Default select example" name="subject">
							  <option selected style="color: grey;" value="">Choose Your Subject</option>
							  <option value="Informatic Engineer">Informatic Engineer</option>
							  <option value="Information System">Information System</option>
							  <option value="Industry Engineer">Industry Engineer</option>
							  <option value="Civil Engineer">Civil Engineer</option>
							  <option value="Doctor">Doctor</option>
							</select>
				  	</td>
				  </tr>
				  <tr>
				  	<td colspan= "2">
				  		<button type="submit" class="btn btn-primary" name="sumbit">Submit</button>
				  	</td>
				  </tr>
    		</table>
			</form>
    </div>
    
	<!-- Akhir Form -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html