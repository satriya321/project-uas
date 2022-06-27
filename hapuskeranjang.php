<?php 
    session_start();
    $kode_buku = $_GET['kode_buku'];

    unset($_SESSION["keranjang"][$kode_buku]);
    header("location:keranjang.php")

?>