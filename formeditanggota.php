<?php include("config.php"); 
    
    if(!isset($_GET['noanggota'])){
      echo "NO Anggota Tidak didaptkan";
    }
    $noanggota = $_GET['noanggota'];
    
    $query = mysqli_query($db, "SELECT * FROM tbl_anggota WHERE noanggota='$noanggota'");
    $anggota = mysqli_fetch_assoc($query);
    
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

<h2 style="text-align: center; padding-top: 50px;" id="textjuduledit">Update Data Anggota</h2>
    <form action="editdataanggota1.php" method="get">
    <div class="container" style="margin-top: 20px;">
    <div class="row g-3">
            <div class="col-sm-6">
              <label for="noanggota" class="form-label">No Anggota Perpus</label>
              <input type="text" class="form-control" placeholder="No Anggota" name="noanggota" value="<?php echo $anggota['noanggota'] ?>">
            </div>

            <div class="col-sm-6">
              <label for="namaanggota" class="form-label">Nama Anggota</label>
              <input type="text" class="form-control" placeholder="Nama Anggota Perpus" name="namaanggota" value="<?php echo $anggota['namaanggota'] ?>">
            </div>

            <div class="col-sm-6">
              <label for="tempatlahir" class="form-label">Tempat Lahir Anggota</label>
              <input type="text" class="form-control" placeholder="Tempat Lahir Anggota" name="tempatlahir" value="<?php echo $anggota['tempatlahir'] ?>">
            </div>

            <div class="col-sm-6 ">
              <label for="teleponanggota" class="form-label">No Telpon Anggota</label>
              <input type="text" class="form-control" placeholder="No Telpon" name="telponanggota" value="<?php echo $anggota['telponanggota'] ?>">
            </div>

            <div class="col-sm-12 ">
              <label for="alamat" class="form-label">Alamat Anggota</label>
              <input type="text" class="form-control" placeholder="Alamat Anggota" name="alamat" value="<?php echo $anggota['alamat'] ?>">
            </div>

            <div class="col-12 mb-3">
                <label for="statusanggota">Status Keanggotaan</label>
                <select class="custom-select d-block w-100" style="height: 35px;" name="statusanggota" value="<?php echo $anggota['statusanggota'] ?>">
                  <option>Status</option>
                  <option>Aktif</option>
                  <option>Tidak Aktif</option>
                </select>
            </div>
            <a href="listanggota.php" class="btn btn-secondary" role="button" aria-pressed="true" style="margin-left: 15px;">Back</a>
            <button type="submit" class="btn btn-primary" name="updateanggota" style="margin-left: 15px;" >Save changes</button>        
      <!-- isi modal -->
      </div>
    </div>
  </form>
</body>
</html>