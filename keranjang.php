<?php 
    session_start();
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
    <title>Keranjang</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <a style="margin-left: 5%; font-family: poppins;" class="navbar-brand mb-0 h1" href="home.php">Database peminjaman buku</a>
    <a style="margin-right: 5%; font-family: poppins;" class="btn btn-outline-light btn-sm" href="logout.php" role="button">Log Out</a>
</nav>
    <center style="font-family: poppins; margin-top: 10%;">
    <h1>Keranjang</h1>
    <table class="table table-sm" style="width: 80%; margin: 20px;">
        <a class="btn btn-outline-dark" href="listbuku.php" role="button"><i class="bi bi-plus"></i> Tambah Data Baru</a>
    <br>
    <br>
    <?php 
        if(!empty($_SESSION["keranjang"])){
    ?>
        <thead>
        <tr>
            <th>Id</th>
            <th>Nama Buku</th>
            <th>Harga Denda</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <?php 
        $no = 1;
        $subtotal = 0;
        $grandtotal = 0;
        foreach($_SESSION["keranjang"] as $keranjang=>$val){
            $subtotal=$val["harga_denda"] * $val["jumlah"];
            ?>
            <tr>
                <td><?php echo $no++; ?>.</td>
                <td><?php echo $val["nama_buku"] ?></td>
                <td><?php echo "Rp " .number_format($val["harga_denda"], 0, ',', '.') ?></td>
                <td><?php echo $val["jumlah"] ?></td>
                <td><?php echo "Rp " .number_format($subtotal, 0, ',', '.') ?></td>
                <td>
                    <a class='btn btn-outline-dark btn-sm' href="hapuskeranjang.php?kode_buku=<?php echo $keranjang ?>"><i class="bi bi-x-lg"></i></i> Batal</a>
                </td>
            </tr>
        <?php
        $grandtotal +=$subtotal;
        }
        ?>
        <tr>
            <th colspan="4">Grand Total</th>
            <th><?php echo "Rp " .number_format($grandtotal, 0, ',', '.') ?></th>
            <th></th>
        </tr>
        
        </table>
        <a href="tambahtransaksi.php?total=<?php echo $grandtotal ?>" style="color: #292b2c; text-decoration: none;">Data</a>
    <?php
        }else{
            echo "Keranjang kosong!";
        }
    ?>
    
    
</body>
</html>