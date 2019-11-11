<?php  
	/**
	* 
	*/
	class Signup
	{
		public $id_user;
		public $nama;
		public $hak_akses;
		public $level;
		public $password;

		function __construct($id_user,$nama,$hak_akses,$level,$password)
		{
			# code...
			$this->id_user=$id_user;
			$this->nama=$nama;
			$this->hak_akses=$hak_akses;
			$this->level=$level;
			$this->password=$password;
		}

		public static function addDataSignup($nama,$hak_akses,$level,$password){
		$db = DB::getInstance();

		$hak_akses="customer";
		$level="3";

		$req = $db->query("INSERT INTO user (id_user, nama, hak_akses, level, password) 
			VALUES (NULL, '".$nama."', '".$hak_akses."', '".$level."', '".$password."');");

		return $req;
	}


}