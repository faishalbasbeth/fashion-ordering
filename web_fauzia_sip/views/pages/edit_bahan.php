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
          <a class="navbar-brand" href="?controller=bahan&action=editBahan">Fauzia Collection</a>
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
            <li class="active"><a href="?controller=bahan&action=editBahan">Edit Bahan</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Data Bahan</h1>

          <form class="form-horizontal" method="GET">
            <?php foreach ($posts as $post){

         ?>
            <input type="hidden" name="controller" value="bahan">
            <input type="hidden" name="action" value="editDataBahan">
            <input type="hidden" name="id_bahan" value="<?php echo $post->id_bahan; ?>">
            <div class="row">
              <div class="nyoba">
              <div class="col-lg-5">
                <div class="input-group">
                  <span class="input-group-addon" id="namabahan">Nama</span>
                  <input type="text" class="form-control" name="nama" placeholder="Katun" value="<?php echo $post->nama ?>">
                </div>
              </div>
              </div>
            </div>
          </br>
            <div class="row">
              <div class="col-lg-5">
                <div class="input-group">
                  <span class="input-group-addon" id="warnabahan">Warna</span>
                  <input type="text" class="form-control" name="warna" placeholder="Merah" value="<?php echo $post->warna ?>">
                </div>
              </div>
            </div>
          </br>
            <div class="row">
              <div class="col-lg-5">
                <div class="input-group">
                  <span class="input-group-addon" id="stokbahan">Stok</span>
                  <input type="Nomor" class="form-control" name="stok" placeholder="10" value="<?php echo $post->stok ?>">
                </div>
              </div>
          </div>
          </br>
          
            <div class="row">
              <div class="col-lg-3">
                <div class="input-group">
                  <span class="input-group-addon" id="hargabahan">Harga</span>
                  <input type="Nomor" class="form-control" name="harga" placeholder="30000" value="<?php echo $post->harga ?>">
                </div>
              </div>
            </div>
          </br>
          </br>
        </br>

              <button class="btn btn-primary">Simpan</button>
              <button class="btn btn-danger">Batal</button>
              

              <?php } ?>
            </form>
        </div>
      </div>
    </div>
  
    <script src="home/js/bootstrap.min.js"></script>

</body>
</html>