<?php 
  session_start();
  if(isset($_COOKIE['login'])){
      if($_COOKIE['login']=='true'){
          $_SESSION["login"] = true;
      }
  }
  //set cokkie
  if(isset($_POST['remember'])){
      setcookie('login','true', time()+60);
  }

    include("config.php");

    if(isset($_POST["login"])){
        // menangkap data yang dikirim dari form login
        $username = $_POST['username'];
        $password = $_POST['password'];

         // menyeleksi data pada tabel admin dengan username dan password yang sesuai
        $sql = "SELECT * FROM tbl_anggota WHERE namaanggota='$username' and password='$password'";
        
        $query = mysqli_query($db, $sql);

        // menghitung jumlah data yang ditemukan
        $cek = mysqli_num_rows($query);

        if($cek > 0){
            header("location:listanggota.php");
            exit;            
        }else{
            echo "<p> Password atau Username Salah ! </p>";
        }
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="cssbuku1.css"/>
    <title>Update Tabel</title>
    <style>
        p{
            color:red;
        }
    </style>
    <title>Form Login</title>
</head>
<body>
    <h1>Halaman Login</h1>
<form method="POST" action="">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="Username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="Password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" name="remember" id=""></td>
                <td>Remember me</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="login" value="LOGIN"></td>
            </tr>
        </table>            
    </form>
</body>
</html>