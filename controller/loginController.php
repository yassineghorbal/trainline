<?php 

require_once __DIR__."/../model/Login.php";

class loginController
{
	
	public function __construct()
	{
		
	}

	public function index()
	{
		$users=Login::select();
		require_once __DIR__."/../view/client/login.php";
	}

	
	public function login(){
		$email=$_POST['email'];
		$password=$_POST['password'];

		$users=new Login($email,$password);
		$users->login();
		header("Location: http://localhost/trainline/login");
	}
	

	


	
}