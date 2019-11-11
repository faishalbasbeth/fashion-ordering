<?php 
Class BterbaikController{

	public function BterbaikAdmin(){
		$posts=Bterbaik::showAllBterbaik();
		require_once('views/pages/busana_terbaik_admin.php');
	}

	public function addDataBterbaik(){
		$posts = Bterbaik::addDataBterbaik($_GET["nama_p"],$_GET["alamat_p"],$_GET["bulan_p"],$_GET["gambar"]);
		header("location:index.php?controller=b_terbaik&action=BterbaikAdmin");
		
	}

	public function tampilAddBterbaik(){
		$posts=Bterbaik::showAllBterbaik();
		require_once("views/pages/tambah_busana_terbaik.php");
	}

	public function deleteBterbaik(){
		$posts=Bterbaik::deleteBterbaik($_GET["id_b_terbaik"]);
		header("location:index.php?controller=b_terbaik&action=BterbaikAdmin");
	}


}

?>
