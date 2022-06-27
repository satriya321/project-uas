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
        $("#tablepinjam tr").filter(function() {
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

          <h2 id="textatas">Tabel Pinjaman</h2>
          <input id="myInput" type="text" placeholder="   Search">
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" id="crud2">Tambah Data Baru</button>
         
        <table class="table" id="tablepinjam">
          <tr>
          <th>No Buku</th>
          <th>No Anggota</th>
          <th>Nama Anggota</th>
          <th>Judul Buku</th>
          <th>Tanggal Pinjam</th>
          <th>Tanggal Kembali</th>
          <th>Denda</th>
          <th>Aksi</th>
          
          
          </tr>
          <!-- list table -->
    <?php
    $sql = "SELECT * FROM tbl_pinjam";
    $query = mysqli_query($db, $sql);
    while($pinjam = mysqli_fetch_array($query)){ 
        echo "<tr>";			
            echo "<td>".$pinjam['nobuku']."</td>";
            echo "<td>".$pinjam['noanggota']."</td>";
            echo "<td>".$pinjam['namaanggota']."</td>";
            echo "<td>".$pinjam['judulbuku']."</td>";
            echo "<td>".$pinjam['tanggalpinjam']."</td>";
            echo "<td>".$pinjam['tanggalkembali']."</td>";
            echo "<td>".$pinjam['denda']."</td>";
            echo "<td>";
                    echo "<a href='formeditpinjaman.php?nobuku=".$pinjam['nobuku']."'>Edit</a> | ";
                    echo "<a href='hapuspinjaman.php?nobuku=".$pinjam['nobuku']."'>Hapus</a>";
            echo "</td>";
        echo "</tr>";
    }		
    ?>
    <!-- akhir list table -->
        </table>
      <!-- akhir table -->

<!-- Modal input -->
<form action="inputdatapinjaman.php" method="get">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Data Pinjaman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row g-3">
            <div class="col-sm-6">
              <label for="nobuku" class="form-label">No Buku</label>
              <input type="text" class="form-control" placeholder="Nomor Buku" name="nobuku" >
            </div>

            <div class="col-sm-6">
              <label for="nobuku" class="form-label">No Anggota</label>
              <input type="text" class="form-control" placeholder="Nomor Anggota" name="noanggota" >
            </div>
            
            <div class="col-sm-6">
              <label for="nobuku" class="form-label">Nama Anggota</label>
              <input type="text" class="form-control" placeholder="Nomor Anggota" name="namaanggota" >
            </div>

            <div class="col-sm-6">
              <label for="judulbuku" class="form-label">Judul Buku</label>
              <input type="text" class="form-control" placeholder="Judul Buku" name="judulbuku">
            </div>

            <div class="col-sm-6">
              <label for="pengarang" class="form-label">Tanggal Pinjam</label>
              <input type="date" class="form-control" placeholder="yy-mm-ddd" name="tanggalpinjam">
            </div>

            <div class="col-sm-6 ">
              <label for="tahunterbit" class="form-label">Tanggal Kembali</label>
              <input type="date" class="form-control" placeholder="yy-mm-ddd" name="tanggalkembali">
            </div>

            <div class="col-sm-6 ">
              <label for="tahunterbit" class="form-label">Denda</label>
              <input type="text" class="form-control" placeholder="Rp." name="denda">
            </div>
              
      <!-- isi modal -->
      </div>
      <div class="modal-footer">
        <!-- Button trigger modal CRUD -->
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="savepinjam">Save changes</button>
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


