<?php
include("config.php");

if(isset($_GET['nobuku']) ){
	$nobuku = $_GET['nobuku'];
	
	// buat query hapus
	$sql = "DELETE FROM tbl_pinjam WHERE nobuku=$nobuku";
	$query = mysqli_query($db, $sql);
	
	if($query){
        header('Location: listpinjaman.php');
    }
	
} else {
	die("akses dilarang...");
}

?>