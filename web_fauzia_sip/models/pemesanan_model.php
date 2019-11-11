<?php  
	/**
	* 
	*/
	class Pemesanan
	{
		public $id_pesanan;
		public $nama;
		public $no_hp;
		public $alamat;
		public $jenis_pesanan;
		public $model_pesanan;
		public $id_bahan;
		public $ukuran;
		public $banyak_pesanan;
		public $tanggal_pesanan;
		public $bank;
		public $nama_rekening;
		public $no_rekening;
		public $total_harga;

		function __construct($id_pesanan,$nama,$no_hp,$alamat,$jenis_pesanan,$model_pesanan,$id_bahan,$ukuran,$banyak_pesanan,$tanggal_pesanan,$bank,$nama_rekening,$no_rekening,$total_harga)
		{
			# code...
			$this->id_pesanan=$id_pesanan;
			$this->nama=$nama;
			$this->no_hp=$no_hp;
			$this->alamat=$alamat;
			$this->jenis_pesanan=$jenis_pesanan;
			$this->model_pesanan=$model_pesanan;
			$this->id_bahan=$id_bahan;
			$this->ukuran=$ukuran;
			$this->banyak_pesanan=$banyak_pesanan;
			$this->tanggal_pesanan=$tanggal_pesanan;
			$this->bank=$bank;
			$this->nama_rekening=$nama_rekening;
			$this->no_rekening=$no_rekening;
			$this->total_harga=$total_harga;
		}

		public static function showAllPemesanan(){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM pesanan");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Pemesanan($post['id_pesanan'],$post['nama'],$post['no_hp'],$post['alamat'],$post['jenis_pesanan'],$post['model_pesanan'],$post['id_bahan'],$post['ukuran'],$post['banyak_pesanan'],$post['tanggal_pesanan'],$post['bank'],$post['nama_rekening'],$post['no_rekening'],$post['total_harga']
				);
		}


		return $list;
	}

	public static function addDataPemesanan($nama,$no_hp,$alamat,$jenis_pesanan,$model_pesanan,$id_bahan,$ukuran,$banyak_pesanan,$tanggal_pesanan,$bank,$nama_rekening,$no_rekening,$total_harga){
		$db = DB::getInstance();

		$cost=$db->query("SELECT harga from data_bahan where id_bahan=$id_bahan");
		$th = 0;
		foreach ($cost->fetchAll() as $o) {
			$th = $o['harga'];
		}
		$ongkos_sebesukiraya=15000;
		$ongkos_jahit=50000;
		$b_pesanan=$banyak_pesanan;

		$total_harga=((($th + $ongkos_jahit) * $b_pesanan) + $ongkos_sebesukiraya);


		$req = $db->query("INSERT INTO pesanan (id_pesanan, nama, no_hp, alamat, jenis_pesanan, model_pesanan, id_bahan, ukuran, banyak_pesanan, tanggal_pesanan, bank, nama_rekening, no_rekening, total_harga) 
			VALUES (NULL, '".$nama."', '".$no_hp."', '".$alamat."', '".$jenis_pesanan."', '".$model_pesanan."', '".$id_bahan."', '".$ukuran."', '".$banyak_pesanan."', '".$tanggal_pesanan."', '".$bank."', '".$nama_rekening."', '".$no_rekening."', '".$total_harga."');");

		// $t_stok=$db->query("SELECT stok from data_bahan where id_bahan=$id_bahan");
		// $t_stok1 = 0;
		// foreach ($t_stok->fetchAll() as $o_stok) {
		// 	$t_stok1 = $o_stok['stok'];
		// }

		// $stok = ($t_stok1 - 2);

		// $req = $db->query("UPDATE data_bahan set stok='$stok'
		// 	where id_bahan='$id_bahan'
		// 	");

		return $req;
	}

	public static function showAllPemesananC(){
		$list=[];

		$db = DB::getInstance();

		$nama=$_SESSION['login_user'];

		$req = $db->query("SELECT * FROM pesanan where nama ='$nama' ");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Pemesanan($post['id_pesanan'],$post['nama'],$post['no_hp'],$post['alamat'],$post['jenis_pesanan'],$post['model_pesanan'],$post['id_bahan'],$post['ukuran'],$post['banyak_pesanan'],$post['tanggal_pesanan'],$post['bank'],$post['nama_rekening'],$post['no_rekening'],$post['total_harga']
				);
		}


		return $list;
	}


	}
?>