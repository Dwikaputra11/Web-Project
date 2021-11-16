<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Percabangan</title>
</head>
<body>

<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand ms-3" href="../welcome.php">Tugas Praktikum 3</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto me-5">
                <a class="nav-link"  href="../welcome.php">Beranda</a>
                <a class="nav-link"  href="../Percabangan/index.php">Percabangan</a>
                <a class="nav-link active" aria-current="page" href="../Perulangan/index.php">Perulangan</a>
                <a class="nav-link" href="../Array/index.php">Array</a>
            </div>
            </div>
        </div>
    </nav>
<!-- Akhir Navbar -->
<!-- Container -->
    <center>
        <div class="container mt-3">
            <center><h1>Lagu Anak Ayam</h1></center>
                <form method="POST">
                    <table border="0" cellspacing="0" cellpadding="5">
                        <tr>
                            <td>
                                <label for="inputTahun">Masukkan Jumlah Ayam</label>
                            </td>
                            <td>
                                <input type="number" id="inputJumlah" aria-describedby="jumlahHelp" name="inputJumlah">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1">
                                <center><button type="submit" name="cek" value="cek">Cek</button></center>
                            </td>
                            <td colspan="1">
                                <center><button type="submit" name="reset" value="reset">Reset</button></center>
                            </td>
                        </tr>
                    </table>
                </form>
                <?php
                    $jml = null;
                    if(!empty($_POST['inputJumlah'])) $jml = $_POST['inputJumlah'];
                    if(isset($_POST['cek']) || isset($_POST['reset'])){
                        if(isset($_POST['cek'])){
                            for($i = $jml; $i > 0; $i--){
                                echo "anak ayam turun ".$i." mati satu tinggal ".($i - 1)."<br>";
                            }
                        }
                    }else echo "";
                    
                ?>
            </div>
    </center>
<!-- Akhir Container -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>