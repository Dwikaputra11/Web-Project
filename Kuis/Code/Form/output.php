<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" href="output.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Courgette&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<title>Index Output</title>
</head>
<body>

	<?php 
     $nim = $_POST['nim'];
	 $name = $_POST['name'];
     $place = $_POST['place'];
     $dateBirth = $_POST['date'];
	 $address = $_POST['address'];
	 $gender = $_POST['gender'];
     $level = $_POST['level'];
	 $religion = $_POST['religion'];
	 ?>

	 <!-- 		NavBar		 -->
	 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto me-3">
                <a class="nav-link" href="../Home/index.php">Home</a>
                <a class="nav-link active" aria-current="page" href="#">Form</a>
                <a class="nav-link" href="../Perulangan/loop.php">Loop</a>
            </div>
            </div>
        </div>
    </nav>
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
   			Please Check Your Information So Far!
   		</p>
   		
   	</div>
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a2d9ff" fill-opacity="0.2" d="M0,192L30,170.7C60,149,120,107,180,85.3C240,64,300,64,360,106.7C420,149,480,235,540,224C600,213,660,107,720,90.7C780,75,840,149,900,165.3C960,181,1020,139,1080,138.7C1140,139,1200,181,1260,181.3C1320,181,1380,139,1410,117.3L1440,96L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg>

   	<!-- Content -->
   	<div class="content">
           <div class="table"></div>
           <table border="0" cellspacing = "0" cellpadding = "5">
               <tr>
                   <td colspan="3" style="font-weight: bold; font-size: 25px"><center>Biodata</center></td>
               </tr>
               <tr>
                   <td></td>
               </tr>
               <tr>
                   <td></td>
               </tr>
               <tr>
                   <td>NIM</td>
                   <td> : </td>
                   <td>
                       <?php
                        echo "$nim";
                       ?>
                   </td>
               </tr>
               <tr>
                   <td></td>
               </tr>
               <tr>
                   <td>Place, Date of Birth</td>
                   <td> : </td>
                   <td><?php
                        echo "$place, $dateBirth";
                       ?>
                    </td>
               </tr>
               <tr>
                   <td></td>
               </tr>
               <tr>
                   <td>Address</td>
                   <td> : </td>
                   <td>
                       <?php
                        echo "$address";
                       ?>
                   </td>
               </tr>
               <tr>
                   <td></td>
               </tr>
               <tr>
                   <td>Gender</td>
                   <td> : </td>
                   <td>
                       <?php
                        echo "$gender";
                       ?>
                   </td>
               </tr>
               <tr>
                   <td></td>
               </tr>
               <tr>
                   <td>Religion</td>
                   <td> : </td>
                   <td>
                       <?php
                        echo "$religion";
                       ?>
                   </td>
               </tr>
               <tr>
                   <td></td>
               </tr>
               <tr>
                   <td>I Quiz Difficult?</td>
                   <td> : </td>
                   <td>
                       <?php
                        echo "$level";
                       ?>
                   </td>
               </tr>
           </table>
       </div>
   	<!-- End Content -->
       <!-- AKHIR CONTENT -->

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a2d9ff" fill-opacity="0.2" d="M0,96L30,117.3C60,139,120,181,180,176C240,171,300,117,360,85.3C420,53,480,43,540,74.7C600,107,660,181,720,186.7C780,192,840,128,900,122.7C960,117,1020,171,1080,192C1140,213,1200,203,1260,181.3C1320,160,1380,128,1410,112L1440,96L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
    <!-- FOOTER -->
    <div class="footer">
        <p>All Rights Reserved.</p> 
    </div>
    <!-- AKHIR FOOTER -->
</body>
</html>