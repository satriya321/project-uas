<?php
include("config.php");

if(isset($_GET['nobuku']) ){
	$nobuku = $_GET['nobuku'];
	
	// buat query hapus
	$sql = "DELETE FROM tbl_buku WHERE nobuku=$nobuku";
	$query = mysqli_query($db, $sql);
	
	if($query){
        header('Location: listbuku.php');
    }
	
} else {
	die("akses dilarang...");
}

?>