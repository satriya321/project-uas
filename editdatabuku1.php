<?php
include ("config.php");

    if(isset($_GET['updatebuku'])){     
        $nobuku = $_GET['nobuku'];
        $judulbuku = $_GET['judulbuku'];
        $pengarang = $_GET['pengarang'];
        $penerbit = $_GET['penerbit'];
        $statusbuku = $_GET['statusbuku'];
        $jenisbuku = $_GET['jenisbuku'];
        $tahunterbit = $_GET['tahunterbit'];
        
        $sql = "UPDATE tbl_buku SET judulbuku='$judulbuku', pengarang='$pengarang', 
        penerbit='$penerbit', statusbuku='$statusbuku', jenisbuku='$jenisbuku', 
        tahunterbit='$tahunterbit' WHERE nobuku='$nobuku'";        
        $query = mysqli_query($db, $sql);        
        
        if($query) {
            header('Location: listbuku.php');
        } else {
            // kalau gagal tampilkan pesan
            die("Gagal Merubah Data Buku");
        }    

    }
?>