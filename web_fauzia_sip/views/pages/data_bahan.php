<?php
if (!isset($_SESSION['login_user'])) {
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Pemesanan</title>

  <link href="home/css/bootstrap.min.css" rel="stylesheet">
  <link href="home/css/dashboard.css" rel="stylesheet">

</head>
<body>
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="?controller=bahan&action=home">Fauzia Collection</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><?php echo $_SESSION['login_user'];?></a></li>
            <li><a href="logout.php ?>">Log out</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <!-- <input type="text" class="form-control" placeholder="Search..."> -->
          </form>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class=""><a href="?controller=pemesanan&action=pemesananPenjahit">Pemesanan</a></li>
            <li class="active"><a href="?controller=bahan&action=home">Data Bahan</a></li>
            <li class=""><a href="?controller=b_pembayaran&action=BpembayaranPenjahit">Bukti Pembayaran</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Data Bahan</h1>

          <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-md-offset-0">
        <a href="?controller=bahan&action=tampilAddBahan"><button class="btn btn-primary bold">Tambah Bahan</button></a>
      <br><br>

      <table class="table table-striped table-bordered">
        <thead class="danger">
          
          <th>no</th>
          <th>id bahan</th>
          <th>nama</th>
          <th>warna</th>
          <th>stok</th>
          <th>harga</th>
          <th width="190px;">Aksi</th>
          <?php $i=1; ?>
          <?php foreach ($posts as $post) {
            ?>
          
        </thead>

        <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo $post->id_bahan; ?></td>
          <td><?php echo $post->nama; ?></td>
          <td><?php echo $post->warna; ?></td>
          <td><?php echo $post->stok; ?></td>
          <td><?php echo $post->harga; ?></td>
          <td>
            <a href="?controller=bahan&action=editBahan&id_bahan=<?php echo $post->id_bahan ?>"><button class="btn btn-success bold">Edit</button></a>
            <a href="?controller=bahan&action=deleteBahan&id_bahan=<?php echo $post->id_bahan ?>"><button class="btn btn-danger bold">Hapus</button></a>
          </td>
        </tr> <?php $i++;} ?>
        
      </tbody>
        
      </table>

    </div>
  </div>
</div>
  
    <script src="home/js/bootstrap.min.js"></script>

</body>
</html>