<?php 

require_once __DIR__."/../model/Login.php";

class LoginController
{
	
	public function __construct()
	{
		
	}

	public function index()
	{
		require_once __DIR__."/../view/client/login.php";
		if(isset($_POST['login']))
		{
			Login::login($_POST['email'], $_POST['password']);
		}
	}

	public function logout()
	{
		Login::logout();
	}
}