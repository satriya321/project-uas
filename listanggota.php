<?php
    session_start();
    //session belum dibuat/belum login
    if(!isset($_SESSION["login"])){
        header("Location:fromlogin.php");
        exit;
    }
    echo "Selamat Datang : ";
    echo $_SESSION["user"];
?>
<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="cssbuku1.css"/>
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- searchbar -->
    <script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#tableanggota tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
         });
      });
    });
    </script>
    
    <!-- searchbar -->

  
</head>
<body>

     <!-- navbar -->
     <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #1d1e1f;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" style="margin-left: 100px;" >Sistem Perpus</a>
          
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- navbar akhir -->
      
          <!-- sidebar -->  
            <div class="sidebar">
               <!-- isi sidebar-->
               <ul>
                <li>
                    <a href="listbuku.php" class="active">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item" style="padding-top: 100px;">Tabel Buku</span>
                    </a>
                </li>
                <li>
                    <a href="listanggota.php">
                        <span class="icon"><i class="fas fa-desktop"></i></span>
                        <span class="item">Tabel Keanggotaan</span>
                    </a>
                </li>
                <li>
                    <a href="listpinjaman.php">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">Tabel Pinjaman</span>
                    </a>
            </ul>
        </div>
                <!--isi akhir-->
        
          <!-- akhir sidebar -->
      
      
      
      
          
          <!-- table -->

          <h2 id="textatas">Tabel Keanggotaan Perpustakaan</h2>
          <input id="myInput" type="text" placeholder="   Search">
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" id="crud2">Tambah Data Baru</button>
         
        <table class="table" id="tableanggota">
          <tr>
          <th>No Anggota</th>
          <th>Nama Anggota</th>
          <th>Tempat Lahir</th>
          <th>Alamat Anggota</th>
          <th>Status Anggota</th>
          <th>Telepon Anggota</th>
          <th>Aksi</th>
          </tr>
          <!-- list table -->
    <?php
    $sql = "SELECT * FROM tbl_anggota";
    $query = mysqli_query($db, $sql);
    while($anggota = mysqli_fetch_array($query)){ 
        echo "<tr>";			
        echo "<td>".$anggota['noanggota']."</td>";
        echo "<td>".$anggota['namaanggota']."</td>";
        echo "<td>".$anggota['tempatlahir']."</td>";
        echo "<td>".$anggota['alamat']."</td>";
        echo "<td>".$anggota['statusanggota']."</td>";
        echo "<td>".$anggota['telponanggota']."</td>";
        echo "<td>";
        echo "<a href='formeditanggota.php?noanggota=".$anggota['noanggota']."'>Edit</a> | ";
        echo "<a href='hapusanggota.php?noanggota=".$anggota['noanggota']."'>Hapus</a>";
        echo "</td>";
        echo "</tr>";
    }		
    ?>
    <!-- akhir list table -->
        </table>
      <!-- akhir table -->

<!-- Modal input -->
<form action="inputdataanggota1.php" method="get">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Data Anggota Perpustakaan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row g-3">
            <div class="col-sm-6">
              <label for="noanggota" class="form-label">No Anggota Perpus</label>
              <input type="text" class="form-control" placeholder="No Anggota" name="noanggota" >
            </div>

            <div class="col-sm-6">
              <label for="namaanggota" class="form-label">Nama Anggota</label>
              <input type="text" class="form-control" placeholder="Nama Anggota Perpus" name="namaanggota">
            </div>

            <div class="col-sm-6">
              <label for="tempatlahir" class="form-label">Tempat Lahir Anggota</label>
              <input type="text" class="form-control" placeholder="Tempat Lahir Anggota" name="tempatlahir">
            </div>

            <div class="col-sm-6 ">
              <label for="teleponanggota" class="form-label">No Telpon Anggota</label>
              <input type="text" class="form-control" placeholder="No Telpon" name="telponanggota">
            </div>

            <div class="col-sm-12 ">
              <label for="alamat" class="form-label">Alamat Anggota</label>
              <input type="text" class="form-control" placeholder="Alamat Anggota" name="alamat">
            </div>

            <div class="col-12 mb-3">
                <label for="statusanggota">Status Keanggotaan</label>
                <select class="custom-select d-block w-100" style="height: 35px;" name="statusanggota">
                  <option>Status</option>
                  <option>Aktif</option>
                  <option>Tidak Aktif</option>
                </select>
            </div>
                    
      <!-- isi modal -->
      </div>
      <div class="modal-footer">
        <!-- Button trigger modal CRUD -->
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="saveanggota">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>


    </body>
    <!-- script -->
    <script src="./js/bootstrap.js"></script>
      <!-- akhir script -->
  </html>


