<?php
session_start();
if(empty($_SESSION['username']) and empty($_SESSION['password'])){
    echo '
    <center>
    <br><br><br>
    <b>Anda telah keluar dari system</b>
    <b>Silahkan login kembali</b>
    <br>
    <br>
    <br>
    <a href="index.php" title="klik gambar untuk kembali login">
    <img src="img/key-login.png" height="100px" width="100px"></img>
    </a>
    </center>';
} else {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:Dashboard:.</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
     integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
     crossorigin="anonymous">
     <link rel="stylesheet" href="css2/style.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar" style="background-color: #e3f2fd;">
    <div class="navbar-brand">
        <a class="navbar-brand" href="dashboard.php">GIS UMKM JOGJA 046</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    </div>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto">
            <li class="nav-item">
        <a class="nav-link" href="dashboard.php">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="modul/kategori/kategori.php">Kategori UMKM</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="modul/umkm/umkm.php">UMKM</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Akun
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="modul/password/password.php">Ganti Password</a>
        <a class="dropdown-item" href="logout.php" onclick="return confirm('Do You Want Logout?')">Logout</a>
    </div>
    </li>
    </ul>
    <div class="formsearch">
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" type="submit" value="submit">Search</button>
    </form>
    </div>
    </nav>
    <br/>    
    <a class="btn btn-primary" href="tambah_kategori.php" role="button">[+]Tambah Data Kategori</a>   
    <br></br>
    <table class="table mt-4">
    <thead class="table-dark">
      <tr>
        <td>No</td>
        <td>Nama Kategori</td>
        <td>Aksi</td>
      </tr>
    </thead>
    <tbody>
    
    <?php

    require_once "../../koneksi.php";

    $query = mysqli_query($koneksi, "SELECT * FROM tbkategori_3183111046");
    $no = 1;
    while($get = mysqli_fetch_array($query)){
      ?>

    <tr>
      <th><?= $no++ ?></th>
      <td><?= $get['nama_kategori'] ?></td>
      <td><a class="btn btn-success" href="edit_kategori.php?id=<?= $get['id_kategori'] ?>" role="button">Edit</a>
      <a class="btn btn-danger" href="hapus_kategori.php?id=<?= $get['id_kategori'] ?>" role="button" onclick="return confirm('Yakin Akan Dihapus ?')">Hapus</a>
      </td>
    </tr>

    <?php  
    }
    ?>
    

    </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready( function () {
    $('#tabelUMKM').DataTable();
} );
</script>

</body>

</html>

<?php
 }
?>