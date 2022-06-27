<?php 
    session_start();
     include("config.php");
     
     $kode_buku = $_GET['kode_buku'];

     $sql = "SELECT * FROM buku where kode_buku=$kode_buku";
     $query = mysqli_query($db, $sql);
     $buku = mysqli_fetch_array($query);

    $nama_buku = $buku['nama_buku'];
    $harga_denda = $buku['harga_denda'];
    
    $_SESSION["keranjang"][$kode_buku] = [    
        "nama_buku" => $nama_buku,
        "harga_denda" => $harga_denda,
        "jumlah" => 1
     ];

     header("location:keranjang.php");
?>