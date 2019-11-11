<?php 
Class BahanController{

	public function home(){
		$posts=Bahan::showAllBahan();
		require_once("views/pages/data_bahan.php");
		
	}

	public function deleteBahan(){
		$posts=Bahan::deletebahan($_GET["id_bahan"]);
		header("location:index.php?controller=bahan&action=home");
	}

	public function addDataBahan(){
		$posts = Bahan::addDataBahan($_GET["nama"],$_GET["warna"],$_GET["stok"],$_GET["harga"]);
		header("location:index.php?controller=bahan&action=home");
		
	}
	public function tampilAddBahan(){
		$posts=Bahan::showAllBahan();
		require_once("views/pages/tambah_bahan.php");
	}

	public function editBahan(){
		$posts=Bahan::editBahan($_GET["id_bahan"]);
		require_once("views/pages/edit_bahan.php");
	}
	public function editDataBahan(){
		$posts=Bahan::editDataBahan($_GET["nama"],$_GET["warna"],$_GET["stok"],$_GET["harga"],$_GET["id_bahan"]);
		header("location:index.php?controller=bahan&action=home");
	}


}

?>
