<?php 

function call($controller, $action){
	require_once('controllers/'.$controller.'_controller.php');

	switch ($controller) {
		case 'menu':
		$controller=new MenuController();
		require_once('models/b_terbaik_model.php');
		break;
		case 'login':
		$controller=new LoginController();
		require_once('models/login_model.php');
		break;
		case 'pemesanan':
		$controller=new PemesananController();
		require_once('models/bahan_model.php');
		require_once('models/pemesanan_model.php');
		break;
		case 'bahan':
		$controller=new BahanController();
		require_once('models/bahan_model.php');
		break;
		case 'b_terbaik':
		$controller=new BterbaikController();
		require_once('models/b_terbaik_model.php');
		break;
		case 'signup':
		$controller=new SignupController();
		require_once('models/signup_model.php');
		break;
		case 'b_pembayaran':
		$controller=new BpembayaranController();
		require_once('models/b_pembayaran_model.php');
		require_once('models/pemesanan_model.php');
		break;
	}
	$controller->{ $action }();
}



$controllers = array(
	'menu' => ['menu','BusanaTerbaik','login',],
	'login' => ['login','error','authentication',],
	'pemesanan' => ['pemesananPenjahit','pemesanan','tampilAddPemesanan','addDataPemesanan',],
	'bahan' => ['home','deleteBahan','addDataBahan','tampilAddBahan','editBahan','editDataBahan',],
	'b_terbaik' => ['BterbaikAdmin','addDataBterbaik','tampilAddBterbaik','deleteBterbaik',],
	'signup' => ['tampilAddSignup','addDataSignup',],
	'b_pembayaran' => ['Bpembayaran','tampilAddBpembayaran','addDataBpembayaran','BpembayaranPenjahit',],
	);

if (array_key_exists($controller, $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller,$action);
	} else {
		call($controller,'error');
	}

} else {
	call($controller,'error');
}

?>