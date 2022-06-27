<?php
include ("config.php");

    if(isset($_GET['updatepinjam'])){     
        $nobuku = $_GET['nobuku'];
        $noanggota = $_GET['noanggota'];
        $namaanggota = $_GET['namaanggota'];
        $judulbuku = $_GET['judulbuku'];
        $tanggalpinjam = $_GET['tanggalpinjam'];
        $tanggalkembali = $_GET['tanggalkembali'];
        $denda = $_GET['denda'];
        
        
        $sql = "UPDATE tbl_pinjam SET noanggota='$noanggota', namaanggota='$namaanggota', 
        judulbuku='$judulbuku', tanggalpinjam='$tanggalpinjam', tanggalkembali='$tanggalkembali',denda='$denda', WHERE nobuku='$nobuku'";        
        $query = mysqli_query($db, $sql);        
        
        if($query) {
            header('Location: listpinjaman.php');
        } else {
            die("Gagal Merubah Data Buku");
        }    

    }
?>