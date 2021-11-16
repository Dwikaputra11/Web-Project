<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Percabangan</title>
</head>
<body>

<!-- Nvbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand ms-3" href="#">Tugas Praktikum 3</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto me-5">
                <a class="nav-link"  href="../welcome.php">Beranda</a>
                <a class="nav-link active" aria-current="page" href="#">Percabangan</a>
                <a class="nav-link" href="../Perulangan/index.php">Perulangan</a>
                <a class="nav-link" href="../Array/index.php">Array</a>
            </div>
            </div>
        </div>
    </nav>
<!-- Akhir Navbar -->
<!-- Container -->
    <center>
        <div class="container mt-3">
                <form action="index.php" method="POST">
                    <table border="0" cellspacing="0" cellpadding="5">
                        <tr>
                            <td>
                                <label for="inputTahun">Masukkan Tahun</label>
                            </td>
                            <td>
                                <input type="number" id="inputTahun" aria-describedby="tahunHelp" name="inputTahun">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <center><button type="submit" name="cek">Cek</button></center>
                            </td>
                        </tr>
                    </table>
                </form>
                <?php
                    $thn = null;
                    if(!empty($_POST['inputTahun'])) $thn = $_POST['inputTahun'];
                    if(isset($_POST['cek'])){
                        if(empty($thn)){
                            echo "<p>Masukkan Tahun Terlebih Dahulu</p>";
                        }else{
                            if($thn%4 == 0) echo "<p>Tahun $thn Termasuk Tahun Kabisat</p>";
                            else echo "<p>Tahun $thn Bukan Termasuk Tahun Kabisat</p>";
                        };
                    }else echo "<p mt-5>Masukkan Tahun!</p>";
                ?>
            </div>
    </center>
<!-- Akhir Container -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>