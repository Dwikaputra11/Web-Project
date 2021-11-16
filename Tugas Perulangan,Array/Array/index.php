<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Array</title>
</head>
<body>

    <?php
        $nama = ["Rudi","Dwika","Ahsan"];
        $email = ["rudi12@gmial.com","dwikapr@gmail.com","ahs4n@yahoo.co.id"];
        $ipk = [3.50,3.78,3.65];
    ?>

<!-- NAvbar -->
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
                    <a class="nav-link" href="../Perulangan/index.php">Perulangan</a>
                    <a class="nav-link active" aria-current="page" href="../Array/index.php">Array</a>
                </div>
            </div>
        </div>
    </nav>
<!-- Akhir Navbar -->
<!-- Container -->
    <center>
        <div class="container mt-4 mb-3">
            <h3>Daftar Mahasiswa</h3>
            <form>
                <table border="1" cellspacing="0" cellpadding="10">
                    <thead>
                        <center><td>Nama</td></center>
                        <center><td>IPK</td></center>
                        <center><td colspan="2">Email</td></center>
                    </thead>
                    <tbody>
                        <?php
                            for($i = 0; $i < count($nama); $i++){?>
                                <tr>
                                    <td colspan="1">
                                        <label for="name">
                                            <?php 
                                                echo "$nama[$i]";
                                            ?>
                                        </label>
                                    </td>
                                    <td colspan="1">
                                        <label for="ipk">
                                            <?php 
                                                echo "$ipk[$i]";
                                            ?>
                                        </label>
                                    </td>
                                    <td colspan="2">
                                        <label>
                                            <?php 
                                                echo "$email[$i]";
                                            ?>
                                        </label>
                                    </td>
                                </tr>
                        <?php }
                        ?>
                    </tbody>
                </table>
            </form>
        </div>
    </center>
<!-- Akhir Container -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>