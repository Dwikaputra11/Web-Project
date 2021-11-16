<!-- Soal No 2 -->
<?php
    $serverdb = "localhost";
    $username = "admin";
    $password = "Admin";
    $db = "toko2";

    $mysql = new mysqli($serverdb,$username,$password,$db);

    if($mysql->connect_error){
        die("Connection Error : ".$mysql->connect_error);
    }

    $sql = "select * from products";

    $dataproduk = $mysql->query($sql);

    while($row = $dataproduk->fetch_object()){
        print($row->productCode." | ".$row->productionName." | ".$row->buyPrice);
        print("<br>");
    }
?>