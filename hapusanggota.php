<?php
include("config.php");

if(isset($_GET['noanggota']) ){
	$noanggota = $_GET['noanggota'];
	
	// buat query hapus
	$sql = "DELETE FROM tbl_anggota WHERE noanggota=$noanggota";
	$query = mysqli_query($db, $sql);
	
	if($query){
        header('Location: listanggota.php');
    }
	
} else {
	die("akses dilarang...");
}

?>