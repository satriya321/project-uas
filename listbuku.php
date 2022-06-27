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
        $("#tablebuku tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
         });
      });
    });
    </script>

    <script>
    document.getElementById("date").innerHTML = Date();
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

          <h2 id="textatas">Tabel Buku</h2>
          <input id="myInput" type="text" placeholder="   Search">
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" id="crud2">Tambah Data Baru</button>
         
        <table class="table" id="tablebuku">
          <tr>
          <th>No Buku</th>
          <th>Judul Buku</th>
          <th>Pengarang</th>
          <th>Penerbit</th>
          <th>Status Buku</th>
          <th>Jenis Buku</th>
          <th>Tahun Terbit</th>
          <th>Aksi</th>
          
          
          </tr>
          <!-- list table -->
    <?php
    $sql = "SELECT * FROM tbl_buku";
    $query = mysqli_query($db, $sql);
    while($buku = mysqli_fetch_array($query)){ 
        echo "<tr>";			
            echo "<td>".$buku['nobuku']."</td>";
            echo "<td>".$buku['judulbuku']."</td>";
            echo "<td>".$buku['pengarang']."</td>";
            echo "<td>".$buku['penerbit']."</td>";
            echo "<td>".$buku['statusbuku']."</td>";
            echo "<td>".$buku['jenisbuku']."</td>";
            echo "<td>".$buku['tahunterbit']."</td>";
            echo "<td>";
                    echo "<a href='formeditbuku.php?nobuku=".$buku['nobuku']."'>Edit</a> | ";
                    echo "<a href='hapusbuku.php?nobuku=".$buku['nobuku']."'>Hapus</a>";
            echo "</td>";
        echo "</tr>";
    }		
    ?>
    <!-- akhir list table -->
        </table>
      <!-- akhir table -->

<!-- Modal input -->
<form action="inputdatabuku1.php" method="get">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Data Buku</h5>
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
              <label for="judulbuku" class="form-label">Judul Buku</label>
              <input type="text" class="form-control" placeholder="Judul Buku" name="judulbuku">
            </div>

            <div class="col-12">
              <label for="pengarang" class="form-label">Pengarang Buku</label>
              <input type="text" class="form-control" placeholder="Nama Pengarang" name="pengarang">
            </div>

            <div class="col-sm-6">
                  <label for="penerbit" class="form-label">Penerbit</label>
                  <input type="text" class="form-control" placeholder="Nama Penerbit" name="penerbit">
            </div>

            <div class="col-sm-6 ">
              <label for="tahunterbit" class="form-label">Tahun Terbit Buku</label>
              <input type="date" class="form-control" placeholder="yy-mm-ddd" name="tahunterbit">
            </div>

            <div class="col-sm-6">
                <label for="statusbuku">Status Buku</label>
                <select class="custom-select d-block w-100" style="height: 35px;" name="statusbuku">
                  <option>Status</option>
                  <option>Ada</option>
                  <option>Dipinjam</option>
                </select>
            </div>

            <div class="col-sm-6 mb-3">
                <label for="jenisbuku">Jenis Buku</label>
                <select class="custom-select d-block w-100" style="height: 35px;" name="jenisbuku">
                  <option>Status</option>
                  <option>Fantasy</option>
                  <option>Scifi</option>
                  <option>Teknologi</option>
                  <option>Bisnis</option>
                  <option>Mesin</option>
                  <option>Keuangan</option>
                  <option>Biografi</option>
                  <option>Novel</option>
                </select>
            </div>              
      <!-- isi modal -->
      </div>
      <div class="modal-footer">
        <!-- Button trigger modal CRUD -->
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="savebuku">Save changes</button>
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


