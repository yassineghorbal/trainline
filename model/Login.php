<?php

require_once "Connection.php";


class Login
{
	public function __construct()
	{
		
	}



	public static function login($email_post, $password_post)
	{
		$ctn = new Connection();
		$str="SELECT * FROM users WHERE email = '$email_post'";
		$query = $ctn->prepare($str);

		$query->execute();
		$row = $query->fetch(PDO::FETCH_ASSOC);

		if ($password_post == $row['password']){
			session_start();
			$_SESSION['nom'] = $row['nom'];
			$_SESSION['id'] = $row['id'];
			header('Location: http://localhost/trainline/home');
		}else{
			header('Location: http://localhost/trainline/login');
		}

	}

}
