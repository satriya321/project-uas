<?php include("config.php"); 
    
    if(!isset($_GET['nobuku']) ){
      echo "Buku atau anggota tidak didapatkan  ";
    }
    
    $nobuku = $_GET['nobuku'];
    
    $query = mysqli_query($db, "SELECT * FROM tbl_pinjam WHERE nobuku='$nobuku'");
    $pinjam = mysqli_fetch_assoc($query);
    
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

<h2 style="text-align: center; padding-top: 50px;" id="textjuduledit">Update Data Pinjaman</h2>
    <form action="editdatapinjam.php" method="get">
    <div class="container" style="margin-top: 20px;">
    <div class="row g-3">
            <div class="col-sm-6">
              <label for="nobuku" class="form-label">No Buku</label>
              <input type="text" class="form-control" placeholder="Nomor Buku" name="nobuku" value="<?php echo $pinjam['nobuku'] ?>">
            </div>

            <div class="col-sm-6">
              <label for="nobuku" class="form-label">No Anggota</label>
              <input type="text" class="form-control" placeholder="Nomor Anggota" name="noanggota" value="<?php echo $pinjam['noanggota'] ?>">
            </div>
            
            <div class="col-sm-6">
              <label for="nobuku" class="form-label">Nama Anggota</label>
              <input type="text" class="form-control" placeholder="Nomor Anggota" name="namaanggota" value="<?php echo $pinjam['namaanggota'] ?>">
            </div>

            <div class="col-sm-6">
              <label for="judulbuku" class="form-label">Judul Buku</label>
              <input type="text" class="form-control" placeholder="Judul Buku" name="judulbuku" value="<?php echo $pinjam['judulbuku'] ?>">
            </div>

            <div class="col-sm-6">
              <label for="pengarang" class="form-label">Tanggal Pinjam</label>
              <input type="date" class="form-control" placeholder="yy-mm-ddd" name="tanggalpinjam" value="<?php echo $pinjam['tanggalpinjam'] ?>">
            </div>

            <div class="col-sm-6 ">
              <label for="tahunterbit" class="form-label">Tanggal Kembali</label>
              <input type="date" class="form-control" placeholder="yy-mm-ddd" name="tanggalkembali" value="<?php echo $pinjam['tanggalkembali'] ?>">
            </div>

            <div class="col-sm-6 ">
              <label for="tahunterbit" class="form-label">Denda</label>
              <input type="text" class="form-control" placeholder="Rp." name="denda" value="<?php echo $pinjam['denda'] ?>">
            </div>

            <a href="listpinjaman.php" class="btn btn-secondary" role="button" aria-pressed="true" style="margin-left: 15px;">Back</a>
            <button type="submit" class="btn btn-primary" name="updatepinjam" style="margin-left: 15px;" >Save changes</button>        
      <!-- isi modal -->
      </div>
    </div>
  </form>
</body>
</html>


