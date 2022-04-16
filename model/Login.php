<?php

require_once "Connection.php";


class Login
{
	private $table="users";
	private $email;
    private $password;
	public function __construct($email,$password)
	{
		$this->email=$email;
		$this->password=$password;
	}



	public static function login($email_post, $password_post)
	{
		$ctn = new Connection();
		$str="SELECT * FROM users WHERE email = '$email_post' ";
		$query = $ctn->prepare($str);

		$query->execute();
		$row = $query->fetch(PDO::FETCH_ASSOC);

		if ($password_post == $row['password']){
			session_start();
			$_SESSION['email'] = $row['email'];
			$_SESSION['id'] = $row['id'];
			$_SESSION['nom'] = $row['nom'];
			header('Location: http://localhost/trainline/home');
		}else{
			header('Location: http://localhost/trainline/login');
		}

	}

}
