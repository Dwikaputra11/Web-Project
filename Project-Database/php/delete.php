<?php
    require 'database.php';
    $id = $_GET["id"];

    if(deleteDailyList($id) > 0){
        echo"
            <script>
                alert('Delete Successfully');
            </script>
        ";
        header("Location: makelist.php");
    }else{
        echo "
            <script>
                alert('Delete Unsuccessfully');
            </script>
        ";
    }
?>