<?php 
Class BpembayaranController{

	public function Bpembayaran(){
		$posts=Bpembayaran::showAllBpembayaranC();
		require_once("views/pages/bukti_pembayaran.php");
	}

	public function tampilAddBpembayaran(){
		$posts=Pemesanan::showAllPemesananC();
		require_once("views/pages/tambah_bukti_pembayaran.php");
	}

	public function addDataBpembayaran(){
		$posts = Bpembayaran::addDataBpembayaran($_GET["id_pesanan"],$_GET["b_pembayaran"],$_GET["nama"]);
		header("location:index.php?controller=b_pembayaran&action=Bpembayaran");
		
	}

	public function BpembayaranPenjahit(){
		$posts=Bpembayaran::showAllBpembayaran();
		require_once("views/pages/bukti_pembayaran_penjahit.php");
	}


}

?>
