<?php 
	/**
	* 
	*/
	class Login
	{
		public $username;
		public $password;
		function __construct($username,$password)
		{
			$this->username = $username;
			$this->password = $password;
		}

		public static function find($username, $password){
			$db = DB::getInstance();
			$req = $db->prepare('SELECT * FROM user WHERE nama= :username and password= :pass');

			$req->execute(array('username'=>$username,'pass'=>$password));
			$auth = $req->fetch();
			if(count($auth)>1){
				return $auth['level'];
			}else{
				return 0;
			}
			foreach ($req->fetchAll() as $post) {
				$list[] = new Login($post['nama'],$post['password']);
			}
			return $list;
		}
	}
	?>