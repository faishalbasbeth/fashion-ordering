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
          <a class="navbar-brand" href="?controller=pemesanan&action=tampilAddPemesanan">Fauzia Collection</a>
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
            <li class=""><a href="?controller=pemesanan&action=pemesanan">Pemesanan</a></li>
            <li class="active"><a href="?controller=pemesanan&action=tampilAddPemesanan">Tambah Data</a></li>
            <li class=""><a href="?controller=b_pembayaran&action=Bpembayaran">Bukti Pembayaran</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Pemesanan</h1>

          <form class="form-horizontal" method="GET">
            <input type="hidden" name="controller" value="pemesanan">
            <input type="hidden" name="action" value="addDataPemesanan">
             <input class="hidden" name="nama" value="<?php echo $_SESSION['login_user'];?>"></input>
          	<div class="row">
              <div class="nyoba">
          		<div class="col-lg-5">
<!--           			<div class="input-group">
          				<span class="input-group-addon" id="namapemesan">Nama</span>
          				<input type="text" class="form-control" name="nama" placeholder="Faishal Basbeth" aria-describedby="namapemesan1">
          			</div> -->
          		</div>
              </div>
          	</div>
          </br>
          	<div class="row">
          		<div class="col-lg-5">
          			<div class="input-group">
          				<span class="input-group-addon" id="nopemesan">No HP</span>
          				<input type="Nomor" class="form-control" name="no_hp" placeholder="81123456789" aria-describedby="nopemesan1">
          			</div>
          		</div>
      		</div>
          </br>
        <div class="row">
              <div class="col-lg-6">
                <div class="input-group">
                  <span class="input-group-addon" id="alamatpemesan">Alamat</span>
                  <input type="text" class="form-control" name="alamat" placeholder="Kota, Kecamatan, Alamat, Kode Pos" 
                  aria-describedby="alamatpemesan1">
                </div>
              </div>
            </div>
          </br>
          	<div class="input-group">
          		<label for="jenispesanan">Jenis Pesanan : </label>
        <select name="jenis_pesanan">
  					<option nama="jenispesanan" value="baju">Baju</option>
  					<option nama="jenispesanan" value="celana">Celana</option>
				</select>
          	</div>
          </br>
          	<div class="row">
          		<div class="col-lg-4">
          			<div class="input-group">
          				<span class="input-group-addon" id="modelpesanan">Model Pesanan</span>
          				<input type="text" class="form-control" name="model_pesanan" placeholder="Hem" aria-describedby="modelpesanan1">
          			</div>
          		</div>
          	</div>
          </br>
        
          <h3 class="sub-header">Tabel Bahan</h3>
          <div class="row">
            <div class="col-lg-5">
                <div class="table-responsive">
                  <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>id bahan</th>
                      <th>nama</th>
                      <th>warna</th>
                      <th>stok</th>
                      <th>harga</th>
                    </tr>
                      <?php $i=1; ?>
                      <?php foreach ($posts as $post) {
                         ?> 
                  </thead>
                  <tbody>
                    <tr>
                      <td><?php echo $post->id_bahan; ?></td>
                      <td><?php echo $post->nama; ?></td>
                      <td><?php echo $post->warna; ?></td>
                      <td><?php echo $post->stok; ?></td>
                      <td><?php echo $post->harga; ?></td>
                    </tr> <?php $i++;} ?>
                  </tbody>
                  </table>
                  
                </div>
                
              </div>
              </div>
            
            <div>
              <!-- <input type="radio" name="bahan" value="1"/> 1<br/>
              <input type="radio" name="bahan" value="2"/> 2<br/>
              <input type="radio" name="bahan" value="3"/> 3<br/> -->

              <?php foreach ($posts as $post) { ?>
                               <input type="radio" name="id_bahan" id="id_bahan" value="<?php echo $post->id_bahan; ?>" required><?php echo $post->id_bahan; ?>
                               <br>
                               <?php } ?>
            </div>
            </br>
            <div class="input-group">
              <label for="ukuran">Ukuran : </label>
        <select name="ukuran">
            <option nama="ukuran" value="s">S</option>
            <option nama="ukuran" value="m">M</option>
            <option nama="ukuran" value="l">L</option>
            <option nama="ukuran" value="xl">XL</option>
            <option nama="ukuran" value="xxl">XXL</option>
        </select>
            </div>
          </br>
          	<div class="row">
          		<div class="col-lg-3">
          			<div class="input-group">
          				<span class="input-group-addon" id="banyakpesanan">Banyak Pesanan</span>
          				<input type="number" min="0" class="form-control" name="banyak_pesanan" placeholder="1" aria-describedby="banyakpesanan1">
          			</div>
          		</div>
          	</div>
          </br>
          <div class="row">
              <div class="col-lg-4">
                <div class="input-group">
                  <span class="input-group-addon" id="tanggalpesanan">Tanggal Pesanan</span>
                  <input type="date" class="form-control" name="tanggal_pesanan" placeholder="2017/11/06" aria-describedby="tanggalpesanan1">
                </div>
              </div>
            </div>
          </br>
          <div class="input-group">
              <label for="bank">Bank : </label>
        <select name="bank">
            <option nama="ukuran" value="BCA">BCA</option>
            <option nama="ukuran" value="MANDIRI">MANDRI</option>
            <option nama="ukuran" value="BRI">BRI</option>
            <option nama="ukuran" value="BNI">BNI</option>
        </select>
            </div>
          </br>
          <div class="row">
              <div class="col-lg-4">
                <div class="input-group">
                  <span class="input-group-addon" id="nrekeningpesanan">Nama Rekening</span>
                  <input type="text" class="form-control" name="nama_rekening" placeholder="Faishal Basbeth" aria-describedby="nrekeningpesanan1">
                </div>
              </div>
            </div>
          </br>
          <div class="row">
              <div class="col-lg-4">
                <div class="input-group">
                  <span class="input-group-addon" id="norekeningpesanan">No Rekening</span>
                  <input type="text" class="form-control" name="no_rekening" placeholder="123456789111" aria-describedby="norekeningpesanan1">
                </div>
              </div>
            </div>
          </br>

          </br>

              <!-- <a href="#" onclick="return confirm('Selamat Anda Berhasil Memesan, Terimakasi Telah Memesan, Lihat data yang anda inputkan di menu pemesanan, dan biaya bisa anda kirim melalui bank yang anda pilih dengan rekening 123-456-789-10111-2 atas nama Fauzia, dan kirim bukti pembayaran ke email fauzia@yahoo.com, barang akan dikirim ke alamat yang anda inputkan. Terimakasih');"><button class="btn btn-primary">Simpan</button></a> -->
              <a href="" onclick="return confirm('Selamat Anda Berhasil Memesan, Terimakasi Telah Memesan, Lihat data yang anda inputkan di menu pemesanan, dan biaya bisa anda kirim melalui bank yang anda pilih dengan rekening 123-456-789-10111-2 atas nama Fauzia, dan kirim bukti pembayaran ke menu bukti pembayaran, barang akan dikirim ke alamat yang anda inputkan. Terimakasih');"><button class="btn btn-primary">Simpan</button></a>
              <a href="?controller=pemesanan&action=pemesanan" class="btn btn-danger">Batal</a>
              


          </form>
        </div>
      </div>
    </div>
  
    <script src="home/js/bootstrap.min.js"></script>

</body>
</html>