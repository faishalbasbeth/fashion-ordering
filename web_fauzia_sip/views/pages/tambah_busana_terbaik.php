<?php
if (!isset($_SESSION['login_user'])) {
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Busana Terbaik</title>

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
          <a class="navbar-brand" href="?controller=b_terbaik&action=tampilAddBterbaik">Fauzia Collection</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
<!--             <li><a href="#"><?php echo $_SESSION['login_user'];?></a></li> -->
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
            <li class="active"><a href="?controller=b_terbaik&action=tampilAddBterbaik">Tambah Busana</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Data Busana</h1>

          <form>
            <form class="form-horizontal" method="GET">
              <form class="form-horizontal" method="FILES">
                <input type="hidden" name="controller" value="b_terbaik">
                <input type="hidden" name="action" value="addDataBterbaik">

          	<div class="row">
              <div class="nyoba">
          		<div class="col-lg-5">
          			<div class="input-group">
          				<span class="input-group-addon" id="namapemesan">Nama Pemesan</span>
          				<input type="text" class="form-control" name="nama_p" placeholder="Faishal Basbeth" aria-describedby="namapemesan1">
          			</div>
          		</div>
              </div>
          	</div>
          </br>
          	<div class="row">
          		<div class="col-lg-6">
          			<div class="input-group">
          				<span class="input-group-addon" id="alamatpemesan">Alamat Pemesan</span>
          				<input type="text" class="form-control" name="alamat_p" placeholder="Lumajang, Lumajang, Jl. Manga no 2 Kepuharjo, 89765" aria-describedby="alamatpemesan1">
          			</div>
          		</div>
          	</div>
          </br>
          	<div class="row">
          		<div class="col-lg-5">
          			<div class="input-group">
          				<span class="input-group-addon" id="bulanpesanan">Bulan Pesanan</span>
          				<input type="text" class="form-control" name="bulan_p" placeholder="November" aria-describedby="bulanpesanan1">
          			</div>
          		</div>
      		</div>
          </br>

          <div class="row">
              <div class="col-lg-3">
                <div class="form-group">
                  <label for="gambarbusana">Gambar Busana</label>
                  <input type="File" name="gambar" id="gambarbusana">
                </div>
              </div>
            </div>

          </br>
        </br>

              <button class="btn btn-primary">Simpan</button>
               <a href="?controller=b_terbaik&action=BterbaikAdmin" class="btn btn-danger">Batal</a>
              


          </form>
        </div>
      </div>
    </div>
  
    <script src="home/js/bootstrap.min.js"></script>

</body>
</html>