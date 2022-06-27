<?php 
    include("fromlogin.php"); 
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tbl_anggota WHERE namaanggota='$username' and password='$password'";
    
    $query = mysqli_query($db, $sql);

    $cek = mysqli_num_rows($query);

    $sql = "SELECT * FROM admin WHERE username='$username' and password='$password'";
    
    $query = mysqli_query($db, $sql);

    $cek = mysqli_num_rows($query);
   

    if($cek > 0){
        echo "Login Berhasil";
    }
    else{
        echo "Login Gagal";
        
    }



?>
