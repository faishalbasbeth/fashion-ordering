<?php  
	/**
	* 
	*/
	class Bahan
	{
		public $id_bahan;
		public $nama;
		public $warna;
		public $stok;
		public $harga;

		function __construct($id_bahan,$nama,$warna,$stok,$harga)
		{
			# code...
			$this->id_bahan=$id_bahan;
			$this->nama=$nama;
			$this->warna=$warna;
			$this->stok=$stok;
			$this->harga=$harga;
		}

		public static function showAllBahan(){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM data_bahan");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Bahan($post['id_bahan'],$post['nama'],$post['warna'],$post['stok'],$post['harga']
				);
		}


		return $list;
	}

	public static function deleteBahan($id_bahan){
		$db = DB::getInstance();

		$req = $db->query("DELETE from data_bahan where id_bahan=$id_bahan
			");

		return $req;
	}

	public static function addDataBahan($nama,$warna,$stok,$harga){
		$db = DB::getInstance();

		$req = $db->query("INSERT INTO data_bahan (id_bahan, nama, warna, stok, harga) 
			VALUES (NULL, '".$nama."', '".$warna."', '".$stok."', '".$harga."');");

		return $req;
	}

	public static function editBahan($id_bahan){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM data_bahan where id_bahan=$id_bahan");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Bahan($post['id_bahan'],$post['nama'],$post['warna'],$post['stok'],$post['harga']
				);
		}


		return $list;
	}

	public static function editDataBahan($nama,$warna,$stok,$harga,$id_bahan){
		$db = DB::getInstance();

		$req = $db->query("UPDATE data_bahan set nama='$nama', warna='$warna', stok='$stok', harga='$harga'
			where id_bahan='$id_bahan'
			");



		return $req;
	}

	}
?>