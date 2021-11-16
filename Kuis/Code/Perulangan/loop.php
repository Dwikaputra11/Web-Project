<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="loop.css">
    <title>Loop</title>
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
                <a class="nav-link" href="../Form/input.php">Form</a>
                <a class="nav-link active" aria-current="page" href="#">Loop</a>
            </div>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- CONTENT -->
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
                        echo "Anak Ayam Udin Ada : ".$jml."<br>";
                        if(isset($_POST['cek'])){
                            for($i = $jml; $i > 0; $i--){?>
                                <p style="font-weight :bold">
                                    <?php
                                    echo "Anak Ayam Turun ".$i;
                                    ?>
                                </p>
                                <?php
                                if($i-1 == 0) echo "mati satu Udin Galau :(";
                                else echo "mati satu tinggal ".($i - 1)."<br>";
                            }
                        }
                    }else echo "";
                    
                ?>
                <div class="dummy"></div>
            </div>
    </center>
    <!-- END CONTENT -->
    <!-- AKHIR CONTENT -->

    <!-- FOOTER -->
    <div class="footer">
        <p>All Rights Reserved.</p> 
    </div>
    <!-- AKHIR FOOTER -->

</body>
</html>