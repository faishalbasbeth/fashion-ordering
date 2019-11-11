<?php  
	/**
	* 
	*/
	class Bterbaik
	{
		public $id_b_terbaik;
		public $nama_p;
		public $alamat_p;
		public $bulan_p;
		public $gambar;

		function __construct($id_b_terbaik,$nama_p,$alamat_p,$bulan_p,$gambar)
		{
			# code...
			$this->id_b_terbaik=$id_b_terbaik;
			$this->nama_p=$nama_p;
			$this->alamat_p=$alamat_p;
			$this->bulan_p=$bulan_p;
			$this->gambar=$gambar;
		}

		public static function showAllBterbaik(){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM b_terbaik");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Bterbaik($post['id_b_terbaik'],$post['nama_p'],$post['alamat_p'],$post['bulan_p'],$post['gambar']
				);
		}


		return $list;
	}

	public static function deleteBterbaik($id_b_terbaik){
		$db = DB::getInstance();

		$req = $db->query("DELETE from b_terbaik where id_b_terbaik=$id_b_terbaik
			");

		return $req;
	}

	public static function addDataBterbaik($nama_p,$alamat_p,$bulan_p,$gambar){
		$db = DB::getInstance();

		$req = $db->query("INSERT INTO b_terbaik (id_b_terbaik, nama_p, alamat_p, bulan_p, gambar) 
			VALUES (NULL, '".$nama_p."', '".$alamat_p."', '".$bulan_p."', '".$gambar."');");

		return $req;
	}

	}
?>