<?php 
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "perpus1";

    $db = mysqli_connect($server, $user, $pass, $database);

    if($db){
        
    }else{
        echo "koneksi gagal bos";
    }
?>