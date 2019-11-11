<?php  
	/**
	* 
	*/
	class Bpembayaran
	{
		public $id_b_pembayaran;
		public $id_pesanan;
		public $b_pembayaran;
		public $nama;

		function __construct($id_b_pembayaran,$id_pesanan,$b_pembayaran,$nama)
		{
			# code...
			$this->id_b_pembayaran=$id_b_pembayaran;
			$this->id_pesanan=$id_pesanan;
			$this->b_pembayaran=$b_pembayaran;
			$this->nama=$nama;
		}

		public static function showAllBpembayaran(){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM b_pembayaran");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Bpembayaran($post['id_b_pembayaran'],$post['id_pesanan'],$post['b_pembayaran'],$post['nama']
				);
		}


		return $list;
	}


	public static function addDataBpembayaran($id_pesanan,$b_pembayaran,$nama){
		$db = DB::getInstance();

		$req = $db->query("INSERT INTO b_pembayaran (id_b_pembayaran, id_pesanan, b_pembayaran, nama) 
			VALUES (NULL, '".$id_pesanan."', '".$b_pembayaran."', '".$nama."');");

		return $req;
	}

	public static function showAllBpembayaranC(){
		$list=[];

		$db = DB::getInstance();

		$nama=$_SESSION['login_user'];

		$req = $db->query("SELECT * FROM b_pembayaran where nama = '$nama' ");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Bpembayaran($post['id_b_pembayaran'],$post['id_pesanan'],$post['b_pembayaran'],$post['nama']
				);
		}


		return $list;
	}

	}
?>