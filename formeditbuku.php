<?php include("config.php"); 
    
    if(!isset($_GET['nobuku']) ){
      echo "ID obat tidak didapatkan  ";
    }
    //ambil id dari query string/link
    $nobuku = $_GET['nobuku'];
    
    $query = mysqli_query($db, "SELECT * FROM tbl_buku WHERE nobuku='$nobuku'");
    $buku = mysqli_fetch_assoc($query);
    
    // jika data yang di-edit tidak ditemukan
    if( mysqli_num_rows($query) < 1 ){ //cek data di tabel
        die("data tidak ditemukan...");
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
</head>
<body>

<h2 style="text-align: center; padding-top: 50px;" id="textjuduledit">Update Data Buku</h2>
    <form action="editdatabuku1.php" method="get">
    <div class="container" style="margin-top: 20px;">
    <div class="row g-3">
            <div class="col-sm-6">
              <label for="nobuku" class="form-label">No Buku</label>
              <input type="text" class="form-control" name="nobuku" value="<?php echo $buku['nobuku'] ?>">
            </div>

            <div class="col-sm-6">
              <label for="judulbuku" class="form-label">Judul Buku</label>
              <input type="text" class="form-control" placeholder="Judul Buku" name="judulbuku" value="<?php echo $buku['judulbuku'] ?>">
            </div>

            <div class="col-12">
              <label for="pengarang" class="form-label">Pengarang Buku</label>
              <input type="text" class="form-control" placeholder="Nama Pengarang" name="pengarang" value="<?php echo $buku['pengarang'] ?>">
            </div>

            <div class="col-sm-6">
                  <label for="penerbit" class="form-label">Penerbit</label>
                  <input type="text" class="form-control" placeholder="Nama Penerbit" name="penerbit" value="<?php echo $buku['penerbit'] ?>">
            </div>

            <div class="col-sm-6 ">
              <label for="tahunterbit" class="form-label">Tahun Terbit Buku</label>
              <input type="date" class="form-control" placeholder="yy-mm-ddd" name="tahunterbit" value="<?php echo $buku['tahunterbit'] ?>">
            </div>

            <div class="col-sm-6">
                <label for="statusbuku">Status Buku</label>
                <select class="custom-select d-block w-100" style="height: 35px;" name="statusbuku" value="<?php echo $buku['statusbuku'] ?>">
                  <option>Status</option>
                  <option>Ada</option>
                  <option>Dipinjam</option>
                </select>
            </div>

            <div class="col-sm-6 mb-3">
                <label for="jenisbuku">Jenis Buku</label>
                <select class="custom-select d-block w-100" style="height: 35px;" name="jenisbuku" value="<?php echo $buku['jenisbuku'] ?>">
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
            <a href="listbuku.php" class="btn btn-secondary" role="button" aria-pressed="true" style="margin-left: 15px;">Back</a>
            <button type="submit" class="btn btn-primary" name="updatebuku" style="margin-left: 15px;" >Save changes</button>             
      <!-- isi modal -->
      </div>
    </div>
  </form>
</body>
</html>