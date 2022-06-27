<?php 
    include ("config.php");

    if(isset($_GET['saveanggota'])){
        $noanggota = $_GET['noanggota'];
        $namaanggota = $_GET['namaanggota'];
        $tempatlahir = $_GET['tempatlahir'];
        $teleponanggota = $_GET['telponanggota'];
        $alamat = $_GET['alamat'];
        $statusanggota = $_GET['statusanggota'];
        

        
        
        // buat query
        $sql = "INSERT INTO tbl_anggota VALUE('$noanggota', '$namaanggota','$tempatlahir','$teleponanggota'
        ,'$alamat', '$statusanggota') ";
        $query = mysqli_query($db, $sql);

        if($query){
            header('Location: listanggota.php');
        }else{
            echo "Insert data gagal";
        }
      
    }

?>