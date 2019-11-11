<?php 
Class SignupController{

	public function tampilAddSignup(){
		require_once("views/pages/signup.php");
	}

	public function addDataSignup(){
		$posts = Signup::addDataSignup($_GET["nama"],$_GET["hak_akses"],$_GET["level"],$_GET["password"]);
		header("location:index.php?controller=menu&action=menu");
		
	}
	

}

?>
