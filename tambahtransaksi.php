<?php 
    session_start();
    include("config.php");
    $total = $_GET['total'];

    //insert ke tabel penjualan
    $sql = "INSERT INTO transaksi (tgl_transaksi, harga_total)VALUES('".date("Y-m-d")."','$total')";
    $query = mysqli_query($db, $sql); //memasukkan data ke tabel
    $id_transaksi = mysqli_insert_id($db);

    
    //insert ke tabel detail penjualan
    foreach($_SESSION["keranjang"] as $keranjang=>$val){
        $subtotal=$val["harga_denda"] * $val["jumlah"];
        $nama_buku = $val["nama_buku"];
        $harga_denda = $val["harga_denda"];
        $jumlah = $val["jumlah"];

        $sql = "INSERT INTO transaksi_detail (id_transaksi, kode_buku, nama_buku, harga_denda, jumlah, subtotal)
        VALUES('$id_transaksi', '$keranjang', '$nama_buku', '$harga_denda', '$jumlah', '$subtotal')";
        $query = mysqli_query($db, $sql); //memasukkan data ke tabel
    }
    
    //mengosongkan keranjang belanja dengan unset session
    unset($_SESSION["keranjang"]);
    header("location:keranjang.php");
?>