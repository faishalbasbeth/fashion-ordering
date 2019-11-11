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
          <a class="navbar-brand" href="?controller=b_terbaik&action=BterbaikAdmin">Fauzia Collection</a>
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
            <li class="active"><a href="?controller=b_terbaik&action=BterbaikAdmin">Data Busana Terbaik</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Data Busana Terbaik</h1>

          <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-md-offset-0">
        <a href="?controller=b_terbaik&action=tampilAddBterbaik"><button class="btn btn-primary bold">Tambah Busana Terbaik</button></a>
      <br><br>

      <table class="table table-striped table-bordered">
        <thead class="danger">
          
          <th>no</th>
          <th>nama pemesan</th>
          <th>alamat pemesan</th>
          <th>bulan pesanan</th>
          <th>gambar</th>
          <th width="190px;">Aksi</th>
          <?php $i=1; ?>
          <?php foreach ($posts as $post) {
            ?>
          
        </thead>

        <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo $post->nama_p; ?></td>
          <td><?php echo $post->alamat_p; ?></td>
          <td><?php echo $post->bulan_p; ?></td>
          <td align="center"><img src="<?php echo $post->gambar; ?>"><br></td>
          <!-- <td align="center"><img src="bt.png"><br></td> -->
          <td>

            <a href="?controller=b_terbaik&action=deleteBterbaik&id_b_terbaik=<?php echo $post->id_b_terbaik ?>"><button class="btn btn-danger bold">Hapus</button></a>
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