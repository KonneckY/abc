<?php
    $servername = "172.16.131.125";
    $username = "z_rty";
    $password = "ghj";
    $dbname = "z_rty";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $id=$_POST['id'];


    $result = "DELETE FROM `pracownicy` WHERE id_pracownicy=$id";

    

    mysqli_query($conn, $result);

    $conn->close();

    header("Location: http://172.16.131.125/spr/z_rty/index.php");
 ?>   