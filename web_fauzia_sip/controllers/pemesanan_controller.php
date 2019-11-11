<?php 
Class PemesananController{

	public function pemesananPenjahit(){
		$posts=Pemesanan::showAllPemesanan();
		require_once('views/pages/pemesanan_penjahit.php');
	}

	public function pemesanan(){
		$posts=Pemesanan::showAllPemesananC();
		require_once('views/pages/pemesanan.php');
	}

	public function tampilAddPemesanan(){
		$posts=Bahan::showAllBahan();
		require_once('views/pages/tambah_pemesanan.php');
	}

	public function addDataPemesanan(){
		$posts = Pemesanan::addDataPemesanan($_GET["nama"],$_GET["no_hp"],$_GET["alamat"],$_GET["jenis_pesanan"],$_GET["model_pesanan"],$_GET["id_bahan"],$_GET["ukuran"],$_GET["banyak_pesanan"],$_GET["tanggal_pesanan"],$_GET["bank"],$_GET["nama_rekening"],$_GET["no_rekening"],$_GET["total_harga"]);
		header("location:index.php?controller=pemesanan&action=pemesanan");
		
	}


}

?>
