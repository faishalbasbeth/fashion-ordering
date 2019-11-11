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
          <a class="navbar-brand" href="?controller=pemesanan&action=pemesananPenjahit">Fauzia Collection</a>
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
            <li class="active"><a href="?controller=pemesanan&action=pemesananPenjahit">Pemesanan</a></li>
            <li class=""><a href="?controller=bahan&action=home">Data Bahan</a></li>
            <li class=""><a href="?controller=b_pembayaran&action=BpembayaranPenjahit">Bukti Pembayaran</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Pemesanan</h1>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>ID pesanan</th>
                  <th>Nama</th>
                  <th>No HP</th>
                  <th>Alamat</th>
                  <th>Jenis</th>
                  <th>Model</th>
                  <th>Id bahan</th>
                  <th>Ukuran</th>
                  <th>Banyak</th>
                  <th>Tanggal</th>
                  <th>Bank</th>
                  <th>Nama Rekening</th>
                  <th>No Rekening</th>
                  <th>Total Harga</th>
              <?php $i=1; ?>
          <?php foreach ($posts as $post) {
            ?>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $post->id_pesanan; ?></td>
                  <td><?php echo $post->nama; ?></td>
                  <td><?php echo $post->no_hp; ?></td>
                  <td><?php echo $post->alamat; ?></td>
                  <td><?php echo $post->jenis_pesanan; ?></td>
                  <td><?php echo $post->model_pesanan; ?></td>
                  <td><?php echo $post->id_bahan; ?></td>
                  <td><?php echo $post->ukuran; ?></td>
                  <td><?php echo $post->banyak_pesanan; ?></td>
                  <td><?php echo $post->tanggal_pesanan; ?></td>
                  <td><?php echo $post->bank; ?></td>
                  <td><?php echo $post->nama_rekening; ?></td>
                  <td><?php echo $post->no_rekening; ?></td>
                  <td><?php echo $post->total_harga; ?></td>

                </tr> <?php $i++;} ?>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  
    <script src="home/js/bootstrap.min.js"></script>

</body>
</html>