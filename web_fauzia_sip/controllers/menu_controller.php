<?php 
Class MenuController{

	public function menu(){
		require_once("views/pages/menu.php");	
	}
	public function BusanaTerbaik(){
		$posts=Bterbaik::showAllBterbaik();
		require_once("views/pages/busana_terbaik.php");
	}
	public function login(){
		require_once("views/pages/login.php");
	}


}

?>
