<?php 
    include ("config.php");

    if(isset($_GET['updateanggota'])){
        $noanggota = $_GET['noanggota'];
        $namaanggota = $_GET['namaanggota'];
        $tempatlahir = $_GET['tempatlahir'];
        $teleponanggota = $_GET['telponanggota'];
        $alamat = $_GET['alamat'];
        $statusanggota = $_GET['statusanggota'];
        
        $sql = "UPDATE tbl_anggota SET namaanggota='$namaanggota', tempatlahir='$tempatlahir', 
        telponanggota='$teleponanggota', alamat='$alamat', statusanggota='$statusanggota' WHERE noanggota='$noanggota'"; 
        $query = mysqli_query($db, $sql);

        if($query){
            header('Location: listanggota.php');
        }else{
            echo "Update data gagal";
        }
      
    }

?>