<?php 
    include ("config.php");

    if(isset($_GET['savebuku'])){
        $nobuku = $_GET['nobuku'];
        $judulbuku = $_GET['judulbuku'];
        $pengarang = $_GET['pengarang'];
        $penerbit = $_GET['penerbit'];
        $statusbuku = $_GET['statusbuku'];
        $jenisbuku = $_GET['jenisbuku'];
        $tahunterbit = $_GET['tahunterbit'];
        
        // buat query
        $sql = "INSERT INTO tbl_buku VALUE('$nobuku', '$judulbuku','$pengarang','$penerbit', '$statusbuku', '$jenisbuku', '$tahunterbit') ";
        $query = mysqli_query($db, $sql);

        if($query){
            header('Location: listbuku.php');
        }else{
            echo "Insert data gagal";
        }
      
    }

?>