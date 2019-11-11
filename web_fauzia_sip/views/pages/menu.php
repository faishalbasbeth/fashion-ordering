<!DOCTYPE html>
<html>
<head>

	<title>Menu</title>

	<link href="home/css/bootstrap.min.css" rel="stylesheet">
	<link href="home/css/carousel.css" rel="stylesheet">
</head>
<body>
	<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">z
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="?controller=menu&action=menu">Fauzia Collection</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="?controller=menu&action=menu">Home</a></li>
                <li><a href="?controller=login&action=login">Log in</a></li>
                <li><a href="?controller=signup&action=tampilAddSignup">Sign up</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div id="bacground" class="item active" style="background-image: url('w2.png'); height: 610px" draggable="true">
          <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Pemesanan Busana</h1>
              <p>Pemesanan busana dapat dilakukan melalui website yang telah ditentukan, anda dapat memesan busana yang anda inginkan</p>
              <p><a class="btn btn-lg btn-primary" href="?controller=login&action=login" role="button">Pemesanan Busana</a></p>
            </div>
          </div>
        </div>
<!--         <div id="bacground" class="item" style="background-image: url(a2.png); height: 610px" draggable="true">
          <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Pembelian Busana</h1>
              <p>Pembelian busana dapat dilakukan melalui website yang telah ditentukan, anda dapat membeli busana yang anda inginkan</p>
              <p><a class="btn btn-lg btn-primary" href="?controller=login&action=login" role="button">Pembelian Busana</a></p>
            </div>
          </div>
        </div> -->
        <div id="bacground" class="item" style="background-image: url(f2.png); height: 610px" draggable="true">
          <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Busana Terbaik</h1>
              <p>Fauzia Collection ini menyajikan busana busana terbaik yang telah anda pesan selama 3 bulan sekali nanti akan diupload busana - busana
              terbaik yang telah dipilih oleh Fauzia Collection silahkan anda lihat busana - terbaik dalam bulan ini!</p>
              <p><a class="btn btn-lg btn-primary" href="?controller=menu&action=BusanaTerbaik" role="button">Busana Terbaik</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>


    </div>

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
  </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="home/js/bootstrap.min.js"></script>

</body>
</html>