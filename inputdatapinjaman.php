<?php 
    include ("config.php");

    if(isset($_GET['savepinjam'])){
        $nobuku = $_GET['nobuku'];
        $noanggota = $_GET['noanggota'];
        $namaanggota = $_GET['namaanggota'];
        $judulbuku = $_GET['judulbuku'];
        $tanggalpinjam = $_GET['tanggalpinjam'];
        $tanggalkembali = $_GET['tanggalkembali'];
        $denda = $_GET['denda'];
        
        
        // buat query
        $sql = "INSERT INTO tbl_pinjam VALUE('$nobuku', '$noanggota', '$namaanggota','$judulbuku'
        ,'$tanggalpinjam','$tanggalkembali', '$denda')";
        $query = mysqli_query($db, $sql);

        if($query){
            header('Location: listpinjaman.php');
        }else{
            echo "Insert data gagal";
        }
      
    }

?>