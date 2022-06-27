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
</head>
<body>
    <h2 style="text-align: center;">Input Data Buku</h2>
    <form action="inputdatabuku1.php" method="get">
    <div class="container" style="margin-top: 20px;">
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
            <button type="submit" class="btn btn-primary" name="savebuku">Save changes</button>             
      <!-- isi modal -->
      </div>
    </div>
  </form>
</body>
</html>