<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="input.css">
    <title>Form</title>
  </head>
  <body>
    
  <!-- NAVBAR -->
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
    <!-- AKHIR NAVBAR -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#a2d9ff" fill-opacity="0.2" d="M0,96L24,80C48,64,96,32,144,48C192,64,240,128,288,176C336,224,384,256,432,266.7C480,277,528,267,576,245.3C624,224,672,192,720,154.7C768,117,816,75,864,74.7C912,75,960,117,1008,149.3C1056,181,1104,203,1152,192C1200,181,1248,139,1296,122.7C1344,107,1392,117,1416,122.7L1440,128L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>
    <!-- FORM -->
    <div class="form">
        <center><h1>Biodata Mahasiswa</h1></center>
        <div class="line"></div>
        <form action="output.php" method="post">
        <table border="0" cellspacing="0" cellpadding="5">
    			<div class="mb-3">
    				<tr>
    					<td><label for="nim" class="form-label">NIM</label></td>
                        <td> :</td>
    					<td colspan="2"><input type="text" class="form-control" id="nim" aria-describedby="nimHelp" name="nim" placeholder="123xxxxxx"></td>
    				</tr>
				  </div>
    			<div class="mb-3">
    				<tr>
    					<td><label for="name" class="form-label">Name</label></td>
    				    <td> :</td>
    					<td colspan="2"><input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="name" placeholder="Name"></td>
    				</tr>
				  </div>
                <div class="mb-3">
    				<tr>
    					<td><label for="name" class="form-label">Place, Date of Birth</label></td>
    				    <td> :</td>
    					<td><input type="text" class="form-control" id="place" aria-describedby="nameHelp" name="place" placeholder="Place"></td>
                        <td><input type="date" class="form-control" id="date" aria-describedby="dateHelp" name="date" value="2021-07-10"
                        min="1900-01-01" max="2021-12-31"></td>

    				</tr>
				  </div>
				 <div class="mb-3">
                    <tr>
                        <td><label for="inputAddress" class="form-label">Address</label></td>
                        <td> :</td>
                        <td><textarea name="address" id="address" cols="90" rows="2"></textarea></td>
                    </tr>
                    </div>
                    <div class="mb-5">
                    <tr>
                        <td>
                            <label for="genderCheck">Gender</label>
                        </td>
                        <td> :</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="gender" id="radioMale" value="Male">Male
                        </td>
                        <td></td>
                        <td>
                            <input type="radio" name="gender" id="radioFemale" value="Female">Female
                        </td>
                    </tr>
                  </div>
				  
                  <div class="mb-5">
                    <tr>
                        <td><label for="Religion" class="form-label">Religion</label></td>
                    <td> :</td>
                        <td colspan="4">
                            <select class="form-select" aria-label="Default select example" name="religion">
                                <option selected style="color: grey;" value="">Choose Your Subject</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Catholic">Catholic</option>
                                <option value="Islam">Islam</option>
                                <option value="Kong Hu Chu">Kong Hu Chu</option>
                                </select>
                        </td>
                    </tr>
                  </div>
                  <div class="mb-3">
                      <tr>
                          <td>
                              <label for="level">Is Quiz Difficult ?</label>
                          </td>
                          <td> :</td>
                      </tr>
                      <tr>
                          <td>
                              <input type="radio" name="level" id="levelYes" value="Yes">Yes
                          </td>
                          <td></td>
                          <td>
                              <input type="radio" name="level" id="levelNo" value="No"> No
                          </td>
                      </tr>
                  </div>
                  <div class="mb-3">
                    <tr >
                        <td colspan="6">
                            <center><button type="submit" class="btn" name="sumbit">Submit</button></center>
                        </td>
                    </tr>
                  </div>
    		</table>
        </form>
    </div>
    <!-- AKHIR FORM -->
    <!-- AKHIR CONTENT -->

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a2d9ff" fill-opacity="0.2" d="M0,96L30,117.3C60,139,120,181,180,176C240,171,300,117,360,85.3C420,53,480,43,540,74.7C600,107,660,181,720,186.7C780,192,840,128,900,122.7C960,117,1020,171,1080,192C1140,213,1200,203,1260,181.3C1320,160,1380,128,1410,112L1440,96L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
    <!-- FOOTER -->
    <div class="footer">
        <p>All Rights Reserved.</p> 
    </div>
    <!-- AKHIR FOOTER -->


  </body>
</html>